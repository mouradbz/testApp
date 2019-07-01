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
Route::get('/', function () {
    return redirect('client');
})->middleware('auth');;
/*Route::get('/', function () {
    return redirect('home/dashboard');;
})->middleware('auth');*/

Route::view('test','test');
//Route::get('/home', 'HomeController@index');
Route::get('client','HomeController@index');
Route::post('client','HomeController@storeCl');
Route::get('client/{id}','HomeController@destroyCl');
Route::group(['prefix' => 'admin','namespace' => 'Auth'],function(){
    
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
    Route::post('password/reset', 'ResetPasswordController@reset');
});
