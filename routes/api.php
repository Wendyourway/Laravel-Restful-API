<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [LoginController::class, 'login'])->name('api.login');
Route::put('register', [RegisterController::class, 'register'])->name('api.register');

Route::controller(ForgotPasswordController::class)->prefix('password')->group(function () {
    Route::post('/forgot', 'forgot')->name('api.password.forgot');
    Route::post('/reset', 'reset')->name('api.password.reset');
});
