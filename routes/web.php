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




Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::get('/danh-sach-bai-viet', 'PostController@index')->name('post');

Route::get('/lien-he', function () {
    return view('pages.contact');
});

Route::get('/sign-in','AuthController@getLogin')->name('login');
Route::post('/post-login','AuthController@postLogin')->name('postLogin');

Route::get('/sign-up', 'AuthController@screen')->name('register');
Route::post('/sign-up', 'AuthController@register');

Route::get('logout', function () {
    Auth::logout();
    Session::flush();
    return redirect()->route('login');
})->name('logout');

Route::prefix('spa')->group(function () {
    Route::get('employee', function () {
        return view('pages-spa.list-employee');
    });
    Route::get('list-employee', function () {
        return view('pages-spa.list-employee');
    })->name('list-employee');
});

