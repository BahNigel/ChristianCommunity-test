<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
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

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::get('chat', [ChatController::class, 'showChat'])->name('chat');
Route::get('status', [ChatController::class, 'status'])->name('status');