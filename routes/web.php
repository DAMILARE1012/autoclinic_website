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
Route::get('book_appointment', "PagesController@appointment")->name('appointment');
Route::post('contact', 'PagesController@mail')->name('sendmail');
Route::get('about_us', "PagesController@getAbout")->name('about');
Route::get('inventory', "PagesController@getInventory")->name('inventory');
Route::get('our_training_hub', "PagesController@getTraining")->name('training');
Route::get('our_services', "PagesController@getServices")->name('services');
Route::get('gallery', "PagesController@getGallery")->name('gallery');
Route::get('reviews', "ReviewController@index")->name('reviews');
Route::post('post/reviews', "ReviewController@store")->name('store.review');
Route::post('our_training/form','PagesController@downloadForm')->name('download.form');

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

//admin Training Hub
Route::get('/admin/training_hub', 'AdminController@training_hub')->name('admin.training_hub');
Route::get('/admin/training_hub/generate', 'AdminController@generate_hub')->name('admin.generate_hub');
Route::post('/admin/training_hub/generate', 'AdminController@generatestore')->name('store.generate');
Route::get('/admin/training_hub/delete/{id}', 'AdminController@hub_destroy')->name('delete.training');

//Admin Inventory
Route::get('/admin/inventory', 'AdminController@inventory')->name('admin.inventory');
Route::get('/admin/inventory/create', 'AdminController@inventorycreate')->name('admin.inventory.create'); 
Route::post('admin/inventory/store', 'AdminController@inventorystore')->name('store.inventory');
Route::get('/admin/inventory/{id}', 'AdminController@inventoryshow')->name('show.inventory');
Route::get('admin/inventory/edit/{id}', 'AdminController@inventoryedit')->name('edit.inventory');
Route::post('admin/inventory/update/{id}', 'AdminController@inventoryupdate')->name('update.inventory');
Route::get('admin/inventory/delete/{id}', 'AdminController@inventorydestroy')->name('delete.inventory');

//admin Review
Route::get('/admin/review', 'AdminController@reviewindex')->name('admin.reviews');
Route::get('/admin/review/{id}', 'AdminController@reviewshow')->name('show.review');
Route::get('/admin/disable-review/{id}', 'AdminController@disablereview')->name('disable.review');
Route::get('/admin/enable-review/{id}', 'AdminController@enablereview')->name('enable.review');
Route::get('/admin/unpublished-review', 'AdminController@disabledreviewList')->name('unpublished.review');
Route::get('/admin/review/delete/{id}', 'AdminController@reviewdestroy')->name('delete.review');

//admin Registration 
Route::get('/admin/enable-reg/{id}', 'AdminController@enableReg')->name('enable.reg');
Route::get('/admin/disable-reg/{id}', 'AdminController@disableReg')->name('disable.reg');