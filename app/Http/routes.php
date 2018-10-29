<?php

Route::get('/', 'testc@main');

Route::get('/aboutus', 'testc@abtus');

Route::get('/contactus', 'testc@cntus');


Route::get('/register','testc@rgs');
Route::get('/page2', 'testc@pg2');

Route::post('formsubmit','testc@formsubmit');

//Admin Data

Route::post('admin/login','AdminController@logincheck');
Route::get('admin/login','AdminController@login');
Route::get('admin/logout','AdminController@logout');

Route::group(['middleware'=>'auth'],function(){
    Route::get('admin/home','AdminController@home');
});



/*Route::group(['middleware'=>'web'], function(){
    Route::auth();

Route::get('/home', 'HomeController@index');
});*/

