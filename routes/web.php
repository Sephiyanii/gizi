<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blogg', function () {
    return view('blogg');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gizi', function () {
    return view('gizi');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/gizi', function () {
    return view('gizi');
});

// Route::get('/tanya', function () {
//     return view('tanya');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'backend', 'middleware'=>['auth']], function(){
    Route::resource('/admin','backendController');
    Route::resource('/Konsul','KonsultasiController');

});

