<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeductionController;


Route::group(['prefix' => '/deductions'],function(){
    Route::get('/add',[DeductionController::class,'add'])->name('deduction.add');
});
