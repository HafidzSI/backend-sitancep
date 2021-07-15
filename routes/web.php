<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PengerjaanController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\Lapor_cepatController;

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
    return view('auth.login');
});

Route::get('/login',[App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',[App\Http\Controllers\Auth\LoginController::class,'login']);
Route::post('/logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');

Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify');

Route::post('login/{provider}/callback',[App\Http\Controllers\Auth\LoginController::class,'handleCallback']);

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/report', [ReportController::class,'index']);
    Route::get('/report_cepat', [Lapor_cepatController::class,'index']);
    Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class,'showRegistrationForm'])->name('register');
    Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class,'register']);
});

Route::get('/pengerjaan', [PengerjaanController::class,'index']);
Route::get('/history', [HistoryController::class,'index']);
