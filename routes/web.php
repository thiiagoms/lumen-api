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

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'series'], function () use ($router) {

        $router->get('', ['uses' => 'Series\SeriesController@index']);
        $router->get('{id}', ['uses' => 'Series\SeriesController@show']);

        $router->post('', ['uses' => 'Series\SeriesController@store']);

        $router->put('{id}', ['uses' => 'Series\SeriesController@update']);

        $router->delete('{id}', ['uses' => 'Series\SeriesController@destroy']);

        $router->group(['prefix' => '{seriesId}/seasons'], function () use ($router) {

            $router->get('', ['seasons' => 'Season\SeasonsController@index']);

            $router->group(['prefix' => '{seasonId}/episodes'], function () use ($router) {
                $router->get('watch', ['uses' => 'Series\SeriesController@watch']);
            });
        });
    });
});

$router->post('/api/auth', ['uses' => 'UserController@auth']);
