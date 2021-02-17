<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimekeepingController;


Route::group(['prefix' => '/timekeeping'],function(){
    Route::get('/',[TimekeepingController::class,'index'])->name('timekeeping.index');
    Route::get('/add',[TimekeepingController::class,'add'])->name('timekeeping.add');

    Route::get('/view/id',[TimekeepingController::class,'view'])->name('timekeeping.view');
});
