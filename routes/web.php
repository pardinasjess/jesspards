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
    return view('welcome');
});

Route::post('/app', function () {
    return view('app');
});

Route::get('/exam', function () {
    return view('exam');
});

Route::post('/addapp', ['uses'=>'ApplicantController@appReg', 'as'=>'app.add']);

Route::get('/upform', function () {
    return view('upform');
});

Route::get('/eval', function () {
    return view('eval');
});

Route::get('/quest', function () {
    return view('quest');
});

Route::get('/profile/{user_id}', ['uses'=>'EmployeeController@profileIndex', 'as'=>'profile']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth:employees'])->group(function(){
    Route::get('/emp', 'EmployeeController@empshow');
});

Route::middleware('admin')->group(function() {
    Route::get('/admin', 'EmployeeController@show', 'user');
    Route::post('/editemp/{user_id}', ['uses'=>'EmployeeController@editProf', 'as'=>'editemp']);
    Route::get('/delete/{user_id}', ['uses'=>'EmployeeController@deleteemp', 'as'=>'delete']);
    Route::get('/gencode', ['uses'=>'EmployeeController@gencode', 'as'=>'gencode']);
    Route::post('/addemp', ['uses'=>'EmployeeController@postAddEmp', 'as'=>'emp.add']);
});

/*Route::post('profle', 'EmployeeController@update_avatar');*/



