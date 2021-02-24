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
Route::get('training_hug', "PagesController@getTraining")->name('training');
Route::get('services', "PagesController@getServices")->name('services');

//admin
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin.home');
