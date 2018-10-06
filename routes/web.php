<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api/v1'], function($app)
{
    $app->post('tasks','TaskController@create');
    $app->put('tasks/{id}','TaskController@update');
    $app->delete('tasks/{id}','TaskController@delete');
    $app->get('tasks','TaskController@index');
    $app->get('tasks/{id}','TaskController@getTask');
});