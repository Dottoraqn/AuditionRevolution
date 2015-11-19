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

Route::get('edit_modal', function () {
    return view('edit_modal');
});
Route::get('startProject', function () {
    return view('startProject');
});
Route::get('blade', function () {
    return view('layouts.master');
});
Route::get('layouts', function () {
    return view('layouts.navbar');
});
Route::get('profiles', function () {
    return view('profiles');
});
Route::get('search', function () {
    return view('search');
});
Route::get('about', 'PagesController@about');
Route::get('landing', function () {
    return view('landing');
});
Route::get('messages', function () {
    return view('messages');
});
Route::get('reg2', function () {
    return view('usertype');
});

Route::get('messages', [
    'middleware' => 'acl:manage_user',
    'as' => 'users.admin',
    'uses' => 'UserController@index'
]);

Route::get('projects/dashboard', function() {
    return view('projects/dashboard');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('profile', ['middleware' => 'auth', function() {
  Route::get('profiles', function () {
      return view('profiles');
  });
}]);

Route::get('user/{id}', 'User\UserController@showProfile');


// project page routes
Route::get('/', 'ProductionShowAudition\ProductionShowAuditionController@index');
Route::get('home', 'ProductionShowAudition\ProductionShowAuditionController@index');
Route::get('home/create', 'ProductionShowAudition\ProductionShowAuditionController@create');
Route::get('home/{id}', 'ProductionShowAudition\ProductionShowAuditionController@show');
Route::post('home', 'ProductionShowAudition\ProductionShowAuditionController@store');
//Route::post('home', 'ProductionShowAudition\ProductionShowAuditionController@postQuickUpdate');

Route::get('production_companies', 'ProductionCompanyController@index');
Route::get('production_companies/create', 'ProductionCompanyController@create');
Route::get('production_companies/{id}', 'ProductionCompanyController@show');
Route::post('production_companies', 'ProductionCompanyController@store');

// Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// Route::get('user/profile', [
//     'as' => 'profile', 'uses' => 'UserController@showProfile'
// ]);
