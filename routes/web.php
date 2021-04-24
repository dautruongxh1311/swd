<?php

use Illuminate\Support\Facades\Route;

//frontend  
Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::post('/tim-kiem','App\Http\Controllers\HomeController@search');

//danh muc san pham trang chu
Route::get('/danh-muc-san-pham/{category_id}','App\Http\Controllers\CategoryProduct@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_id}','App\Http\Controllers\BrandProduct@show_branch_home');
Route::get('/chi-tiet-san-pham/{product_id}','App\Http\Controllers\ProductController@details_product');

//Backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');

//link lien ket dang xuat
Route::get('/logout','App\Http\Controllers\AdminController@logout');

//link lien ket dang nhap
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');

//category product
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');

Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@delete_category_product');

Route::get('/unactive-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');

Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@update_category_product');

//Brand product
Route::get('/add-brand-product','App\Http\Controllers\brandProduct@add_brand_product');
Route::get('/all-brand-product','App\Http\Controllers\brandProduct@all_brand_product');

Route::get('/edit-brand-product/{brand_product_id}','App\Http\Controllers\brandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','App\Http\Controllers\brandProduct@delete_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','App\Http\Controllers\brandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','App\Http\Controllers\brandProduct@active_brand_product');

Route::post('/save-brand-product','App\Http\Controllers\brandProduct@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}','App\Http\Controllers\brandProduct@update_brand_product');

// product
Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::get('/all-product','App\Http\Controllers\ProductController@all_product');

Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');

Route::get('/unactive-product/{product_id}','App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}','App\Http\Controllers\ProductController@active_product');

Route::post('/save-product','App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');


//cart
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
Route::get('/delete-cart/{rowId}','App\Http\Controllers\CartController@delete_cart');
Route::post('/update-cart','App\Http\Controllers\CartController@update_cart');

//Checkout
Route::get('/login-checkout','App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/logout-checkout','App\Http\Controllers\CheckoutController@logout_checkout');
Route::get('/payment','App\Http\Controllers\CheckoutController@payment');
Route::get('/checkout','App\Http\Controllers\CheckoutController@checkout');
Route::post('/add-customer','App\Http\Controllers\CheckoutController@add_customer' );
Route::post('/order-place','App\Http\Controllers\CheckoutController@order_place' );
Route::post('/save-checkout-customer','App\Http\Controllers\CheckoutController@save_checkout_customer');
Route::post('/login-customer','App\Http\Controllers\CheckoutController@login_customer' );


//order 
Route::get('/manager-order','App\Http\Controllers\CheckoutController@manager_order');
Route::get('/view-order/{orderId}','App\Http\Controllers\CheckoutController@view_order');