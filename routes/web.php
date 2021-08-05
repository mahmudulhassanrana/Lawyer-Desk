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

//Authentication
Route::view('/', 'index');
Route::get('/register', 'Authentication\RegistrationController@create');
Route::post('register', 'Authentication\RegistrationController@store');
Route::get('/login', 'Authentication\SessionController@create');
Route::post('/login', 'Authentication\SessionController@store');

//Deactive user
Route::view('/deactiveuser','deactiveuser');

Route::group(['middleware' => ['authentication']], function () {

    Route::get('/logout', 'Authentication\SessionController@destroy');

    //admin
    Route::get('/admin', 'Admin\AdminController@index');

    //admin user
    Route::get('/adminuser', 'Admin\UserController@index');
    Route::get('/adminuser/{user_id}', 'Admin\UserController@show');
    Route::put('/adminuser/{user_id}', 'Admin\UserController@destroy');

    //admin lawyer
    Route::get('/adminlawyer', 'Admin\LawyerController@index');
    Route::get('/adminlawyer/{user_id}', 'Admin\LawyerController@show');
    Route::put('/adminlawyer/{user_id}', 'Admin\LawyerController@destroy');

    //admin lawyer request
    Route::get('/lawyerrequest', 'Admin\LawyerController@view');
    Route::get('/request/{user_id}', 'Admin\LawyerController@edit');
    Route::post('/request/{user_id}', 'Admin\LawyerController@update');
    
    //lawyer
    Route::get('/lawyer', 'Lawyer\PageController@index');
    Route::get('/lawyerprofile', 'Lawyer\PageController@profile');

    //case dairy
    Route::get('/casedairy','Lawyer\CasedairyController@casedairy');
    Route::get('/casedairy/{c_id}','Lawyer\CasedairyController@view');
    Route::put('/casedairy/{c_id}','Lawyer\CasedairyController@delete');
    Route::get('/dairy','Lawyer\CasedairyController@create');
    Route::post('/dairy','Lawyer\CasedairyController@store');
    Route::get('/dairyupdate/{c_id}','Lawyer\CasedairyController@edit');
    Route::post('/dairyupdate/{c_id}','Lawyer\CasedairyController@update');

    //case dismissed
    Route::get('/dismissed/{c_id}','Lawyer\CasedairyController@dismisse');
    Route::post('/dismissed/{c_id}','Lawyer\CasedairyController@dissmissed');
    Route::get('/dismissedlist', 'Lawyer\PageController@dissmissedlist');
    Route::get('/dismissedlist/{c_id}', 'Lawyer\PageController@dissmissedview');

    //case request
    Route::get('/caserequest', 'Lawyer\PageController@request');
    Route::get('/caserequest/{c_id}', 'Lawyer\PageController@caseview');
    Route::put('/caserequest/{c_id}', 'Lawyer\PageController@delete');
    Route::get('/case/{c_id}', 'Lawyer\PageController@accept');
    Route::post('/case/{c_id}', 'Lawyer\PageController@update');

    //cliend
    Route::get('/cliend', 'Lawyer\PageController@cliendlist');
    Route::get('/cliend/{cliend_id}', 'Lawyer\PageController@cliendview');

    //Lawyer feedback
    Route::get('/lawyerfeedback','Lawyer\PageController@system_feedback');
    Route::post('/lawyerfeedback','Lawyer\PageController@feedback');

    //user
    Route::get('/user', 'User\PageController@home');
    Route::get('/userprofile', 'User\PageController@profile');
    Route::get('/userlawyer', 'User\PageController@index');
    Route::get('/userlawyer/{user_id}','User\PageController@show');

    //application
    Route::get('/applicationlist','User\PageController@applicationlist');
    Route::get('/applicationlist/{a_id}','User\PageController@aview');
    Route::put('/applicationlist/{a_id}','User\PageController@destroy');
    Route::get('/application/{user_id}', 'User\PageController@application');
    Route::post('/application', 'User\PageController@store');

});
