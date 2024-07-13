<?php
namespace App\Core\Routing;

use App\Core\Request;
use Exception;

class Router{
    private $routes;
    private $request;
    private $current_route;
    const BASE_CONTROLLER = "App\Controllers\\";
    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;   
    }
    public function findRoute(Request $request)
    {
        foreach($this->routes as $route){
            if(in_array($request->method(),$route['methods']) && $request->uri()==$route['uri']){
                return $route;
            }
        }
        return null;
    }
    public function dispatch404()
    {
        header('HTTP/1.0 404 Not Found');
        view('errors.404');
        die();
    }

    public function run()
    {
        #405 invalid method

        # 404 not found 
        if(is_null($this->current_route)){
            $this->dispatch404();
        }
        $this->dispatch($this->current_route);
    }
    private function dispatch($route){
        $action = $route['action'];
        #action : null
        if(is_null($action) || empty($action)){
            return; 
        }
        #action : closure
        if(is_callable($action)){
            $action();
            // call_user_func($action); -> will get action's parameters in second parameter of call_user_function.
        }
        #action : controller@method
        if(is_string($action)){
            $action = explode('@',$action);

        }
        #action : ['controller' , 'method']
        if(is_array($action)){
            $class_name = self::BASE_CONTROLLER . $action[0];
            $method =$action[1];
            if(!class_exists($class_name)){
                throw new Exception("Class $class_name Not Exists");
            }
            $controller = new $class_name();
            if(!method_exists($controller,$method)){
                throw new Exception("method $method Not Exists in $class_name.");
            }
            $controller->{$method}(); 
        }
    }
}