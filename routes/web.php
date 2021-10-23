<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;

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
    return view('pages.home');
});


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function(){
    Route::middleware(['provider'])->group(function () {
        Route::resource('provider', ProviderController::class);

        Route::resource('service', ServiceController::class);
    });
    Route::middleware(['customer'])->group(function () {
        Route::resource('customer', CustomerController::class);
        Route::resource('service', ServiceController::class);
        Route::resource('order', OrderController::class);
        Route::get('/cart', 'CartController@index')->name('cart.index');
        Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
        Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
        Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
        Route::resource('cart', CartController::class);
        Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

    });

});


Route::get('/logout', function() {
    Auth::logout();
    redirect('/');
});


