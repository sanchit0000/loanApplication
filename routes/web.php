<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoanController;

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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::group(['middleware'=>'prevent-back-history'], function()
{
Auth::routes();
Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::post('login', [UserController::class, 'login'])->name('login-user'); 
Route::post('registration', [UserController::class, 'registration'])->name('register-user');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');

Route::post('/calculate',[LoanController::class, 'calculate_loan'])->name('calculate-loan');
});
