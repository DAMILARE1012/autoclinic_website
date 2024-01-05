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
Route::get('/our_trainings/{id}', 'PagesController@ourTrainings_show')->name('show_training');
Route::get('our_services', "PagesController@getServices")->name('services');
Route::get('gallery', "PagesController@getGallery")->name('gallery');
Route::get('reviews', "ReviewController@index")->name('reviews');
Route::post('post/reviews', "ReviewController@store")->name('store.review');
Route::post('our_training/form','PagesController@downloadForm')->name('download.form');

//admin
Auth::routes();
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () 
{
    Route::get('/', 'DashboardController@index')->name('home');

    //Home 
    Route::get('/home', 'HomeController@index')->name('home.front');
    Route::get('/home/create', 'HomeController@create')->name('home.create'); 
    Route::post('/home/store', 'HomeController@store')->name('home.store');
    Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
    Route::post('/home/update/{id}', 'HomeController@update')->name('home.update');
    Route::get('/home/delete/{id}', 'HomeController@destroy')->name('home.delete');

    //admin Gallery
    Route::get('/gallery', 'GalleryController@index')->name('gallery');
    Route::get('/gallery/create', 'GalleryController@galcreate')->name('gallery.create');
    Route::post('gallery/store', 'GalleryController@galstore')->name('store.gallery');
    Route::get('/gallery/edit/{id}', 'GalleryController@galedit')->name('edit.gallery');
    Route::post('/gallery/update/{id}', 'GalleryController@galupdate')->name('update.gallery');
    Route::get('/gallery/delete/{id}', 'GalleryController@galdestroy')->name('delete.gallery');
    
    //admin Training Hub
    Route::get('/training_hub/trainings', 'TrainingController@training')->name('trainings');
    Route::get('/training_hub', 'TrainingController@index')->name('training_index');
    Route::get('/training_hub/edit/{id}', 'TrainingController@index_edit')->name('edit.index');
    Route::post('/training_hub/update/{id}', 'TrainingController@index_update')->name('update.index');
    Route::get('/training_hub/students', 'TrainingController@students')->name('training_hub');

    Route::get('/training_hub/trainings/create', 'TrainingController@training_create')->name('training.create');
    Route::post('/training_hub/trainings/store', 'TrainingController@training_store')->name('store.training');
    Route::get('/training_hub/trainings/{id}', 'TrainingController@training_show')->name('show.training');
    Route::get('/training_hub/trainings/edit/{id}', 'TrainingController@training_edit')->name('edit.training');
    Route::post('/training_hub/trainings/update/{id}', 'TrainingController@training_update')->name('update.training');
    Route::get('/training_hub/trainings/delete/{id}', 'TrainingController@training_destroy')->name('training.delete');
     //archive and unarchive Training 
     Route::get('/training_hub/trainings/archive/{id}', 'TrainingController@archive')->name('archive');
     Route::get('/training_hub/trainings/unarchive/{id}', 'TrainingController@unarchive')->name('unarchive');

    Route::get('/training_hub/students/generate', 'TrainingController@generate_hub')->name('generate_hub');
    Route::post('/training_hub/students/generate', 'TrainingController@generatestore')->name('store.generate');
    Route::get('/training_hub/students/delete/{id}', 'TrainingController@hub_destroy')->name('delete.training');
    //Training Registration switch 
    Route::get('/enable-reg/{id}', 'TrainingController@enableReg')->name('enable.reg');
    Route::get('/disable-reg/{id}', 'TrainingController@disableReg')->name('disable.reg');

    //Trianers and Students
    Route::get('/training_hub/trainer_student', 'TrainerStudentController@index')->name('trainer_student');
    Route::get('/training_hub/trainer_student/create', 'TrainerStudentController@create')->name('trainer_student.create'); 
    Route::post('/training_hub/trainer_student/store', 'TrainerStudentController@store')->name('store.trainer_student');
    Route::get('/training_hub/trainer_student/edit/{id}', 'TrainerStudentController@edit')->name('edit.trainer_student');
    Route::post('/training_hub/trainer_student/update/{id}', 'TrainerStudentController@update')->name('update.trainer_student');
    Route::get('/training_hub/trainer_student/delete/{id}', 'TrainerStudentController@destroy')->name('delete.trainer_student');
    
    //Admin Inventory
    Route::get('/inventory', 'InventoryController@index')->name('inventory');
    Route::get('/inventory/create', 'InventoryController@inventorycreate')->name('inventory.create'); 
    Route::post('/inventory/store', 'InventoryController@inventorystore')->name('store.inventory');
    Route::get('/inventory/{id}', 'InventoryController@inventoryshow')->name('show.inventory');
    Route::get('/inventory/edit/{id}', 'InventoryController@inventoryedit')->name('edit.inventory');
    Route::post('/inventory/update/{id}', 'InventoryController@inventoryupdate')->name('update.inventory');
    Route::get('/inventory/delete/{id}', 'InventoryController@inventorydestroy')->name('delete.inventory');
    
    //admin Review
    Route::get('/review', 'ReviewController@index')->name('reviews');
    Route::get('/review/{id}', 'ReviewController@reviewshow')->name('show.review');
    Route::get('/disable-review/{id}', 'ReviewController@disablereview')->name('disable.review');
    Route::get('/enable-review/{id}', 'ReviewController@enablereview')->name('enable.review');
    Route::get('/unappoved-review', 'ReviewController@disabledreviewList')->name('unpublished.review');
    Route::get('/review/delete/{id}', 'ReviewController@reviewdestroy')->name('delete.review');
    
    //admin contact 
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::get('/contact/edit/{id}', 'ContactController@edit')->name('contact.edit');
    Route::post('/contact/update/{id}', 'ContactController@conupdate')->name('contact.update');  
    
    //admin about us 
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/about/edit/{id}', 'AboutController@edit')->name('about.edit');
    Route::post('/about/update/{id}', 'AboutController@update')->name('about.update');  
    
    //Admin Services 
    Route::get('/service', 'ServiceController@index')->name('service');
    Route::get('/service/create', 'ServiceController@create')->name('service.create'); 
    Route::post('/service/store', 'ServiceController@store')->name('store.service');
    Route::get('/service/{id}', 'ServiceController@show')->name('show.service');
    Route::get('/service/edit/{id}', 'ServiceController@edit')->name('edit.service');
    Route::post('/service/update/{id}', 'ServiceController@update')->name('update.service');
    Route::get('/service/delete/{id}', 'ServiceController@destroy')->name('delete.service');
});

