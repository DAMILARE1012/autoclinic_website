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

Route::get('/', 'PagesController@getHomepage')->name('home');
Route::get('contact', "PagesController@getContact")->name('contact');
Route::get('about', "PagesController@getAbout")->name('about');
Route::get('inventory', "PagesController@getInventory")->name('inventory');
Route::get('dealers', "PagesController@getDealers")->name('dealers');
Route::get('services', "PagesController@getServices")->name('services');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
