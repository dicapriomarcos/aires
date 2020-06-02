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


Auth::routes();

Auth::routes(['verify' => true]);

/* site */
Route::get('/', 'SiteController@index')->name('index');
Route::get('/carta', 'SiteController@carta')->name('carta');
Route::get('/pideahora', 'SiteController@app')->name('home');

/* CARTA */
Route::get('/carta', 'SiteController@carta')->name('carta');


Route::group(['middleware' => ['auth' , 'admin']], function(){

    /* ADMIN */
    Route::get('/admin/', 'SiteController@admin')->name('admin.index');
    /* ADMIN */
    Route::post('/admin/site/status', 'SiteController@status')->name('site.status');
    /* ORDERS */
    Route::get('/admin/orders', 'OrderController@index')->name('index.orders');
    Route::get('/admin/show/order/{id}', 'OrderController@admin')->name('admin.orders');
    Route::post('/admin/status', 'OrderController@status')->name('order.status');

    // CATEGORIES
    Route::get('/admin/categories', 'CategoryController@index')->name('admin.categories');
    Route::get('/admin/categories/create/{id?}', 'CategoryController@create')->name('create.category');
    Route::post('/admin/categories/store', 'CategoryController@store')->name('store.category');
    Route::post('/admin/categories/destroy', 'CategoryController@destroy')->name('delete.category');

    // PRODUCTS

    Route::get('/admin/products', 'ProductController@index')->name('admin.products');
    Route::get('/admin/products/create/{id?}', 'ProductController@create')->name('create.product');
    Route::post('/admin/products/store', 'ProductController@store')->name('store.product');
    Route::post('/admin/products/delete', 'ProductController@destroy')->name('delete.product');

});

Route::middleware(['auth'])->group( function(){
    Route::get('usuario/misdatos', 'UserController@index')->name('user.index');
    Route::post('usuario/misdatos/guardar', 'UserController@store')->name('user.store');
});

Route::middleware(['auth' , 'verified'])->group( function(){
    /* STRIPE */
    Route::get('checkout', 'StripeController@index')->name('payform');
    Route::get('/stripe', 'StripeController@index');
    Route::post('/pay/stripe', 'StripeController@store')->name('stripe.store');
    Route::post('/pay/bizum', 'StripeController@bizum')->name('stripe.bizum');
    /* ORDER */
    Route::get('/pedido/completo', 'OrderController@success')->name('order.success');
});


/* CART */
Route::get('carrito/', 'CartController@getCart')->name('get.cart');
Route::get('carrito/agregar/{id}', 'CartController@addCart')->name('add.cart');
Route::delete('carrito/remover/{id}', 'CartController@removeCart')->name('add.remove');
Route::get('carrito/borrar-carrito', 'CartController@cleanCart')->name('clean.cart');

