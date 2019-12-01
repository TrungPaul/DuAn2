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


Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/danh-sach-bai-viet', 'PostController@index')->name('post');
Route::get('/danh-sach-bai-viet/orderBy=view', 'PostController@view')->name('hot_post');
Route::get('/danh-sach-bai-viet/orderBy=date', 'PostController@new')->name('new_post');
Route::get('post/{post_id}/detail', 'PostController@detail')->name('detail_post');
Route::get('{cate_id}/posts_category', 'PostController@posts_category')->name('post_in_cate');
Route::get('list-spa', 'SpaController@show')->name('list-spa');
Route::get('search', 'PostController@search')->name('search');;
Route::get('detail-spa/{idSpa}', 'SpaController@detailSpa')->name('detail-spa');
Route::get('lien-he', 'ContactController@index')->name('view_contact');

Route::group(['namespace' => 'User'], function () {
    Route::get('/thong-tin', 'HomeController@profile')->name('user.profile');

    Route::get('/edit-profile', 'HomeController@editprofile')->name('user.edit-profile');
    Route::post('/edit-profile', 'HomeController@updateprofile')->name('user.update-profile');

    Route::get('change-password', 'HomeController@changePassword')->name('user.change-password');
    Route::post('change-password', 'HomeController@savePassword')->name('user.save-password');
    Route::get('/booking', 'HomeController@book')->name('user.book');

});

Route::get('/sign-in', 'AuthController@getLogin')->name('login');
Route::post('/post-login', 'AuthController@postLogin')->name('postLogin');

Route::get('/sign-up', 'AuthController@screen')->name('register');
Route::post('/sign-up', 'AuthController@register');

Route::get('logout', function () {
    Auth::logout();
    Session::flush();
    return redirect()->route('home');
})->name('logout');
Route::group(['middleware' => 'auth:spa'], function () {
    Route::prefix('spa')->group(function () {
        Route::get('edit-profile-spa', 'SpaController@index')->name('edit-profile-spa');
        Route::get('/', 'SpaController@information')->name('info-spa');
        Route::get('employee', 'StaffController@listEmployee')->name('list-employee');
        Route::get('add-employee', 'StaffController@addEmployee')->name('add-employee');
        Route::post('add-employee', 'StaffController@createEmployee');
        Route::get('employee/{id}', 'StaffController@edit')->name('edit-employee');
        Route::post('employee/{id}', 'StaffController@update');
        //thay đổi trạng thái
        Route::post('employee-status/{id}', 'StaffController@delete');
        Route::get('management-booking', 'BookingOfUserController@getBookingOfSpa')->name('management-booking');
        Route::get('management-booking/{id}', 'BookingOfUserController@getDetailBooking')->name('detail-booking');
        //service
        Route::get('service/{spaId}', 'ServiceController@index')->name('list-service');
        Route::get('service/delete/{serviceId}', 'ServiceController@destroy')->name('delete-service');
        Route::get('service/get-add-service/{spaId}', 'ServiceController@storeService')->name('get-add-service');
        Route::post('service/post-add-service/{spaId}', 'ServiceController@add')->name('get-add-service');
    });
        //service- detail
        Route::post('booking/add', 'BookingOfUserController@addBooking')->name('add-booking');
        Route::get('service-detail', 'ServiceDetailController@index')->name('list-serviceDetail');
        Route::post('service-detail/update/{id}', 'ServiceDetailController@update')->name('update-serviceDetail');
        Route::get('service-detail/getupdate/{id}', 'ServiceDetailController@getUpdate')->name('get-update-serviceDetail');
        Route::get('service-detail/getadd/{spaId}', 'ServiceDetailController@getAdd')->name('getAdd-serviceDetail');
        Route::get('service-detail/delete/{id}', 'ServiceDetailController@destroy')->name('destroy-serviceDetail');
        Route::post('service-detail/add', 'ServiceDetailController@postAddServiceDetail')->name('add-serviceDetail');

});

//comment
Route::post('create-comments', 'CommentController@add')->name('create_comment');

//reply comment
Route::post('create-reply', 'CommentController@reply')->name('create_reply');

//contact
Route::post('contact', 'ContactController@add')->name('contact');

//dang ky spa

Route::get('sign-up-spa', 'SpaController@register');
Route::post('post-spa-register', 'SpaController@postRegister')->name('spa_register');
Route::get('login-spa', 'SpaController@login')->name('login-spa');
Route::post('login-spa', 'SpaController@postLoginSpa');

// Start Admin

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.admin');
    })->name('admin');

    // user
    Route::get('/thanh-vien', 'AdminController@listuser')->name('admin.listuser');
    Route::get('{user}/edit-user', 'AdminController@edituser')->name('admin.edit_user');
    Route::post('/update', 'AdminController@updateuser')->name('admin.updateuser');

    // spa
    Route::get('/spa', 'AdminController@listspa')->name('admin.listspa');
    Route::get('{spa}/edit-spa', 'AdminController@editspa')->name('admin.editspa');
    Route::post('/update-spa', 'AdminController@updatespa')->name('admin.update_spa');

    //post
    Route::get('/post', 'PostController@show')->name('admin.listpost');
    Route::get('post/add-post', 'PostController@add')->name('admin.addpost');
    Route::post('create-post', 'PostController@create_post')->name('admin.create_post');
    Route::get('post/{id}/edit-post', 'PostController@edit')->name('admin.editpost');
    Route::post('update-post', 'PostController@update_post')->name('admin.update_post');
    Route::get('post/{id}/duyet', 'PostController@change_status')->name('admin.change-status-post');
    Route::get('post/{id}/boduyet', 'PostController@change_status_b')->name('admin.change-status-post-b');
    Route::get('post/{id}/delete', 'PostController@delete')->name('admin.deletepost');

    //comment
    Route::get('/comment', 'CommentController@show')->name('admin.listcomment');
    Route::get('comment/{id}/delete', 'CommentController@delete')->name('admin.deletecomment');
    Route::get('reply/{id}/delete', 'CommentController@delete_reply')->name('admin.deletereply');

    //contact
    Route::get('/contact', 'ContactController@show')->name('admin.listcontact');
    Route::get('contact/{id}/reply', 'ContactController@reply')->name('admin.replycontact');
    Route::get('contact/{id}/delete', 'ContactController@delete')->name('admin.deletecontact');
});
// End Admin
