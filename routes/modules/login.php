<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dashboardController;


Route::get('/',[LoginController::class,'index'])->name('form.login');