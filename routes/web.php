<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [KontakController::class, "index"])->name('admin');
Route::get('/tambah', [KontakController::class, "tambah"])->name('tambah');
Route::post('/insertdata', [KontakController::class, "insertdata"])->name('insertdata');
Route::get('/tampildata/{id}', [KontakController::class, "tampildata"])->name('tampildata');
Route::post('/updatedata/{id}', [KontakController::class, "updatedata"])->name('updatedata');
Route::get('/deletedata/{id}', [KontakController::class, "deletedata"])->name('deletedata');


