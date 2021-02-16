<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


Route::group(['prefix' => '/employee'],function(){
    Route::get('/index',[EmployeeController::class,'index'])->name('employee.index');
    Route::get('/add',[EmployeeController::class,'add'])->name('employee.add');
});
