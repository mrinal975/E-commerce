<?php


Route::get('/404',function (){
    return view('404');
});

Route::get('/','WelcomeController@index');
Route::post('/search/product','SearchproductController@index');
Route::get('/cateory-view/{id}','WelcomeController@cateory');
Route::get('/contact','WelcomeController@contact');
Route::get('/product-details/{id}','WelcomeController@productDetails');
//Cart
Route::get('/cart/add','CartController@addToCart');
Route::get('/cart/show', 'CartController@showCart');
Route::get('/cart/delete/{id}', 'CartController@deleteCartProduct');
Route::get('/cartQuantityUpdate/{id}', 'CartController@QuantityUpdate');

///customer/login
Route::get('/checkout','CheckoutController@index');
Route::post('/checkout/sign-up','CheckoutController@customerRegistration');
Route::post('/customer/login','CheckoutController@customerlogin');
Route::get('/checkout/shipping','CheckoutController@showShippingForm');
Route::post('/checkout/save-shipping','CheckoutController@saveShipingInfo');
Route::get('/checkout/payment','CheckoutController@showPaymentForm');
Route::post('/checkout/save-payment','CheckoutController@saveOrderInfo');
Route::get('/checkout/my-home','CheckoutController@customerHome');

Route::get('/dashboard/logout','CheckoutController@logout');


Route::get('/view/profile','ProfileController@viewProfile');
Route::get('/edit/profile','ProfileController@editProfile');

Route::post('/update/information','ProfileController@updateprofileInformation');
//Stripe Cashier
Route::get('/cashiers',function (){
    return view('frontEnd.cashier.cashierContent');
});
Route::post('/charge','CheckoutController@postCheckout');

//star like
Route::post('/starlike','CheckoutController@starlike');

Auth::routes();




Route::group(['middleware'=>['auth','admin']],function (){

    //Category Route
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/category/add', 'CategoryController@createCategory');
    Route::post('/category/save/','CategoryController@storeCategory');
    Route::get('/category/manage','CategoryController@manageCategory');
    Route::get('/category/edit/{id}','CategoryController@editCategory');
    Route::post('/category/update','CategoryController@updateCategory');
    Route::get('/category/delete/{id}','CategoryController@deleteCategory');

    //Manufacturer Route
    Route::get('/manufacturer/add','ManufacturerController@createManufacturer');
    Route::post('/manufacturer/save/','ManufacturerController@storeManufacturer');
    Route::get('/manufacturer/manage','ManufacturerController@manageManufacturer');
    Route::get('/manufacturer/edit/{id}','ManufacturerController@editManufacturer');
    Route::post('/manufacturer/update','ManufacturerController@updateManufacturer');
    Route::get('/manufacturer/delete/{id}','ManufacturerController@deleteManufacturer');

    //Product Route
    Route::get('/product/add','ProductController@createProduct');
    Route::post('/product/save','ProductController@storeProduct');
    Route::get('/product/manage','ProductController@manageProduct');
    Route::get('/product/edit/{id}','ProductController@editProduct');
    Route::get('/product/view/{id}','ProductController@viewProduct');
    Route::post('/product/update','ProductController@updateProduct');
    Route::get('/product/delete/{id}','ProductController@deleteProduct');

    //Order Route
    Route::get('/new/order','OrderManage@viewnewOrder');
    Route::get('/order/delivered/{id}','OrderManage@deliveringOrder');
    Route::get('/delivered/order','OrderManage@devilered');
    Route::get('/order/delete/{id}','OrderManage@deleteorder');
    Route::get('order/delete/delever/page/{id}','OrderManage@cancelorder');
    Route::get('order/delivered/view/{id}','OrderManage@viewproductinformation');

});