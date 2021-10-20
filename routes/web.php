<?php

use Illuminate\Support\Facades\Route;
use\App\Http\Controllers\RegisterController;



Route::get('/',[RegisterController::class,'showform']);
Route::post('/',[RegisterController::class,'signup']);



