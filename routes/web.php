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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('heading', 'HeadingController');

Route::group([
    'prefix' => 'question'
], function () {
    Route::get('/create', 'QuestionController@create');
    Route::post('/', 'QuestionController@store');
    Route::get('/{order}/edit', 'QuestionController@edit');
    Route::put('/{question}', 'QuestionController@update');
    Route::delete('/{question}', 'QuestionController@destroy');
});

/* Route::resource('question', 'QuestionController');
Route::get('/question',                 'QuestionController@index');
Route::get('/question/{question}',      'QuestionController@show');
*/
