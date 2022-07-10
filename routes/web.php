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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/users/index', 'UserController@index')->name('user.index')->middleware('auth');
Route::get('/users/show/{id}', 'UserController@show')->name('user.show')->middleware('auth');
Route::get('/users/delete/{id}', 'UserController@delete')->name('user.delete')->middleware('auth');
Route::get('/users/edit/{id}', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::post('/users/update/{id}', 'UserController@update')->name('user.update')->middleware('auth');
Route::get('/users/add', 'UserController@add')->name('user.add')->middleware('auth');
Route::post('/users/store', 'UserController@store')->name('user.store')->middleware('auth');






















Route::get('/todo/index', 'TodoController@index')->name('todo.index')->middleware(['auth', 'is_admin']);

Route::get('/home', 'HomeController@index1')->name('home')->middleware(['auth', 'is_admin']);







Route::get('/todo/show/{id}', 'TodoController@show')->name('todo.show')->middleware('auth');
Route::get('/todo/edit/{id}', 'TodoController@edit')->name('todo.edit')->middleware('auth');
Route::get('/todo/delete/{id}', 'TodoController@delete')->name('todo.delete')->middleware('auth');
Route::post('/todo/update/{id}', 'TodoController@update')->name('todo.update')->middleware('auth');
Route::get('/todo/add', 'TodoController@add')->name('todo.add')->middleware('auth');
Route::post('/todo/store', 'TodoController@store')->name('todo.store')->middleware('auth');
Route::get('/mytasks', 'TodoController@')->name('mytasks')->middleware('auth');



















Route::get('/mytasks', 'TodoController@mytasks')->name('mytasks')->middleware('auth');


Route::get('/mytasks/add_comment/{id}', 'EmployeeController@add_comment')->name('add_comment')->middleware('auth');
Route::post('/mytasks/store_comment/{id}', 'EmployeeController@store_comment')->name('store_comment')->middleware('auth');

Route::get('/mytasks/change_status/{id}', 'EmployeeController@change_status')->name('change_status')->middleware('auth');
Route::post('/mytasks/update_status/{id}', 'EmployeeController@update_status')->name('update_status')->middleware('auth');

Route::get('/mytasks/change_status2/{id}', 'EmployeeController@change_status2')->name('change_status2')->middleware('auth');
Route::post('/mytasks/update_status2', 'EmployeeController@update_status2')->name('update_status2')->middleware('auth');


Route::post('/send_message', 'SiteController@send_message')->name('send_message');





Route::get('/inbox', 'SiteController@inbox_index')->name('inbox_index')->middleware('auth');
Route::get('/inbox_show/{id}', 'SiteController@inbox_show')->name('inbox_show')->middleware('auth');



Route::get('/upload_image_form', 'SiteController@upload_image_form')->name('upload_image_form')->middleware('auth');
Route::post('/store_image', 'SiteController@store_image')->name('store_image')->middleware('auth');


/*Route::get('/ddd', 'TodoController@ddd')->name('todo.ddd');*/
Route::get('/prodact', 'ProdactController@prodact')->name('prodact.index');


