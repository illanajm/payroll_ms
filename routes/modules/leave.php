<?php

use App\Http\Controllers\LeaveTypeController;

Route::group(['prefix' => 'leave'],function(){
    Route::get('/',[LeaveTypeController::class,'index'])->name('leave.index');
    Route::get('/types',[LeaveTypeController::class,'types'])->name('leave.types');
    Route::get('/store',[LeaveTypeController::class,'store_form'])->name('leave.store_form');
    Route::post('/store',[LeaveTypeController::class,'store'])->name('leave.store');
    Route::get('/update_form/{id}',[LeaveTypeController::class,'update_form'])->name('leave.update_form');
    Route::post('/update/{id}',[LeaveTypeController::class,'update'])->name('leave.update');
    Route::get('/delete/{id}',[LeaveTypeController::class,'delete'])->name('leave.delete');
});