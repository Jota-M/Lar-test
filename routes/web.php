<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('Inventario',InventarioController::class)->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/',[InventarioController::class,'index'])->name('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
