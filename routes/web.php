<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PencatatanController;
use App\Http\Controllers\TotalTagihanController;

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



// Metod buat atasi middleware di halaman dasboard
Route::get('/dashboard', [LayoutsController::class, 'index'])->middleware('IsLogin');

// Metod Tambah data 
Route::resource('TotalTagihan', TotalTagihanController::class)->middleware('IsLogin');
Route::resource('Pencatatan', PencatatanController::class)->middleware('IsLogin');

// Metod login
route::get('/sesi', [SessionController::class, 'index'])->middleware('IsTamu');
route::get('/sesi/logout', [SessionController::class, 'logout'])->middleware('IsTamu');
route::post('/sesi/login', [SessionController::class, 'login'])->middleware('IsTamu');
