<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('class', [App\Http\Controllers\Admin\ClassController::class, 'index'])->name('class.index');
Route::get('class/create', [App\Http\Controllers\Admin\ClassController::class, 'create'])->name('create.class');
Route::post('create/store', [App\Http\Controllers\Admin\ClassController::class, 'store'])->name('store.class');
Route::get('class/delete/{id}', [App\Http\Controllers\Admin\ClassController::class, 'delete'])->name('class.delete');
Route::get('class/edit/{id}', [App\Http\Controllers\Admin\ClassController::class, 'edit'])->name('class.edit');










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/details/{id}', [App\Http\Controllers\HomeController::class, 'details'])->name('user.details');


Route::post('/store/user', [App\Http\Controllers\HomeController::class, 'store'])->name('store.user');
Route::get('/verify', [VerificationController::class, 'verify'])->name('verification.verify');

