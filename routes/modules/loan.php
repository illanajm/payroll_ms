<?php

use App\Http\Controllers\LoanTypeController;

Route::group(['prefix' => 'loan'],function(){
    Route::get('/',[LoanTypeController::class,'index'])->name('loan.index');
    Route::get('/add',[LoanTypeController::class,'add'])->name('loan.add');
    Route::post('/store',[LoanTypeController::class,'store'])->name('loan.store');
    Route::get('/update_form/{id}',[LoanTypeController::class,'update_form'])->name('loan.update_form');
    Route::post('/update/{id}',[LoanTypeController::class,'update'])->name('loan.update');
    Route::get('/delete/{id}',[LoanTypeController::class,'delete'])->name('loan.delete');
});