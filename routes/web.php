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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/calendario', [HomeController::class, 'calendario'])->name('calendario');
    Route::get('/1', [HomeController::class, 'datos'])->name('datos');
    Route::get('/documentacion', [HomeController::class, 'documentacion'])->name('documentacion');
});


Route::get('/banner', [HomeController::class, 'homebanner'])->name('homebanner');





// Nuestras rutas personalizadas
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Register
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])
        ->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Password Reset
    Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
        ->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
        ->name('password.email');
    Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
        ->name('password.reset');
    Route::post('reset-password', [ResetPasswordController::class, 'reset'])
        ->name('password.update');
});

// Logout (requiere autenticación)
Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])
        ->name('logout');
});




// Rutas para recuperación de contraseña
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');