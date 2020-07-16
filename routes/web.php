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

/* route trang người dùng*/


Route::get('/','User\UserController@homepage')->name('home');
Route::get('/blog-detail','User\UserController@blogdetail')->name('blog_detail');
Route::get('/blog-grid','User\UserController@bloggrid')->name('blog_grid');
Route::get('/blog-list','User\UserController@bloglist')->name('blog_list');
Route::get('/blog-standard','User\UserController@blogstandard')->name('blog_standard');
Route::get('/cart-page','User\HomeController@view_cart')->name('cart_page');
Route::get('/checkout','User\UserController@checkout')->name('checkout');
Route::get('/contact','User\UserController@contact')->name('contact');
Route::get('/login','User\UserController@login')->name('login');
Route::post('/login','User\UserController@postlogin')->name('user.postlogin');
Route::get('/logout','User\UserController@logout')->name('user.logout');
Route::get('/notfound','User\UserController@notfound')->name('notfound');
Route::get('/register','User\UserController@register')->name('register');
Route::post('/register','User\UserController@postregister')->name('postregister');
Route::get('/shop-detail/{id}','User\UserController@shopdetail')->name('shop_detail');
Route::get('/shop-list','User\UserController@shoplist')->name('shop_list');
Route::get('/bestseller','User\UserController@bestseller')->name('bestseller');
Route::get('/trending','User\UserController@trending')->name('trending');
Route::get('/shop-page','User\UserController@shoppage')->name('shop_page');
Route::get('/shop-with','User\UserController@shopwith')->name('shop_with');
Route::get('add-cart/{id}/{quantity?}','User\HomeController@add_cart')->name('add_cart');
// wishlist
Route::get('wishlist-user','User\HomeController@wishlist')->name('wishlist-user');
Route::get('wishlist/{id}','User\UserController@wishlist')->name('wishlist');
Route::get('ajax-wishlist/{id}','User\UserController@ajax_wishlist')->name('ajax-wishlist');
Route::post('/checkout','User\UserController@checkoutpost')->name('checkoutpost');
Route::post('/comment/{id}','Admin\CommentController@commentpost')->name('commentpost');
// Route::get('cart_page','User\HomeController@view_cart')->name('cart_page');
Route::get('update-cart/{id?}/{quantity?}', 'User\HomeController@update_cart')->name('update-cart');
Route::get('delete-cart/{id?}','User\HomeController@delete_cart')->name('delete-cart');
Route::get('delete-all-cart','User\HomeController@delete_all_cart')->name('delete_all_cart');

// rating
Route::get('ajax-rating','User\HomeController@rating')->name('rating');




/* route trang admin*/
Route::get('admin/login', 'Admin\AdminLoginController@getlogin')->name('admin.login');
Route::post('admin/login', 'Admin\AdminLoginController@postlogin')->name('postlogin');
// register
Route::get('admin/register','Admin\AdminRegisterController@getregister')->name('getregister');
Route::post('admin/register','Admin\AdminRegisterController@postregister')->name('postregister');
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
    Route::get('/','AdminController@index')->name('admin.index');
    Route::resources([
    	'category' => 'CategoryController',
        'product'=>'ProductController',
        'size'=>'SizeController',
        'color'=>'ColorController',
        'productDetail'=>'ProductDetailController',
        'blog' => 'BlogController',
        'banner'=>'BannerController',
        'payment'=>'PaymentController',
        'comment'=>'CommentController',
    ]);

    Route::get('admin/logout', 'AdminloginController@getlogout')->name('logout');
    Route::get('order','OrderController@order_index')->name('order_index');
    Route::get('orderDetail/{id}','OrderController@orderDetail_index')->name('orderDetail_index');
    
    Route::get('ajax-payment', 'PaymentController@ajax_payment')->name('ajax-payment');
});

