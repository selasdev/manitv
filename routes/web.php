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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Admin

Route::get('/home/user', [App\Http\Controllers\UserController::class, 'index'])->middleware('auth')->name('admin.user');

Route::get('/home/user/create', [App\Http\Controllers\UserController::class, 'creation'])->middleware('auth')->name('admin.user.creation');

Route::post('/home/user/create', [App\Http\Controllers\UserController::class, 'store'])->middleware('auth')->name('admin.user.store');

Route::get('/home/user/{user}', [App\Http\Controllers\UserController::class, 'edit'])->middleware('auth')->name('admin.user.edit');

Route::put('/home/user/{user}', [App\Http\Controllers\UserController::class, 'update'])->middleware('auth')->name('admin.user.update');

Route::get('/home/services', [App\Http\Controllers\ServiceController::class, 'index'])
    ->middleware('auth')
    ->name('services');

Route::get('/home/services/create', [App\Http\Controllers\ServiceController::class, 'create'])
    ->middleware('auth')
    ->name('createService');

Route::post('/home/services/create', [App\Http\Controllers\ServiceController::class, 'store'])
    ->middleware('auth')
    ->name('storeService');


Route::get('/home/packages', [App\Http\Controllers\PackageController::class, 'index'])->middleware('auth')->name('admin.packages');

Route::get('/home/packages/create', [App\Http\Controllers\PackageController::class, 'creation'])->middleware('auth')->name('admin.packages.creation');

Route::post('/home/packages/create', [App\Http\Controllers\PackageController::class, 'store'])->middleware('auth')->name('admin.packages.store');

Route::get('/home/packages/{package}', [App\Http\Controllers\PackageController::class, 'edit'])->middleware('auth')->name('admin.packages.edit');

Route::put('/home/packages/{package}', [App\Http\Controllers\PackageController::class, 'update'])->middleware('auth')->name('admin.packages.update');


//User

Route::get('/home/my-packages', [App\Http\Controllers\PackageUserController::class, 'index'])->middleware('auth')->name('user.packageuser');

Route::get('/home/my-packages/update', [App\Http\Controllers\PackageUserController::class, 'creation'])->middleware('auth')->name('user.packageuser.creation');

Route::post('/home/my-packages/update', [App\Http\Controllers\PackageUserController::class, 'store'])->middleware('auth')->name('user.packageuser.store');