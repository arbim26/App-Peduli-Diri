<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerjalananController; 

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
    return view('login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin',[LoginController::class, 'postlogin']);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registernew',[LoginController::class, 'registernew']);
Route::get('/logout',[LoginController::class, 'logout']);

Route::middleware(['auth:user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    });
    Route::get('/perjalanan',[PerjalananController::class,'perjalanan'])->name('perjalanan');

    
Route::get('/tambah', function () {
    return view('tambah.tambah');
});
Route::post('/insert', [PerjalananController::class, 'create']);


});
