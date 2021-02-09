<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/bg');
});

Route::get('/{locale}', function ($locale) {
    return view('layouts.app');
})->middleware('locale');

// Auth routes
Route::get('/{locale}/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/{locale}/login', 'Auth\LoginController@login');
Route::post('/{locale}/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/{locale}/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('/{locale}/password/confirm', 'Auth\ConfirmPasswordController@confirm');
Route::post('/{locale}/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/{locale}/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/{locale}/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('/{locale}/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::get('/{locale}/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/{locale}/register', 'Auth\RegisterController@register');

Route::get('/{locale}/home', 'HomeController@index')->name('home');


// Companies routes
Route::get('/{locale}/companies', 'CompanyController@index');
Route::post('/{locale}/companies', 'CompanyController@store');
Route::get('/{locale}/companies/{company}', 'CompanyController@show');
Route::delete('/{locale}/companies/{company}/delete', 'CompanyController@destroy');

// Goods routes
Route::get('/{locale}/goods', 'GoodsController@index');


Route::get('/app/{locale}/{path1?}/{path2?}/{path3?}/{path4?}', 'HomeController@index')->middleware(['auth', 'locale']);
