<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\userController;

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

Route::get('clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

 });

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/add', [userController::class,'index'])->name('addUser');
Route::post('user/store', [userController::class,'store'])->name('storeUser');
Route::get('user/view', [userController::class,'view'])->name('viewUser');
