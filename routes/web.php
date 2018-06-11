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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

// Base routes and user creation

Route::get('/home', 'DashboardController@dashboard')->name('dashboard');
Route::get('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/create', 'Auth\RegisterController@create')->name('create-user');

Route::get('/verify/{code}', 'Auth\VerificationController@verify')->name('verify');
Route::post('/verify/resend', 'Auth\VerificationController@resend')->name('resend');
