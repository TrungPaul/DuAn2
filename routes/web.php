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
Route::get('{post_id}/detail', 'PostController@detail')->name('detail_post');

Route::get('/lien-he', function () {
    return view('pages.contact');
});

Route::group(['namespace' => 'User'], function(){
    Route::get('/thong-tin', 'HomeController@profile')->name('user.profile');

    Route::get('/edit-profile', 'HomeController@editprofile')-> name('user.edit-profile');
    Route::post('/edit-profile', 'HomeController@updateprofile')->name('user.update-profile');

    Route::get('change-password', 'HomeController@changePassword')->name('user.change-password');
    Route::post('change-password', 'HomeController@savePassword')->name('user.save-password');

});

Route::get('/sign-in','AuthController@getLogin')->name('login');
Route::post('/post-login','AuthController@postLogin')->name('postLogin');

Route::get('/sign-up', 'AuthController@screen')->name('register');
Route::post('/sign-up', 'AuthController@register');

Route::get('logout', function () {
    Auth::logout();
    Session::flush();
    return redirect()->route('home');
})->name('logout');

Route::prefix('spa')->group(function () {
    Route::get('employee', function () {
        return view('pages-spa.list-employee');
    });
    Route::get('list-employee', function () {
        return view('pages-spa.list-employee');
    })->name('list-employee');

    //post
    Route::get('post','PostController@show')->name('list-post');
    Route::get('add','PostController@add')->name('add-post');
    Route::post('create-post', 'PostController@create_post')->name('create-post');
    Route::get('{id}/edit','PostController@edit')->name('edit-post');
    Route::post('update','PostController@update_post')->name('update-post');
});


