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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/soru','QuestionController@index')->name('question');
Route::post('/soru','QuestionController@getanswer')->name('getanswer');
Route::get('/sonuc','QuestionController@answer')->name('result');
