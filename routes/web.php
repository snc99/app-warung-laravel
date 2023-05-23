<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\PencatatanController;
use App\Http\Controllers\TotalTagihanController;
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

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/test', function () {
    return view('test');
});

// Route::get('/login', function () {
//     return view('login');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/dashboard', [LayoutsController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout')->name('logout');
});

Route::resource('TotalTagihan', TotalTagihanController::class);
Route::resource('Pencatatan', PencatatanController::class);
