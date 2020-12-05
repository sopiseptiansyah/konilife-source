<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['register' => false, 'password.reset' => false]);

Route::prefix('admin')->group(function () {
    Route::get('/login', function(){
        // return redirect()->route('admin.dashboard');
        return view('auth.login');
    });

    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');

    
    Route::get('/posts', 'Admin\PostController@post')->name('admin.posts');
    
    Route::get('/post/new', 'Admin\PostController@newPost')->name('admin.new-post');
    
    Route::post('/post/add', 'Admin\PostController@addPost')->name('admin.create-post');
    
    Route::get('/post/{id}/edit', 'Admin\PostController@editPost')->name('admin.edit-post');
    
    Route::post('/post/{id}/update', 'Admin\PostController@updatePost')->name('admin.update-post');
    
    Route::delete('/post/{id}/delete', 'Admin\PostController@dropPost')->name('admin.delete-post');
    
    Route::get('/contact', 'Admin\AdminController@contact')->name('admin.contact');
    
    Route::get('/stores', 'Admin\StoreController@store')->name('admin.stores');

    Route::get('/store/new', 'Admin\StoreController@newStore')->name('admin.new-store');

    Route::post('/store/add', 'Admin\StoreController@addStore')->name('admin.create-store');
    
    Route::get('/store/{id}/edit', 'Admin\StoreController@editStore')->name('admin.edit-store');
    
    Route::post('/store/{id}/update', 'Admin\StoreController@updateStore')->name('admin.update-store');
    
    Route::delete('/store/{id}/delete', 'Admin\StoreController@dropStore')->name('admin.delete-store');

});

Route::get('/', 'PageController@index');

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/articles', 'PostController@index');

Route::get('/article/{slug}', 'PostController@show');

Route::get('/store', function () {
    return view('store');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::post('/contact', 'ContactController@contact')->name('contact');


Route::get('/product/redaxin', function () {
    return view('products.redaxin');
});

Route::get('/product/livergard', function () {
    return view('products.livergard');
});

Route::get('/product/vision', function () {
    return view('products.vision');
});

Route::get('/product/focus', function () {
    return view('products.focus');
});

Route::get('/product/co-q10', function () {
    return view('products.co-q10');
});

Route::get('/product/prosmeto', function () {
    return view('products.prosmeto');
});

Route::get('/product/ostegard', function () {
    return view('products.ostegard');
});

Route::get('/product/glucotrim', function () {
    return view('products.glucotrim');
});

Route::get('/product/imunea', function () {
    return view('products.imunea');
});

Route::get('/product/oxi', function () {
    return view('products.oxi');
});

Route::get('/product/chlorofit', function () {
    return view('products.chlorofit');
});

Route::get('/product/bone', function () {
    return view('products.bone');
});

Route::get('/product/o369', function () {
    return view('products.o369');
});

Route::get('/product/urafit', function () {
    return view('products.urafit');
});

Route::get('/product/omega3', function () {
    return view('products.omega3');
});

Route::get('/product/normovas', function () {
    return view('products.normovas');
});

Route::get('/product/digestcare', function () {
    return view('products.digestcare');
});


// Auth::routes();