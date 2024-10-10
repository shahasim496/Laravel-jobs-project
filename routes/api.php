<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

Route::get('/jobs', [JobsController::class, 'index']);
Route::get('/jobs/{id}', [JobsController::class, 'show']);
Route::delete('/deletejob/{id}', [JobsController::class, 'destroy']);
Route::get('/editjob/{id}', [JobsController::class, 'edit']);
Route::put('/updatejob/{id}', [JobsController::class, 'update']);
Route::post('/addjob', [JobsController::class, 'store']);