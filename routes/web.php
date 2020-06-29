<?php

//use App\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;




Route::view('/', 'frontview.layouts.landing')->name('landing');
Route::get('/home', 'userController\\userController@home')->name('home');

Route::get ('/register', 'userController\\regController@registration')->name('registration');
Route::post ('/register','userController\\regController@validation');
Route::view ('/login', 'frontview.layouts.login')->name('login');

Route::post ('/login', 'userController\\loginController@authLogin');
Route::get ('/profile', 'userController\\profileEdit@profileEdit')->name('profileEdit');
Route::post ('/profile', 'userController\\profileEdit@update')->name('update');
Route::get ('/delete', 'userController\\profileEdit@delete');
Route::get ('/profile/profile_delete', 'userController\\profileEdit@profile_delete');



Route::get ('/passReset', 'userController\\passReset@show');
Route::post ('/passReset', 'userController\\passReset@passReset');
Route::get('/password/reset/{token}', 'userController\\passReset@showPasswordResetForm')->name('passwordResetForm');
Route::post('/password/reset/{token}', 'userController\\passReset@resetPassword')->name('resetPassword');



//Route::group(['middleware' => ['web', 'auth:web'], 'prefix'=>'/', 'namespace'=>'Post'], function() {
//    Route::get('/posts', 'Posts\\PostController@index')->name('posts');
//});

//Posts create



Route::get('/posts/', 'Posts\\PostController@index')->name('posts'); //index
Route::get('/posts/create', 'Posts\\PostController@create')->name('post.create'); //form
Route::post('/posts/store', 'Posts\\PostController@store')->name('post.store'); //store

//Posts update

Route::get('/posts/edit', 'Posts\\PostController@edit')->name('post.edit');
Route::post('/posts/update', 'Posts\\PostController@update')->name('post.update');

//Comments
Route::post('/comments/store/', 'Posts\\Comments@store')->name('comments.add');


//randdom
Route::get('/contacts', 'userController\\userController@hausemasters')->name('hausmasters');
Route::get('/about', 'userController\\userController@about')->name('about');
Route::get('/misc','userController\\userController@misc')->name('misc');
Route::get('/other', 'userController\\userController@others')->name('others');
Route::get('/logout', 'userController\\userController@logout')->name('logout');

































