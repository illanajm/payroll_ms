<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController; 

Route::get('/main',[dashboardController::class,'index'])->name('dashboard.main');