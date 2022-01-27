<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',function (){

    return 'Home';
});

Route::get('dashboard',function (){
   return'dashboard';
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
