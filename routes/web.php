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
    return view('auth/login');
});

Route::get('/Registerform','Normal\UserController@create');
Route::post('/registeruser','Normal\UserController@store');
Route::get('/loginuser','Normal\UserController@index');

//Routes for CRUD

//student
Route::get('/Studentall','Normal\StudentController@index');

//End student

//Directorate
Route::get('/Directorateall','Normal\DirectorateController@index');

//End Directorate

//school
Route::get('/Schoolall','Normal\SchoolController@index');

//End school

Route::resource('/Ministry','Normal\MinistryController');
Route::resource('/Teacher','Normal\TeacherController');
Route::resource('/ClassRoom','Normal\DirectorateController');

Route::resource('/Matrix','Normal\MatrixController');
Route::resource('/Notice','Normal\NoticeController');
Route::resource('/Father','Normal\FatherController');


Route::resource('/Task','Normal\TaskController');
Route::resource('/Teacher','Normal\TeacherController');
Route::resource('/User','Normal\UserController');

//Routes for home clint

Route::get('/ministry/{ministry}','HomeController@ministry');
Route::get('/directorate/{directorate}','HomeController@directorate');
Route::get('/school/{school}','HomeController@school');
Route::get('/teacher/{teacher}','HomeController@teacher');
Route::get('/student/{student}','HomeController@student');
Route::get('/father/{father}','HomeController@father');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
