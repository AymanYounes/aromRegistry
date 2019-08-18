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

//Route::get('/', function () {
//    return view('home');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'homeDefaultIndex']);
Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'homeIndex']);

/******************************************  Authentication Routes Start  ******************************************/
//Route::group(['prefix' => 'auth'], function () {
    Route::post('/signup', ['uses' => 'Auth\RegisterController@postSignUp', 'as' => 'registerPostSignUp']);
    Route::post('/checkuseremail', ['uses' => 'Ajax\RegisterController@postCheckUserEmail', 'as' => 'ajaxAuthenticationPostCheckUserEmail']);
    Route::post('/post-login', ['uses' => 'Auth\LoginController@postLogin', 'as' => 'loginPostLogin']);
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'loginLogout']);
    Route::get('/welcome', ['uses' => 'ProfileController@getWelcome', 'as' => 'profileGetWelcome']);

//});


Route::get('/projects', ['uses' => 'ProjectsController@index', 'as' => 'projectsIndex']);

/******************************************  Profile Routes  ******************************************/
    Route::get('/my-profile', ['uses' => 'ProfileController@getMyProfile', 'as' => 'profileGetMyProfile']);
    Route::post('/profile-update', ['uses' => 'ProfileController@postUpdateProfile', 'as' => 'profilePostUpdateProfile']);
    Route::get('/profile/{id}', ['uses' => 'ProfileController@index', 'as' => 'profileIndex']);
    Route::get('/make-user-admin/{id}', ['uses' => 'ProfileController@makeUserAdmin', 'as' => 'profileMakeUserAdmin']);

/******************************************  Cases Routes  ******************************************/

    Route::get('/cases', ['uses' => 'CasesController@index', 'as' => 'casesIndex']);
    Route::get('/add-case', ['uses' => 'CasesController@getAddCase', 'as' => 'casesAddCase']);
    Route::post('/create-case', ['uses' => 'CasesController@postCreateCase', 'as' => 'casesPostCreateCase']);
    Route::post('/update-case', ['uses' => 'CasesController@postCreateCase', 'as' => 'casesPostCreateCase']);
    Route::get('/view-case/{id}', ['uses' => 'CasesController@getViewCase', 'as' => 'casesGetViewCase']);
    Route::get('/print-case/{id}', ['uses' => 'CasesController@getPrintCase', 'as' => 'casesGetPrintCase']);
    Route::get('/delete-case/{id}', ['uses' => 'CasesController@getDeleteCase', 'as' => 'casesGetDeleteCase']);
    Route::post('/update-case', ['uses' => 'CasesController@postCreateCase', 'as' => 'casesPostCreateCase']);
    Route::get('/add-case/{project_id}', ['uses' => 'CasesController@getAddProjectCase', 'as' => 'casesAddProjectCase']);
    Route::get('/update-case/{case_id}', ['uses' => 'CasesController@getUpdateProjectCase', 'as' => 'casesUpdateProjectCase']);




/******************************************  Admin Routes  ******************************************/
/******************************************  Users Routes  ******************************************/


Route::group(array('middleware' => ['adminCheck']), function () {
    Route::get('/users', ['uses' => 'UsersController@index', 'as' => 'usersIndex']);
    Route::get('/system-cases', ['uses' => 'CasesController@getSystemCases', 'as' => 'casesGetSystemCases']);
    Route::get('api/cases/list', ['uses' => 'Ajax\CasesController@getList', 'as' => 'casesList']);

});
