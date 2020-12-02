<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/ping', function () use ($router) {
    return [
        'message' => 'ping',
        'timezone' => time(),
//        'environment' => env('APP_ENV'),
    ];
});

$router->get('/error', function () use ($router) {
    throw new Exception('Sentry error!');
});

$router->group(['prefix' => '/api/v1'], function ($router) {
    $router->get('/users', 'UsersController@getUsers');
    $router->put('/users', 'UsersController@update');
    $router->post('/users', 'UsersController@create');
});
