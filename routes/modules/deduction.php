<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeductionController;


Route::group(['prefix' => '/deductions'],function(){
    Route::get('/add',[DeductionController::class,'add'])->name('deduction.add');
    Route::post('/add',[DeductionController::class,'store'])->name('deduction.store');
    Route::get('/delete/{id}',[DeductionController::class,'delete'])->name('deduction.delete');
});

Route::group(['prefix' => '/tax'],function(){
    Route::get('/tax',[DeductionController::class,'tax_index'])->name('tax.index');
});

Route::group(['prefix' => '/sss'],function(){
    Route::get('/sss',[DeductionController::class,'sss_index'])->name('sss.index');
});

Route::group(['prefix' => '/philhealth'],function(){
    Route::get('/sss',[DeductionController::class,'phil_index'])->name('philhealth.index');
});

Route::group(['prefix' => '/pagibig'],function(){
    Route::get('/pagibig',[DeductionController::class,'pagibig_index'])->name('pagibig.index');
});

