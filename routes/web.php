<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dashboardController;



foreach(glob(__DIR__. "/modules/*.php") as $filename){
    include $filename;
}