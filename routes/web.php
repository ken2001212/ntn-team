<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewUsersController;
use App\Http\Controllers\SickleaveController;
use App\Http\Controllers\EditUsersController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/newuser', [NewUsersController::class, 'index'])->name('newuser');
Route::post('/add-newuser', [NewUsersController::class, 'store'])->name('add-newuser');
Route::get('/sickleave', [SickleaveController::class, 'index'])->name('sickleave');
Route::get('/edituser', [EditUsersController::class, 'index'])->name('edituser');