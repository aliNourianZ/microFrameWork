<?php
use App\Core\Routing\Route;
Route::get('/' , 'homeController@index');
Route::get('/archive', 'archiveController@index');
Route::get('/archive/products', 'archiveController@products');
Route::get('/archive/articles', 'archiveController@articles');
Route::add(['get','post'],"/",function(){
    echo "welcome";
});
Route::post("/a",function(){
    echo "save is ok";
});
Route::put('/b',['controller','Method']);
Route::get('/c','Controller@Method');
// var_dump(Route::routes());