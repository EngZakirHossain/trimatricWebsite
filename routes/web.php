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

//Route::get('/', function () {
//    return view('frontend.pages.index');
//});
Route::get('/', 'Frontend\FrontendController@index')->name('index');

Route::group(['as'=>'frontend.'], function (){
    Route::get('/about', 'Frontend\FrontendController@about')->name('about');
    Route::get('/service', 'Frontend\FrontendController@service')->name('service');
    Route::get('/contact', 'Frontend\FrontendController@contact')->name('contact');
    Route::get('/project', 'Frontend\FrontendController@project')->name('project');
    Route::get('/project/{id}', 'Frontend\FrontendController@singleProject')->name('singleProject');
    Route::get('/portfolio', 'Frontend\FrontendController@portfolio')->name('portfolio');
});

Auth::routes();

Route::get('/backend-dashboard', 'HomeController@index')->name('home');

Route::group(['prefix'=>'backend-slider','as'=>'slider.'], function (){
    Route::get('/slider', 'Backend\SliderController@index')->name('index');
    Route::post('/all-slider', 'Backend\SliderController@store')->name('store');
    Route::post('/delete', 'Backend\SliderController@destroy')->name('delete');
});
Route::group(['prefix'=>'backend-projects','as'=>'project.'], function (){
    Route::get('/project', 'Backend\ProjectController@index')->name('index');
    Route::post('/all-project', 'Backend\ProjectController@store')->name('store');
    Route::post('/delete', 'Backend\ProjectController@destroy')->name('delete');
});
Route::group(['prefix'=>'backend-portfolio','as'=>'portfolio.'], function (){
    Route::get('/portfolio', 'Backend\PortfolioController@index')->name('index');
    Route::post('/all-portfolio', 'Backend\PortfolioController@store')->name('store');
    Route::post('/delete', 'Backend\PortfolioController@destroy')->name('delete');
});
Route::group(['prefix'=>'backend-client','as'=>'client.'], function (){
    Route::get('/clients', 'Backend\ClientController@index')->name('index');
    Route::post('/all-client', 'Backend\ClientController@store')->name('store');
    Route::post('/delete', 'Backend\ClientController@destroy')->name('delete');
});
Route::post('/store', 'Backend\ContactController@store')->name('contact.store');

Route::group(['prefix'=>'backend-contact','as'=>'contact.'], function (){
    Route::get('/all-contacts', 'Backend\ContactController@view')->name('allContacts');
    Route::post('/delete', 'Backend\ContactController@destroy')->name('delete');
});
