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

Route::group(['prefix'=>'frontend','as'=>'frontend.'], function (){
    Route::get('/about', 'Frontend\FrontendController@about')->name('about');
    Route::get('/service', 'Frontend\FrontendController@service')->name('service');
    Route::get('/contact', 'Frontend\FrontendController@contact')->name('contact');
    Route::get('/project', 'Frontend\FrontendController@project')->name('project');
    Route::get('/single-project/{id}', 'Frontend\FrontendController@singleProject')->name('singleProject');
    Route::get('/portfolio', 'Frontend\FrontendController@portfolio')->name('portfolio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'slider','as'=>'slider.'], function (){
    Route::get('/slider', 'Backend\SliderController@index')->name('index');
    Route::post('/all-slider', 'Backend\SliderController@store')->name('store');
    Route::post('/delete', 'Backend\SliderController@destroy')->name('delete');
});
Route::group(['prefix'=>'project','as'=>'project.'], function (){
    Route::get('/project', 'Backend\ProjectController@index')->name('index');
    Route::post('/all-project', 'Backend\ProjectController@store')->name('store');
    Route::post('/delete', 'Backend\ProjectController@destroy')->name('delete');
});
