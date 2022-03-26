<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdditionController;

Route::get('/', function () {
    return view('welcome');    
});
Route:: view('add', 'add');
Route::post('add', [AdditionController::class, 'addnum']);

