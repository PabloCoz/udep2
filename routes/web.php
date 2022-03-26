<?php

use App\Http\Controllers\ExamController;
use App\Http\Livewire\Exam\ExamQuestions;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
  
Route::resource('exams', ExamController::class)->middleware('auth')->names('exams');

Route::get('{exam}/pdf', [ExamController::class, 'pdf'])->middleware('auth')->name('pdf');

Route::get('{exam}/questions', ExamQuestions::class)->middleware('auth')->name('questions');