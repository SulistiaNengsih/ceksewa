<?php
use Illuminate\Support\Facades\Route;
use kel6pbpu\ceksewa\Http\Controllers\CalculateController;

Route::get('/sewa', [CalculateController::class, 'show']);
Route::get('/calculate-price', [CalculateController::class, 'calculate']);
?>