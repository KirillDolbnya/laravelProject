<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/workers', [\App\Http\Controllers\Api\WorkerController::class, 'index']);
Route::get('/workers/{worker}', [\App\Http\Controllers\Api\WorkerController::class, 'show']);
Route::post('/workers', [\App\Http\Controllers\Api\WorkerController::class, 'store']);
Route::patch('/workers/{worker}', [\App\Http\Controllers\Api\WorkerController::class, 'update']);
Route::delete('/workers/{worker}', [\App\Http\Controllers\Api\WorkerController::class, 'destroy']);
