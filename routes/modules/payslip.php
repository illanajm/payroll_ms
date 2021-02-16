<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayslipController;


Route::group(['prefix' => '/payslip'],function(){
    Route::get('/',[PayslipController::class,'index'])->name('payslip.index');
    Route::get('/process',[PayslipController::class,'process'])->name('payslip.process');
});
