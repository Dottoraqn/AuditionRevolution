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


Route::get('/', 'MainController@index');
Route::get('home', 'MainController@index');
Route::get('home/create', 'MainController@create');
Route::get('home/{id}', 'MainController@show');
Route::post('home', 'MainController@store');

// auditions page routes
Route::get('auditions', 'ProductionShowAudition\ProductionShowAuditionController@index');
Route::get('auditions/create', 'ProductionShowAudition\ProductionShowAuditionController@create');
Route::get('auditions/{id}', 'ProductionShowAudition\ProductionShowAuditionController@show');
Route::post('auditions', 'ProductionShowAudition\ProductionShowAuditionController@store');
// Route::get('home', 'ProductionShowAudition\ProductionShowAuditionController@getAllShows');

// starting a show
Route::get('production_shows', 'ProductionShowController@index');
Route::get('production_shows/create', 'ProductionShowController@create');
Route::get('production_shows/{id}', 'ProductionShowController@show');
Route::post('production_shows', 'ProductionShowController@store');

//Route::post('home', 'ProductionShowAudition\ProductionShowAuditionController@postQuickUpdate');
//Production Company Team routes
Route::get('production_team', 'ProductionCompanyTeamController@index');
Route::get('production_team/create', 'ProductionCompanyTeamController@create');
Route::get('production_team/{id}', 'ProductionCompanyTeamController@show');
Route::post('production_team', 'ProductionCompanyTeamController@store');

/****** Production Company Routes ******/
Route::get('production_companies', 'ProductionCompanyController@index');
Route::get('production_companies/create', 'ProductionCompanyController@create');
Route::get('production_companies/{id}', 'ProductionCompanyController@show');
Route::post('production_companies', 'ProductionCompanyController@store');

/****** Audition Role Routes ******/
Route::get('audition_roles', 'AuditionRoleController@index');
Route::get('audition_role/create', 'AuditionRoleController@create');
Route::get('audition_roles/{id}', 'AuditionRoleController@show');
Route::post('audition_roles', 'AuditionRoleController@store');
