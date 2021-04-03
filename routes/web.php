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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/api/auth', ['uses' => 'UserController@auth']);

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'series'], function () use ($router) {
        $router->get('/', ['uses' => 'SeriesController@index']);
        $router->get('{id}', ['uses' => 'SeriesController@show']);
        $router->get('{id}/episodes', ['uses' => 'EpisodesController@series']);
        $router->post('', ['uses'  => 'SeriesController@store']);
        $router->delete('{id}', ['uses' => 'SeriesController@destroy']);
    });

    $router->group(['prefix' => 'episodes'], function () use ($router) {
        $router->get('/', ['uses' => 'EpisodesController@index']);
        $router->get('{id}', ['uses' => 'EpisodesController@show']);
        $router->post('', ['uses' => 'EpisodesController@store']);
        $router->put('{id}', ['uses' => 'EpisodesController@update']);
        $router->delete('{id}', ['uses' => 'EpisodesController@destroy']);
    });
});
