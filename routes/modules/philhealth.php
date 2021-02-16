<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhilHealthController;


Route::group(['prefix' => '/deductions'],function(){
    Route::get('/philhealth',[PhilHealthController::class,'index'])->name('philhealth.index');
});
