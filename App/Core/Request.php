<?php
namespace App\Core;

use App\Utilities\Urls;

class Request{
    private $params;
    private $method;
    private $agent;
    private $ip;
    private $uri;
    public function __construct() {
        $this->params = $_REQUEST;
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->uri = strtok($_SERVER['REQUEST_URI'],'?');
    }
    public function params(){
        return $this->params;
    }
    public function method(){
        return $this->method;
    }
    public function agent(){
        return $this->agent;
    }
    public function ip(){
        return $this->ip;
    }
    public function uri(){
        return $this->uri;
    }
    public function input($key){
        return $this->params[$key] ?? null;
    }
    public function isset($key){
        return isset($this->params[$key]);
    }
    public function redirect($route){
        header("location: " . site_url($route));
        die();
    }
    
}