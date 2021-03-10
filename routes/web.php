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
    Route::get('/career', 'Frontend\FrontendController@career')->name('career');
    Route::resource('/cv', 'Frontend\CvController');
    Route::get('client', 'Backend\ClientController@client')->name('client');
    Route::get('/team-member', 'Frontend\FrontendController@team')->name('team');
    Route::get('team-member/{name}', 'Frontend\FrontendController@team_member')->name('team-member');
    Route::get('blog', 'Frontend\FrontendController@blog')->name('blog');
    Route::get('blog/details', 'Frontend\FrontendController@blog_view')->name('blog_view');

});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/backend-dashboard', 'HomeController@index')->name('home');

Route::group(['prefix'=>'backend-slider','as'=>'slider.'], function (){
    Route::get('/slider', 'Backend\SliderController@index')->name('index');
    Route::post('/all-slider', 'Backend\SliderController@store')->name('store');
    Route::post('/delete/{$id}', 'Backend\SliderController@destroy')->name('delete');
    Route::get('/edit/{$id}', 'Backend\SliderController@edit')->name('edit');
//    Route::post('/update', 'Backend\SliderController@update')->name('update');
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

Route::group(['prefix'=>'backend-career','as'=>'circular.'], function (){
   Route::get('/create', 'Backend\CareerControler@create')->name('create');
   Route::post('/store', 'Backend\CareerControler@store')->name('store');
   Route::get('/list', 'Backend\CareerControler@index')->name('index');
});

Route::group(['prefix'=>'backend-cv','as'=>'cv.'], function (){
   Route::resource('/list', 'Frontend\CvController');
});

Route::group(['prefix' => 'team', 'as'=>'team_member.'], function (){
    Route::resource('/list', 'Backend\TeamController');
});

Route::group(['prefix' => 'testimonial', 'as'=>'testimonial.'], function (){
    Route::resource('/testimonial', 'Backend\TestimonialController');
});
