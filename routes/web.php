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
Route::get('/danh-sach-bai-viet/orderBy=view', 'PostController@view')->name('hot_post');
Route::get('/danh-sach-bai-viet/orderBy=date', 'PostController@new')->name('new_post');
Route::get('post/{post_id}/detail', 'PostController@detail')->name('detail_post');
Route::get('{cate_id}/posts_category', 'PostController@posts_category')->name('post_in_cate');
Route::get('list-spa', 'SpaController@show')->name('list-spa');
Route::get('search', 'PostController@search')->name('search');;
Route::get('detail-spa/{idSpa}', 'SpaController@detailSpa')->name('detail-spa');
Route::get('lien-he', 'ContactController@index')->name('view_contact');
Route::get('/getbooking/{spaId}', 'BookingOfUserController@getBook')->name('user.getbook');
Route::post('/booking/{spaId}', 'BookingOfUserController@book')->name('user.book');
Route::post('/booking/{spaId}/add', 'BookingOfUserController@addBooking')->name('user.booking');
Route::get('/getbooking-from-service/{serviceId}', 'BookingOfUserController@getBookingFS')->name('service.getbook');
Route::post('/booking-from-service/{serviceId}', 'BookingOfUserController@bookservice')->name('service.book');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function () {
        Route::get('/thong-tin', 'HomeController@profile')->name('user.profile');

        Route::get('/edit-profile', 'HomeController@editprofile')->name('user.edit-profile');
        Route::post('/edit-profile', 'HomeController@updateprofile')->name('user.update-profile');

        Route::get('change-password', 'HomeController@changePassword')->name('user.change-password');
        Route::post('change-password', 'HomeController@savePassword')->name('user.save-password');

        Route::get('list-booking', 'HomeController@listbooking')->name('user.list-booking');
        Route::get('list-booking-cancel', 'HomeController@listbookingcancel')->name('user.list-booking-cancel');
        Route::get('list-booking-done', 'HomeController@listbookingdone')->name('user.list-booking-done');
        //chi tiet lich dat
        Route::get('management-booking/{id}', 'HomeController@getDetailBooking')->name('user-detail-booking');
        //hủy lịch booking của khách
        Route::get('user-cancel-booking/{id}', 'HomeController@cancelBooking')->name('user-cancel-booking');
        Route::get('user-destroy-cancel-booking/{id}', 'HomeController@destroyCancelBooking')->name('user-destroy-cancel-booking');
    });
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
        Route::get('edit-profile-spa', 'SpaController@editProfile')->name('edit-profile-spa');
        Route::post('edit-profile-spa', 'SpaController@updateProfile');
        Route::get('/', 'SpaController@information')->name('info-spa');
        Route::get('employee', 'StaffController@listEmployee')->name('list-employee');
        Route::get('add-employee', 'StaffController@addEmployee')->name('add-employee');
        Route::post('add-employee', 'StaffController@createEmployee');
        Route::get('employee/{id}', 'StaffController@edit')->name('edit-employee');
        Route::post('employee/{id}', 'StaffController@update');
        //thay đổi trạng thái nhân viên
        Route::get('employee-status/{id}', 'StaffController@delete')->name('cancel-employee');
        Route::get('management-booking', 'BookingOfUserController@getBookingOfSpa')->name('management-booking');
        Route::get('management-booking/{id}', 'BookingOfUserController@getDetailBooking')->name('detail-booking');
        Route::get('calendar-finish', 'BookingOfUserController@finishedBook')->name('calendar-finish');
        //hủy lịch booking của khách
        Route::get('cancel-booking/{id}', 'BookingOfUserController@cancelBooking')->name('cancel-booking');
        Route::get('destroy-cancel-booking/{id}', 'BookingOfUserController@destroyCancelBooking')->name('destroy-cancel-booking');
        Route::get('list-cancel-booking', 'BookingOfUserController@listCancelBooking')->name('list-cancel-booking');
        //cập nhật trạng thái hoàn thành dịch vụ
        Route::get('complete-booking/{id}', 'BookingOfUserController@completeBook')->name('complete-booking');
        //service
        Route::get('service/{spaId}', 'ServiceController@index')->name('list-service');
        Route::get('service/delete/{serviceId}', 'ServiceController@destroy')->name('delete-service');
        Route::get('service/get-add-service/{spaId}', 'ServiceController@storeService')->name('get-add-service');
        Route::post('service/post-add-service/{spaId}', 'ServiceController@add')->name('get-add-service');
        //change pass
        Route::get('change-password', 'SpaController@changePass')->name('change-pass');
        Route::post('change-password', 'SpaController@postChangePass');

        //service- detail
        Route::get('service-detail', 'ServiceDetailController@index')->name('list-serviceDetail');
        Route::post('service-detail/{id}', 'ServiceDetailController@update')->name('update-serviceDetail');
        Route::get('service-detail/{id}', 'ServiceDetailController@getUpdate')->name('get-update-serviceDetail');
        Route::get('add-service-detail', 'ServiceDetailController@getAdd')->name('getAdd');
        Route::post('add-service-detail', 'ServiceDetailController@postAddServiceDetail');
        Route::get('service-detail/delete/{id}', 'ServiceDetailController@destroy')->name('destroy-serviceDetail');

    });
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

// đăng nhập
Route::get('login-admin','AdminController@loginAdmin')->name('admin.login');
Route::post('login-admin','AdminController@postLogin')->name('admin.post_login');
Route::get('logout-admin','AdminController@logoutAdmin')->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => 'checkadmin'], function () {
    Route::get('/', 'AdminController@count')->name('admin');

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
    Route::post('contact/send_reply', 'ContactController@send_reply')->name('admin.sendreplycontact');
    Route::get('contact/{id}/delete', 'ContactController@delete')->name('admin.deletecontact');

    //cateogry_post
    Route::get('/category', 'CategoryController@show')->name('admin.listcate');
    Route::get('category/add', 'CategoryController@add')->name('admin.addcate');
    Route::post('create-category', 'CategoryController@create')->name('admin.create_cate');
    Route::get('category/{id}/edit-category', 'CategoryController@edit')->name('admin.editcate');
    Route::post('update-category', 'CategoryController@update')->name('admin.update_cate');
    Route::get('category/{id}/delete', 'CategoryController@delete')->name('admin.deletecate');
});
// End Admin
