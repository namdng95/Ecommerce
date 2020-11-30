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
Route::get('change-locale/{lang}', function ($lang){
    Session::put('language', $lang);
    return redirect()->back();
})->name('change.locale');

Route::group([
    'namespace' => 'Admin',
    'as' => 'admin.',
    'prefix' => 'admin',
], function(){
    Route::get('login', 'LoginController@showLogin')->name('login');
    Route::post('post/login', 'LoginController@login')->name('post.login');

    Route::group([
        'middleware' => 'admin',
    ], function(){
        Route::get('dashboard', 'AdminController@index')->name('dashboard');
        Route::get('logout', 'LoginController@logout')->name('logout');
    });
});

Route::group([
    'namespace' => 'Web',
    'middleware' => 'redirect', 
], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('login', 'LoginController@showLogin')->name('login');
    Route::post('post/login', 'LoginController@login')->name('post.login');
    Route::get('register', 'LoginController@showRegister')->name('register');
    Route::resource('users', 'ProfileController');

    Route::group([
        'middleware' => 'auth',
    ], function(){
        Route::get('logout', 'LoginController@logout')->name('logout');
    });
});
