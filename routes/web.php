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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');

Route::get('/admin/dashboard', function () {
    // Your admin dashboard logic here
})->middleware('role:admin');

Route::get('/products', [App\Http\Controllers\HomeController::class, 'products'])->name('products');
Route::get('/addproduct', [App\Http\Controllers\HomeController::class, 'addproduct'])->name('addproduct');
Route::post('/addproductdetail', [App\Http\Controllers\HomeController::class, 'addproductdetail'])->name('addproductdetail');
Route::get('/editproduct/{id}', [App\Http\Controllers\HomeController::class, 'editproduct'])->name('editproduct');
Route::get('/destroyproduct/{id}', [App\Http\Controllers\HomeController::class, 'destroyproduct'])->name('destroyproduct');
Route::post('/updateproduct', [App\Http\Controllers\HomeController::class, 'updateproduct'])->name('updateproduct');




