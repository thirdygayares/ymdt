<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'PagesController@index');

Route::get('/novem', 'PagesController@novem');
Route::get('/profile', 'PagesController@profile');
Route::get('/fbusers/{id}', 'PagesController@fb');
Route::get('/about', 'PagesController@about');
Route::get('/user/{user}/{company}', 'PagesController@user');

//students
Route::get('/student', 'StudentController@Student');



Route::get('employee/', 'EmployeeController@index');
Route::get('/add-employee', 'EmployeeController@addemployee');
Route::post('store-employee', 'EmployeeController@store');
Route::get('edit-employee/{id}', 'EmployeeController@edit');
Route::put('update-employee/{id}', 'EmployeeController@update');
Route::get('delete-employee/{id}', 'EmployeeController@delete');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
