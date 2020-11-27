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

Route::get('/', 'HomeController@index')->name('home');

Route::get('login', 'Web\LoginController@showLogin')->name('login');
Route::post('post/login', 'Web\LoginController@login')->name('post.login');
Route::get('register', 'Web\LoginController@showRegister')->name('register');

Route::resource('users', 'Web\ProfileController');

Route::get('admin/login', 'Admin\LoginController@showLogin')->name('admin.login');
Route::post('admin/post/login', 'Admin\LoginController@login')->name('admin.post.login');

Route::group([
    'namespace' => 'Admin',
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => 'admin',
], function(){
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
    Route::get('logout', 'LoginController@logout')->name('logout');
});

Route::group([
    'namespace' => 'Web',
    'middleware' => 'auth',
], function(){
    Route::get('logout', 'LoginController@logout')->name('logout');

});
