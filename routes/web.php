<?php

use App\Http\Controllers\HomeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'dashredirect'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index']);

Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard')->middleware(['auth','admin']);
Route::view('/admin/voucher', 'admin.voucher')->name('admin.voucher')->middleware(['auth','admin']);
Route::view('/admin/purchases', 'admin.purchases')->name('admin.purchases')->middleware(['auth','admin']);
Route::view('/admin/parents', 'admin.parents')->name('admin.parents')->middleware(['auth','admin']);
Route::view('/admin/students', 'admin.students')->name('admin.students')->middleware(['auth','admin']);

Route::view('/parents/voucher', 'parents.voucher')->name('parents.voucher')->middleware(['auth','parents']);
Route::view('/parents/purchases', 'parents.purchases')->name('parents.purchases')->middleware(['auth','parents']);