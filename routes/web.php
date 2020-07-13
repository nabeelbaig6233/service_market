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

/*Route::any('{any}', static function () {
    return view('welcome');
})->where('any', '^(?!admin$).*$');*/
/*Route::get('/',function (){
    return view('welcome');
});
Route::get('/product',function (){
    return view('welcome');
});*/
Route::any('{any}', static function () {
    return view('welcome');
})->name('home')->where('any', '.*');

/*Route::middleware(['admin'])->prefix('admin')->namespace('admin')->group(function(){
    Route::get('/', 'DashboardController@index');
    Route::get('/users','UserController@index')->name('users');
    Route::get('/user/register','UserController@register')->name('user.register');
    Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
    Route::put('/user/update/{id}','UserController@update')->name('post.update');
    Route::post('/users/delete_all','UserController@delete_all')->name('users.delete_all');
});*/

//Route::get('/home', 'HomeController@index')->name('home');
