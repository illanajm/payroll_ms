<?php

use App\Http\Controllers\LeaveTypeController;

Route::group(['prefix' => 'leave'],function(){
    Route::get('/',[LeaveTypeController::class,'index'])->name('leave.index');
    Route::get('/store',[LeaveTypeController::class,'store_form'])->name('leave.store_form');
});