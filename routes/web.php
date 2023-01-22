<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\SampleController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('sample/queues/none', [SampleController::class, 'queuesNone']);
Route::get('sample/queues/database', [SampleController::class, 'queuesDatabase']);
