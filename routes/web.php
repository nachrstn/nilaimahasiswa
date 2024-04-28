<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [MahasiswaController::class, 'index']);
Route::get('migrate_db', function() {
    Artisan::call('migrate:fresh');
    dd(Artisan::output());
 });