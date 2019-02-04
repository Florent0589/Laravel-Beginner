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



/*
Route::get('/hello', function () {
    return 'Hello Florent';
});

// dynamic test
Route::get('/user/{id}', function($id){

    return 'This is user ID '. $id;
});
// about page
Route::get('/about', function() {
    return view('pages.about');
});
*/
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

Route::resource('subjects', 'SubjectsController');

Route::resource('grades', 'GradesController');

Route::get('lecturers/sub-region', 'LecturersController@selectSubregion');
Route::get('lecturers/permanent-sub-region', 'LecturersController@selectPermanentSubregion');
Route::resource('lecturers', 'LecturersController');
Route::get('students/sub-region', 'StudentsController@selectSubregion');
Route::get('students/permanent-sub-region', 'StudentsController@selectPermanentSubregion');
Route::get('/students/statistics', 'StudentsController@statistics');
Route::get('/students/studentlist', 'StudentsController@studentlist');
Route::get('/students/search', 'StudentsController@search');
Route::resource('/students', 'StudentsController');
Route::get('/academic', 'PagesController@services');
Route::get('/finance', 'PagesController@services');





Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


