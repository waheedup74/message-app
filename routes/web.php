<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('send_message');
});

Route::get('/retrieve-message', [MessageController::class, 'index']);
Route::get('/message/{identifier}', [MessageController::class, 'showByIdentifier'])->name('message.showbyidentifier');

Route::post('/messages', [MessageController::class, 'store']);
Route::get('/messages/{id}', [MessageController::class, 'show']);
Route::get('/delete-message/{id}', [MessageController::class, 'deleteMessage']);
