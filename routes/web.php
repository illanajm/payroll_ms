<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('login',[LoginController::class,'index'])->name('form.login');
Route::get('/main',[dashboardController::class,'index'])->name('dashboard.main');


foreach(glob(__DIR__,"/modules/*.php") as $fillname){
    include $filename;
}