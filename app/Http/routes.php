<?php



Route::get('/tables', function() {
    return View::make('table');
});
Route::get('/notifications', function() {
    return View::make('notifications');
});

/*Route::get('messages', 'SettingController@get_messages');
Route::get('deletemessage/{id}', 'SettingController@deletemessages');
Route::get('reply', 'SettingController@reply');
 */
//----- user opreations ------
Route::get('home','UserController@home');
Route::get('login', 'UserController@login');
Route::post('login','UserController@login');
Route::get('/','UserController@login');
Route::post('/','UserController@login');
Route::get('logout','UserController@logout');
Route::get('user','UserController@get_user');
//Route::post('block/{status}','UserController@mark_user');
Route::get('mark_user/{action}/{id}','UserController@mark_user');
Route::get('mark_user/{action}/{id}','UserController@mark_user');
Route::get('mark_user/{action}/{id}','UserController@mark_user');
Route::get('adduser','UserController@adduser');
Route::post('adduser','UserController@adduser');
//--- customer opreations ---
//Route::get('table','CustomerController@get_customer');
//Route::get('customer/mark_customer/block/{id}','CustomerController@mark_customer/block');
//Route::get('customer/mark_customer/unblock/{id}','CustomerController@mark_customer/unblock');
//Route::get('customer/mark_customer/delte/{id}','CustomerController@get_customer/mark_customer/delte');

//=========== Products opreations ============

Route::get('product-list','ProductController@product_list');
Route::get('add-product','ProductController@addproduct');
Route::post('add-product','ProductController@addproduct');

Route::get('delete_product/{id}','ProductController@delete_product');
Route::get('update-product/{id}','ProductController@update_product');
Route::post('update-product/{id}','ProductController@update_product');