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
		// return User::all();
    return view('home');
});
Route::get('projects', function () {
    return view('projects');
});
Route::get('edit_modal', function () {
    return view('edit_modal');
});
Route::get('startProject', function () {
    return view('startProject');
});
Route::get('blade', function () {
    return view('master');
});
Route::get('home', function () {
    return view('home');
});
Route::get('navbar', function () {
    return view('navbar');
});
Route::get('profiles', function () {
    return view('profiles');
});
Route::get('search', function () {
    return view('search');
});
Route::get('about', function () {
    return view('about');
});
Route::get('landing', function () {
    return view('landing');
});
Route::get('messages', function () {
    return view('messages');
});
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
Route::get('auditions', 'ProductionShowAudition\ProductionShowAuditionController@index');

Route::get('/production_companies', function() {
  return view('production_company/index');
});

Route::post('/production_company', function(Request $request) {
  return view('production_company/index');
});

Route::post('/production_company_show/{id}', function($id) {

});

// Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// Route::get('user/profile', [
//     'as' => 'profile', 'uses' => 'UserController@showProfile'
// ]);
