<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ChatbotController;

Route::get('/', function () {
    return view('Homepage');
});

Route::post('/submit-loan-application', [LoanController::class, 'submitApplication'])->name('loan.submit');
Route::post('/chatbot/message', [ChatbotController::class, 'getResponse'])->name('chatbot.message');