<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\MyController;
use App\http\controllers\UserController;


Route::get('/contact',[MyController::class,'ContactPage'])-> name('contact');
Route::POST('/contact',[MyController::class,'contactSubmit'])-> name('contact');


Route::get('/login', [UserController::class, 'signin'])->name('login');
Route::post('/login', [UserController::class, 'loginform'])->name('login');
Route::get('/registration',[UserController::class,'create'])->name('registration');
Route::post('/registration',[UserController::class,'createSubmit'])->name('registration');