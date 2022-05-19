<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

// ログイン画面
Route::get('/', [AuthController::class, 'showLogin'])->name('showLogin');

// 新規ユーザー作成画面
Route::get('showSignup', [AuthController::class, 'showSignup'])->name('showSignup');

// ログイン処理
Route::post('login', [AuthController::class, 'login'])->name('login');

// 新規作成処理
Route::post('store', [AuthController::class, 'store'])->name('store');

// ログイン後遷移
Route::get('home', function () {
    return view('home');
})->name('home');

// 新規作成後遷移
Route::get('top', function () {
    return view('top');
})->name('top');
