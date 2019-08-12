<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'homeIndex']);

/******************************************  Authentication Routes Start  ******************************************/
//Route::group(['prefix' => 'auth'], function () {
    Route::post('signup', ['uses' => 'Auth\RegisterController@postSignUp', 'as' => 'registerPostSignUp']);
    Route::post('checkuseremail', ['uses' => 'Ajax\RegisterController@postCheckUserEmail', 'as' => 'ajaxAuthenticationPostCheckUserEmail']);

    Route::post('post-login', ['uses' => 'Auth\LoginController@postLogin', 'as' => 'loginPostLogin']);

    Route::get('logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'loginLogout']);

//});


    Route::get('/projects', ['uses' => 'ProjectsController@index', 'as' => 'projectsIndex']);
    Route::get('/profile', ['uses' => 'ProfileController@index', 'as' => 'profileIndex']);
    Route::get('/cases', ['uses' => 'CasesController@index', 'as' => 'casesIndex']);
    Route::get('/add-case', ['uses' => 'CasesController@getAddCase', 'as' => 'casesAddCase']);