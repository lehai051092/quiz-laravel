<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Login;
use App\Http\Controllers\Admin\Menu\ListMenu;
use App\Http\Controllers\Admin\Menu\Add as MenuAdd;
use App\Http\Controllers\Admin\User\Add as UserAdd;
use App\Http\Controllers\Admin\User\All;
use App\Http\Controllers\Admin\User\ChangePassword;
use App\Http\Controllers\Admin\Menu\Delete as MenuDelete;
use App\Http\Controllers\Admin\User\Delete as UserDelete;
use App\Http\Controllers\Admin\User\Edit as UserEdit;
use App\Http\Controllers\Admin\Menu\Edit as MenuEdit;
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

Route::middleware('auth:admin')->group(function () {
    Route::get('/', [Dashboard::class, 'show'])->name('admin.dashboard');
    Route::get('/logout', [Login::class, 'getLogout'])->name('admin.logout');

    // User
    Route::prefix('user')->group(function () {
        Route::get('/', [All::class, 'getList'])->name('admin.user.list');
        Route::get('/add', [UserAdd::class, 'getFormAdd'])->name('admin.user.add');
        Route::post('/add', [UserAdd::class, 'postAdd'])->name('admin.user.post.add');
        Route::get('/delete/{id}', [UserDelete::class, 'deleteById'])->name('admin.user.delete');
        Route::get('/edit/{id}', [UserEdit::class, 'getFormEdit'])->name('admin.user.edit');
        Route::post('/edit/{id}', [UserEdit::class, 'postEdit'])->name('admin.user.post.edit');
        Route::get('/change-password/{id}', [ChangePassword::class, 'getFormChangePassword'])->name('admin.user.change.password');
        Route::post('/change-password/{id}', [ChangePassword::class, 'postChangePassword'])->name('admin.user.post.change.password');
    });

    // Menu
    Route::prefix('menu')->group(function () {
        Route::get('/', [ListMenu::class, 'getList'])->name('admin.menu.list');
        Route::get('/add', [MenuAdd::class, 'getFormAdd'])->name('admin.menu.add');
        Route::post('/add', [MenuAdd::class, 'postAdd'])->name('admin.menu.post.add');
        Route::get('/delete/{id}', [MenuDelete::class, 'deleteById'])->name('admin.menu.delete');
        Route::get('/edit/{id}', [MenuEdit::class, 'getFormEdit'])->name('admin.menu.edit');
        Route::post('/edit/{id}', [MenuEdit::class, 'postEdit'])->name('admin.menu.post.edit');
    });
});
