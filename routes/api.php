<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

Route::get('/jobs', [JobsController::class, 'index']);