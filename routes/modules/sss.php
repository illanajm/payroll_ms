<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SssController;


Route::group(['prefix' => '/deductions'],function(){
    Route::get('/sss',[SssController::class,'index'])->name('sss.index');
});
