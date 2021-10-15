<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;


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
        Route::get('provider', [ProviderController::class, 'index']);

        Route::resource('service', ServiceController::class);
    });
    Route::middleware(['customer'])->group(function () {
        Route::get('customer', [CustomerController::class, 'index']);
        });

});


Route::get('/logout', function() {
    Auth::logout();
    redirect('/');
});


