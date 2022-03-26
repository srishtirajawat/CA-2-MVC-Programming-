<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('welcome');    
});

//To upload file in laravel, to check the uploaded file; please check laravel/storage/app/public; Uploaded file will be stored here 
// in the public folder
Route:: view('file', 'file'); //file upload question
Route::post('file', [FileController::class, 'index']); 
