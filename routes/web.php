<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/expense', [ExpenseController::class, 'create']);
Route::post('/expense/store', [ExpenseController::class, 'store']);

