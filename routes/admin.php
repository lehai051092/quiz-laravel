<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Login;
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


// Admin
Route::get('/login', [Login::class, 'getLogin'])->name('admin.login');
Route::post('/login', [Login::class, 'postLogin'])->name('admin.post.login');

Route::middleware('auth:admin')->group(function (){
    Route::get('/', [Dashboard::class, 'show'])->name('admin.dashboard');
    Route::get('/logout', [Login::class, 'getLogout'])->name('admin.logout');
});
