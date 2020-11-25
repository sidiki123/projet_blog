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
});

Route::get('/', function () {
    return view('template/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/accordion','PagesController@accordion')->name('accordion');

Route::get('/alert','PagesController@alert')->name('alert');

Route::get('/analitycs','PagesController@analitycs')->name('analitycs');

Route::get('/animations','PagesController@animations')->name('animations');

Route::get('/area_charts','PagesController@area_charts')->name('area_charts');

Route::get('/bar_charts','PagesController@bar_charts')->name('bar_charts');

Route::get('/button','PagesController@button')->name('button');

Route::get('/code_editor','PagesController@code_editor')->name('code_editor');

Route::get('/color','PagesController@color')->name('color');

Route::get('/compose_email','PagesController@compose_email')->name('compose_email');

Route::get('/contact','PagesController@contact')->name('contact');

Route::get('/data_map','PagesController@data_map')->name('data_map');

Route::get('/data_table','PagesController@data_table')->name('data_table');

Route::get('/dialog','PagesController@dialog')->name('dialog');

Route::get('/dropdown','PagesController@dropdown')->name('dropdown');

Route::get('/flot_charts','PagesController@flot_charts')->name('flot_charts');

Route::get('/form_components','PagesController@form_components')->name('form_components');

Route::get('/form_elements','PagesController@form_elements')->name('form_elements');

Route::get('/form_examples','PagesController@form_examples')->name('form_examples');

Route::get('/google_map','PagesController@google_map')->name('google_map');

Route::get('/image_cropper','PagesController@image_cropper')->name('image_cropper');

Route::get('/','PagesController@index')->name('index');

Route::get('/inbox','PagesController@inbox')->name('inbox');

Route::get('/index2','PagesController@index2')->name('index2');

Route::get('/index3','PagesController@index3')->name('index3');

Route::get('/index4','PagesController@index4')->name('index4');

Route::get('/invoice','PagesController@invoice')->name('invoice');

Route::get('/line_charts','PagesController@line_charts')->name('line_charts');

Route::get('/login_register','PagesController@login_register')->name('login_register');

Route::get('/modals','PagesController@modals')->name('modals');

Route::get('/normal_table','PagesController@normal_table')->name('normal_table');

Route::get('/notification','PagesController@notification')->name('notification');

Route::get('/popovers','PagesController@popovers')->name('popovers');

Route::get('/tabs','PagesController@tabs')->name('tabs');

Route::get('/tooltips','PagesController@tooltips')->name('tooltips');

Route::get('/typography','PagesController@typography')->name('typography');

Route::get('/view_email','PagesController@view_email')->name('view_email');

Route::get('/widgets','PagesController@widgets')->name('widgets');

Route::get('/wizard','PagesController@wizard')->name('wizard');

Route::get('/error','PagesController@error')->name('error');