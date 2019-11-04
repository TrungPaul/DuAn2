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



Route::get('/', function () {
    return view('pages.home');
})->name('home');

Auth::routes();

Route::get('/danh-sach-bai-viet', function () {
    return view('pages.list-post');
});
Route::get('/lien-he', function () {
    return view('pages.contact');
});
Route::get('/sign-in','AuthController@getLogin')->name('login');
Route::post('/post-login','AuthController@postLogin')->name('postLogin');
