<?php

use App\Http\Controllers\phonecontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/index',[phonecontroller::class,'index'])->name('index');

Route::get('/index/create',[phonecontroller::class,'create'])->name('create');

Route::post('/index/store',[phonecontroller::class,'store'])->name('store');

Route::get('/index/edit/{phone}',[phonecontroller::class,'edit'])->name('edit');

Route::put('/index/update/{phone}',[phonecontroller::class,'update'])->name('update');

Route::delete('/index/delete/{phone}',[phonecontroller::class,'delete'])->name('delete');




