<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dashboardController;


Route::get('login',[LoginController::class,'index'])->name('form.login');