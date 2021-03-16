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
Route::get('/admin', 'AdminController@index')->name('admin.home');

//admin Gallery
Route::get('/admin/gallery', 'AdminController@gallery')->name('admin.gallery');
Route::get('/admin/gallery/create', 'AdminController@galcreate')->name('admin.gallery.create');
Route::post('admin/gallery/store', 'AdminController@galstore')->name('store.gallery');
Route::get('admin/gallery/edit/{id}', 'AdminController@galedit')->name('edit.gallery');
Route::post('admin/gallery/update/{id}', 'AdminController@galupdate')->name('update.gallery');
Route::get('/admin/gallery/delete/{id}', 'AdminController@galdestroy')->name('delete.gallery');

//Admin Inventory
Route::get('/admin/inventory', 'AdminController@inventory')->name('admin.inventory');
Route::get('/admin/inventory/create', 'AdminController@inventorycreate')->name('admin.inventory.create'); 
Route::post('admin/inventory/store', 'AdminController@inventorystore')->name('store.inventory');
Route::get('/admin/inventory/{id}', 'AdminController@inventoryshow')->name('show.inventory');
Route::get('admin/inventory/edit/{id}', 'AdminController@inventoryedit')->name('edit.inventory');
Route::post('admin/inventory/update/{id}', 'AdminController@inventoryupdate')->name('update.inventory');
Route::get('admin/inventory/delete/{id}', 'AdminController@inventorydestroy')->name('delete.inventory');