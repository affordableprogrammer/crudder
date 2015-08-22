<?php
    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    |
    | Here is where all API routes are defined.
    |
    */






Route::resource('users', 'Admin\UserController');

Route::get('users/{id}/delete', [ 'as' => 'admin.users.delete', 'uses' => 'Admin\UserController@destroy',]);


Route::resource('profiles', 'Admin\ProfileController');

Route::get('profiles/{id}/delete', [ 'as' => 'admin.profiles.delete', 'uses' => 'Admin\ProfileController@destroy',]);
