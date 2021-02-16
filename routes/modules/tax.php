<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaxController;


Route::group(['prefix' => '/deductions'],function(){
    Route::get('/tax',[TaxController::class,'index'])->name('tax.index');
});
