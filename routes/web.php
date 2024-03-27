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
    return view('index');
});


//Route::resource('kamer', App\Http\Controllers\kamerController::class);
Route::resource('kamer', App\Http\Controllers\kamerController::class);

Route::resource('boeking', App\Http\Controllers\BoekingController::class);

// Route::resource('bookings', App\Http\Controllers\bookingController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/klant',function() {
    $kamers = App\Models\kamer::all();

    return View('klant/index', ['kamers' => $kamers ]);


});

Route::get('/bedankt', function () {
    return view('klant.bedankt');
});

Route::get('klant/{id}/create' ,[App\Http\Controllers\klantController::class, 'create'])->name("create");
Route::resource('klant', \App\Http\Controllers\klantController::class);
