<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/question', [QuestionController::class, 'index']);
Route::post('/question', [QuestionController::class, 'store']);
Route::get('/reset', [QuestionController::class, 'destroy']);

Route::get('/diskusi', [DiskusiController::class, 'index'])->name('diskusi.index');
Route::post('/diskusi', [DiskusiController::class, 'store'])->name('diskusi.store');
Route::post('/diskusi/{id}/balasan', [DiskusiController::class, 'storeBalasan'])->name('diskusi.storeBalasan');


