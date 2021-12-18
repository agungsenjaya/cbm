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

// Route::GET('/', function () {
//     return view('welcome');
// });
/**
 * 
 * Client Routes
 */

Route::GET('/','ClientController@index')->name('index');
Route::GET('about','ClientController@about')->name('about');
Route::GET('service','ClientController@service')->name('service');
Route::GET('contact','ClientController@contact')->name('contact');
Route::POST('contact/send','ClientController@contact_send')->name('contact.send');

Route::GET('blog','ClientController@blog')->name('blog');
Route::GET('blog/view/{id}','ClientController@blog_view')->name('blog.view');

Route::GET('project','ClientController@project')->name('project');
Route::GET('project/view/{id}','ClientController@project_view')->name('project.view');

Route::GET('join','ClientController@join')->name('join');

/**
 * 
 * Admin Routes
 */

Auth::routes(['register' => false]);

Route::GET('/home', 'HomeController@index')->name('home');
Route::GET('/account', 'HomeController@account')->name('account');
Route::POST('/account/update', 'HomeController@account_update')->name('account.update');
Route::GET('/mailist', 'HomeController@mailist')->name('mailist');

Route::GET('/projects','ProjectController@index')->name('projects.index');
Route::GET('/projects/edit/{id}','ProjectController@edit')->name('projects.edit');
Route::POST('/projects/update/{id}','ProjectController@update')->name('projects.update');
Route::POST('/projects/store','ProjectController@store')->name('projects.store');
Route::GET('/projects/create','ProjectController@create')->name('projects.create');

Route::GET('/blogs','BlogController@index')->name('blogs.index');
Route::GET('/blogs/edit/{id}','BlogController@edit')->name('blogs.edit');
Route::POST('/blogs/update/{id}','BlogController@update')->name('blogs.update');
Route::POST('/blogs/store','BlogController@store')->name('blogs.store');
Route::GET('/blogs/create','BlogController@create')->name('blogs.create');

Route::GET('/sliders','SliderController@index')->name('sliders.index');
Route::GET('/sliders/edit/{id}','SliderController@edit')->name('sliders.edit');
Route::POST('/sliders/update/{id}','SliderController@update')->name('sliders.update');
Route::POST('/sliders/store','SliderController@store')->name('sliders.store');
Route::GET('/sliders/create','SliderController@create')->name('sliders.create');