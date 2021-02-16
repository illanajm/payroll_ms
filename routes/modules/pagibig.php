<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagibigController;


Route::group(['prefix' => '/deductions'],function(){
    Route::get('/pagibig',[PagibigController::class,'index'])->name('pagibig.index');
});
