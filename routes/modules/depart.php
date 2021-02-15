<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DepartmentController;


Route::group(['prefix' => '/department'],function(){
    Route::get('/',[DepartmentController::class,'index'])->name('department.index');
    Route::get('/add',[DepartmentController::class,'add'])->name('department.add');
    Route::post('/add/store',[DepartmentController::class,'store'])->name('department.store');
    Route::get('/update/{id}',[DepartmentController::class,'update_form'])->name('department.update_form');
    Route::post('/update/save/{id}',[DepartmentController::class,'update'])->name('department.update');
    Route::get('/{id}',[DepartmentController::class,'delete'])->name('department.delete');
});
