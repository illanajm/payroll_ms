<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; 


Route::get('/login',[LoginController::class,'index'])->name('form.login');