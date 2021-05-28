<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Login;
use App\Http\Controllers\Admin\User\Add;
use App\Http\Controllers\Admin\User\All;
use App\Http\Controllers\Admin\User\ChangePassword;
use App\Http\Controllers\Admin\User\Delete;
use App\Http\Controllers\Admin\User\Edit;
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

    // User
    Route::prefix('user')->group(function () {
        Route::get('/', [All::class, 'getList'])->name('admin.all');
        Route::get('/add', [Add::class, 'getFormAdd'])->name('admin.add');
        Route::post('/add', [Add::class, 'postAdd'])->name('admin.post.add');
        Route::get('/delete/{id}', [Delete::class, 'deleteById'])->name('admin.delete');
        Route::get('/edit/{id}', [Edit::class, 'getFormEdit'])->name('admin.edit');
        Route::post('/edit/{id}', [Edit::class, 'postEdit'])->name('admin.post.edit');
        Route::get('/change-password/{id}', [ChangePassword::class, 'getFormChangePassword'])->name('admin.change.password');
        Route::post('/change-password/{id}', [ChangePassword::class, 'postChangePassword'])->name('admin.post.change.password');
    });
});
