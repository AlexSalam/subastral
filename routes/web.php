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

Route::get('/verify/code/{code}', 'Auth\VerificationController@verify')->name('verify');
Route::get('/verify/resend', 'Auth\VerificationController@form')->name('resend-form')->middleware('auth');
Route::post('/verify/resend', 'Auth\VerificationController@resend')->name('resend')->middleware('auth');

// Campaign Routes

Route::group([
    'prefix' => 'campaign',
    'middleware' => ['auth', 'verified'],
    'as' => 'campaign.'
], function() {

    Route::get('{id}', 'Campaign\CampaignController@read')->name('get');

    Route::get('create', 'Campaign\CampaignController@form')->name('form');
    Route::post('create', 'Campaign\CampaignController@create')->name('create');
    Route::get('edit/{id}', 'Campaign\CampaignController@form')->name('edit-form');
    Route::post('edit/{id}', 'Campaign\CampaignController@update')->name('update');

    Route::delete('{id}', 'Campaign\CampaignController@delete')->name('delete');

});