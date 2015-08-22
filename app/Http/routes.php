<?php
    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/reporting', ['uses' => 'ReportController@index', 'as' => 'Report']);
    Route::post('/reporting', ['uses' => 'ReportController@post']);

    Route::get('routes', function () {
        \Artisan::call('route:list');
        return '<pre>' . \Artisan::output() . '</pre>';
    });
    /*
    |--------------------------------------------------------------------------
    | Admin routes
    |--------------------------------------------------------------------------
    */

    Route::group(['prefix' => 'admin'], function () {
        require Config::get('generator.path_admin_routes');
    });
    /*
    |--------------------------------------------------------------------------
    | API routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
        Route::group(['prefix' => 'v1'], function () {
            require Config::get('generator.path_api_routes');
        });
    });
