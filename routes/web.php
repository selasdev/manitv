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

//Services

Route::get('/home/services', [App\Http\Controllers\ServiceController::class, 'index'])
    ->middleware('auth')
    ->name('services');

Route::get('/home/services/create', [App\Http\Controllers\ServiceController::class, 'create'])
    ->middleware('auth')
    ->name('createService');

Route::post('/home/services/create', [App\Http\Controllers\ServiceController::class, 'store'])
    ->middleware('auth')
    ->name('storeService');

Route::get('/home/services/{service}/edit', [App\Http\Controllers\ServiceController::class, 'edit'])
    ->middleware('auth')
    ->name('editService');

Route::put('/home/services/{service}/edit', [App\Http\Controllers\ServiceController::class, 'update'])
    ->middleware('auth')
    ->name('putService');

//Plans
Route::get('home/plans', [App\Http\Controllers\PlanController::class, 'index'])
    ->middleware('auth')
    ->name('plans');

Route::get('/home/plans/create', [App\Http\Controllers\PlanController::class, 'create'])
    ->middleware('auth')
    ->name('createPlan');

Route::post('/home/plans/create', [App\Http\Controllers\PlanController::class, 'store'])
    ->middleware('auth')
    ->name('storePlan');

Route::get('/home/plans/{plan}/edit', [App\Http\Controllers\PlanController::class, 'edit'])
    ->middleware('auth')
    ->name('editPlan');

Route::put('/home/plans/{plan}/edit', [App\Http\Controllers\PlanController::class, 'update'])
    ->middleware('auth')
    ->name('putPlan');

//Channels
Route::get('/home/channels', [App\Http\Controllers\ChannelController::class, 'index'])
    ->middleware('auth')
    ->name('channels');

Route::get('/home/channels/create', [App\Http\Controllers\ChannelController::class, 'create'])
    ->middleware('auth')
    ->name('createChannel');

Route::post('/home/channels/create', [App\Http\Controllers\ChannelController::class, 'store'])
    ->middleware('auth')
    ->name('storeChannel');

Route::get('/home/channels/{channel}/edit', [App\Http\Controllers\ChannelController::class, 'edit'])
    ->middleware('auth')
    ->name('editChannel');

Route::put('/home/channels/{channel}/edit', [App\Http\Controllers\ChannelController::class, 'update'])
    ->middleware('auth')
    ->name('putChannel');

//Channels plans
Route::get('/home/channels/{channel}/plans/edit', [App\Http\Controllers\ChannelPlanController::class, 'editChannelPlans'])
    ->middleware('auth')
    ->name('editChannelPlans');

Route::post('/home/channels/{channel}/plans/edit', [App\Http\Controllers\ChannelPlanController::class, 'storeChannelPlans'])
    ->middleware('auth')
    ->name('storeChannelPlans');

Route::get('/home/plans/{plan}/channel/edit', [App\Http\Controllers\ChannelPlanController::class, 'editPlanChannels'])
    ->middleware('auth')
    ->name('editPlanChannels');

Route::post('/home/plans/{plan}/channel/edit', [App\Http\Controllers\ChannelPlanController::class, 'storePlanChannels'])
    ->middleware('auth')
    ->name('storePlanChannels');

//Programs
Route::get('/home/programs', [App\Http\Controllers\ProgramController::class, 'index'])
    ->middleware('auth')
    ->name('programs');

Route::get('/home/programs/create', [App\Http\Controllers\ProgramController::class, 'create'])
    ->middleware('auth')
    ->name('createProgram');

Route::post('/home/programs/create', [App\Http\Controllers\ProgramController::class, 'store'])
    ->middleware('auth')
    ->name('storeProgram');

Route::get('/home/programs/{program}/edit', [App\Http\Controllers\ProgramController::class, 'edit'])
    ->middleware('auth')
    ->name('editProgram');

Route::put('/home/programs/{program}/edit', [App\Http\Controllers\ProgramController::class, 'update'])
    ->middleware('auth')
    ->name('putProgram');

//Schedule / ProgramTimes

Route::get('home/channels/{channel}/schedule', [App\Http\Controllers\ProgramTimeController::class, 'index'])
    ->middleware('auth')
    ->name('channelSchedule');

Route::get('home/channels/{channel}/schedule/add', [App\Http\Controllers\ProgramTimeController::class, 'add'])
    ->middleware('auth')
    ->name('addProgramSchedule');

Route::post('home/channels/{channel}/schedule/add', [App\Http\Controllers\ProgramTimeController::class, 'store'])
    ->middleware('auth')
    ->name('storeProgramTime');

Route::get('/home/packages', [App\Http\Controllers\PackageController::class, 'index'])->middleware('auth')->name('admin.packages');

Route::get('/home/packages/create', [App\Http\Controllers\PackageController::class, 'creation'])->middleware('auth')->name('admin.packages.creation');

Route::post('/home/packages/create', [App\Http\Controllers\PackageController::class, 'store'])->middleware('auth')->name('admin.packages.store');

Route::get('/home/packages/{package}', [App\Http\Controllers\PackageController::class, 'edit'])->middleware('auth')->name('admin.packages.edit');

Route::put('/home/packages/{package}', [App\Http\Controllers\PackageController::class, 'update'])->middleware('auth')->name('admin.packages.update');

Route::get('/home/userpackages', [App\Http\Controllers\PackageUserController::class, 'indexAdmin'])->middleware('auth')->name('admin.packageusers.manage');

Route::get('/home/userpackages/{package}', [App\Http\Controllers\PackageUserController::class, 'details'])->middleware('auth')->name('admin.packageusers.details');

Route::put('/home/userpackages/{package}', [App\Http\Controllers\PackageUserController::class, 'update'])->middleware('auth')->name('admin.packageusers.update');


//User

Route::get('/home/my-packages', [App\Http\Controllers\PackageUserController::class, 'index'])->middleware('auth')->name('user.packageuser');

Route::get('/home/my-packages/update', [App\Http\Controllers\PackageUserController::class, 'creation'])->middleware('auth')->name('user.packageuser.creation');

Route::post('/home/my-packages/update', [App\Http\Controllers\PackageUserController::class, 'store'])->middleware('auth')->name('user.packageuser.store');

Route::get('/home/bills', [App\Http\Controllers\PackageUserController::class, 'bills'])->middleware('auth')->name('user.packageuser.bills');
