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

Route::get('/', function () {
    return view('layouts/app');
});

Route::get('/info', [App\Http\Controllers\StartController::class, 'info'])->name('activation');
Route::get('/activ/{id}', [App\Http\Controllers\StartController::class, 'activ'])->where(['id' => '[0-9]+'])->name('activ');
Route::get('/success', [App\Http\Controllers\StartController::class, 'success'])->name('success');
Route::delete('/{id}', [App\Http\Controllers\StartController::class, 'destroy'])->where(['id' => '[0-9]+'])->name('user.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
