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
Route::any('gsm', 'App\Http\Controllers\PageController@gsm')->name('gsm');
Route::any('sugges', 'App\Http\Controllers\PageController@sugges')->name('sugges');
Route::any('suggesRecord', 'App\Http\Controllers\PageController@suggesRecord')->name('suggesRecord');
Route::any('cem', 'App\Http\Controllers\PageController@cem')->name('cem');
Route::any('dataset', 'App\Http\Controllers\PageController@dataset')->name('dataset');
Route::any('insData', 'App\Http\Controllers\PageController@insData')->name('insData');
Route::any('insDataRec', 'App\Http\Controllers\PageController@insDataRec')->name('insDataRec');
Route::any('datalines', 'App\Http\Controllers\PageController@datalines')->name('datalines');
Route::any('transceiver', 'App\Http\Controllers\PageController@transceiver')->name('transceiver');
Route::any('directory', 'App\Http\Controllers\PageController@directory')->name('directory');
Route::post('helpRecord', 'App\Http\Controllers\PageController@helpRecord')->name('helpRecord');
Route::post('gsmRecord', 'App\Http\Controllers\PageController@gsmRecord')->name('gsmRecord');
Route::post('directoryUpdate', 'App\Http\Controllers\PageController@directoryUpdate')->name('directoryUpdate');
Route::any('web', 'App\Http\Controllers\PageController@web')->name('web');
Route::any('request', 'App\Http\Controllers\PageController@request')->name('request');
Route::any('/form1', 'App\Http\Controllers\PageController@form1')->name('form1');
