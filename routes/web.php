<?php

use App\Charts\studentChart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index']);
Route::get('/', [StudentController::class, 'show'])-> name('posts.index');
Route::post('/posts', [StudentController::class, 'calculateGrade'])-> name('posts.store');