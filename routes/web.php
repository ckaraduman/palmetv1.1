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

Route::get('/', function () {
    return view('welcome');
})->name('main_page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::any('hgf', 'App\Http\Controllers\PageController@index')->name('hgf');
Route::any('help', 'App\Http\Controllers\PageController@help')->name('help');
Route::any('sugges', 'App\Http\Controllers\PageController@sugges')->name('sugges');
Route::any('suggesRecord', 'App\Http\Controllers\PageController@suggesRecord')->name('suggesRecord');
Route::any('cem', 'App\Http\Controllers\PageController@cem')->name('cem');
Route::any('dataset', 'App\Http\Controllers\PageController@dataset')->name('dataset');
Route::any('datalines', 'App\Http\Controllers\PageController@datalines')->name('datalines');
Route::any('dataview', 'App\Http\Controllers\PageController@dataview')->name('dataview');
Route::post('helpRecord', 'App\Http\Controllers\PageController@helpRecord')->name('helpRecord');
Route::any('web', 'App\Http\Controllers\PageController@web')->name('web');
Route::any('request', 'App\Http\Controllers\PageController@request')->name('request');
Route::any('/form1', 'App\Http\Controllers\PageController@form1')->name('form1');
Route::post('/sendMail', 'App\Http\Controllers\PageController@sendMail')->name('sendMail');
Route::any('send-mail', 'App\Http\Controllers\PageController@index1')->name('send-mail');
