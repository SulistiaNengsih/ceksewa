<?php
use Illuminate\Support\Facades\Route;
use kel6pbpu\ceksewa\Http\Controllers\SewaMotorController;
use kel6pbpu\ceksewa\Http\Controllers\BuildController;

Route::get('/home', [SewaMotorController::class, 'show']);
Route::get('/calculate', [SewaMotorController::class, 'calculateTotalPrice']);
Route::get('/build', [BuildController::class, 'buildProduk']);
?>