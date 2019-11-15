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

Route::group(['namespace' => 'Auth'], function(){
    Route::get('/lay-lai-mat-khau','ForgotPasswordController@getFormResetPassword')->name('get.resetform');
    Route::post('/lay-lai-mat-khau','ForgotPasswordController@sendCodeResetPassword');
    Route::get('/reset-password','ForgotPasswordController@resetPassword')->name('get.linkreset');

});

Route::get('/sign-up', function () {
    return view('pages.sign-up');
})->name('register');

Route::post('/sign-up', 'AuthController@register');

Route::get('/spa','Spa\ListSpaController@index');

Route::get('/thong-tin', 'User\HomeController@profile')->name('user.profile');
Route::get('/edit-profile', 'User\HomeController@editprofile')-> name('user.edit-profile');
Route::post('/edit-profile', 'User\HomeController@updateprofile')->name('user.update-profile');

Route::get('change-password', 'User\HomeController@changePassword')->name('user.change-password');
Route::post('change-password', 'User\HomeController@savePassword')->name('user.save-password');

Route::get('/logout', 'AuthController@logout')->name('logout');
