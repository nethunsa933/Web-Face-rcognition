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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/arm', function () {
    return view('arm');
});


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin']], function () {
        // Route::get('/', 'StudentStatusController@index');
        Route::get('/dashboard', 'admin\AdminController@index');
       

        Route::resource('/StudentList', 'admin\StudentController');
        Route::resource('/ProfessorList', 'admin\ProfessorController');


        Route::get('/year', 'admin\StudentController@index');
        Route::get('/searchstudent', 'admin\StudentController@searchstudent');
        Route::get('/searchprofessor', 'admin\ProfessorController@searchprofessor');


        Route::get('/pdf/{valueyear}','admin\PDFController@pdf');

    });
});

