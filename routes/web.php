<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Mail\ContactMessageCreated;

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
    return view('template/index')->name('index');
});

Auth::routes();

Route::get('/accordion','PagesController@accordion')->name('accordion');

Route::get('/alert','PagesController@alert')->name('alert');

Route::get('/analitycs','PagesController@analitycs')->name('analitycs');

Route::get('/contacter_un_technicien','PagesController@animations')->name('animations');

Route::get('/area_charts','PagesController@area_charts')->name('area_charts');

Route::get('/formations_categorie','PagesController@bar_charts')->name('bar_charts');

Route::get('/a-propos','PagesController@button')->name('a_propos');

Route::get('/code_editor','PagesController@code_editor')->name('code_editor');

Route::get('/color','PagesController@color')->name('color');

Route::get('/compose_email','PagesController@compose_email')->name('compose_email');

Route::get('/data_map','PagesController@data_map')->name('data_map');

Route::get('/data_table','PagesController@data_table')->name('data_table');

Route::get('/dialog','PagesController@dialog')->name('dialog');

Route::get('/dropdown','PagesController@dropdown')->name('dropdown');

Route::get('/flot_charts','PagesController@flot_charts')->name('flot_charts');

Route::get('/form_components','PagesController@form_components')->name('form_components');

Route::get('/form_elements','PagesController@form_elements')->name('form_elements');

Route::get('/form_examples','PagesController@form_examples')->name('form_examples');

Route::get('/verifier_un_technicien','PagesController@google_map')->name('google_map');

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

Route::get('/view_email','PagesController@view_email')->name('view_email');

Route::get('/widgets','PagesController@widgets')->name('widgets');

Route::get('/wizard','PagesController@wizard')->name('wizard');

Route::get('/error','PagesController@error')->name('error');
Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function() {
    Route::resource('users', 'UsersController');
    Route::resource('offres', 'OffresController');
    Route::resource('formations', 'FormationlistsController');
    Route::get('/register_technicien','UsersController@tech_index')->name('technicien.register.index');
    Route::post('postTechnicien', [UsersController::class, 'create_technicien'])->name('technicien.register.store');

});

Route::namespace('Technicien')->prefix('Technicien')->name('technicien.')->middleware('can:manage-posts')->group(function() {
    Route::resource('posts', 'PostController');
    Route::resource('commentsformation', 'commentsformationController');
});

Route::post('/comments/{post}','CommentController@store')->name('comment.store');

Route::post('/commentReply/{comment}','CommentController@storeCommentReply')->name('comments.storeReply');

Route::get('/ville/{region}','PagesController@villes')->name('page_ville');

Route::get('/technicien/{ville}','PagesController@techs')->name('technicien_detail');

Route::get('/formations/{categ}','HomeController@formations')->name('formations');

Route::get('/formation_liste/{formation}','HomeController@formation_liste')->name('formation_liste');

Route::get('/formation/detail/{formation_liste}','HomeController@formation_detail')->name('formation_detail');
Route::post('/like','PagesController@like')->name('detail.like');

Route::get('/recherche','PagesController@search')->name('technicien.search');

Route::get('/contact','PagesController@typography')->name('typography');

Route::post('/contact','PagesController@contact_form')->name('contact_form');

Route::get('/offres','PagesController@offres')->name('offres');

// letechnicien.agree@gmail.com


// Route::get('test-email',function(){
//     return new ContactMessageCreated('Sidiki','sidikiouedraogo2000@gmail.com','Juste un test de mail' );
// });
