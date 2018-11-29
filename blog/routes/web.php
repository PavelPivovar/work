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




/*Route::get('/rab', 'RabController');*/

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user', 'UserController');
Route::resource('rab', 'RabController');
Route::resource('work', 'WorkController');
Route::resource('student', 'StudentController');
Route::get('who', 'WhoController@index')->name('who');
Route::resource('/company','CompanyController');

Route::group(['prefix'=>'admin','namespace'=>'Admin'/*, 'middleware'	=>	'admin'*/], function(){
    Route::get('/', 'DashboardController@index');
    Route::resource('/companies', 'CompaniesController');
    Route::resource('/professions', 'ProfessionsController');
    Route::resource('/rubrics', 'RubricsController');
    Route::resource('/cities', 'CitiesController');
    Route::resource('/users', 'UsersController');
   /* Route::get('/comments', 'CommentsController@index');
    Route::get('/comments/toggle/{id}', 'CommentsController@toggle');
    Route::delete('/comments/{id}/destroy', 'CommentsController@destroy')->name('comments.destroy');
    Route::resource('/subscribers', 'SubscribersController')*/;
});

/*Route::get('/register/company' , 'CompanyController@create')->name('company');
Route::post('/store/company' , 'CompanyController@store');
Route::get('/edit/company' , 'CompanyController@edit')->name('edit/company');

Route::get('/index/company' , 'CompanyController@index')->name('all/company');*/

Route::get('search/rubric', "SearchController@rubric");