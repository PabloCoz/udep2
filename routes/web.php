<?php

use App\Http\Controllers\Psychologist\ExamController;
use App\Http\Controllers\Psychologist\ResponseController;
use App\Http\Livewire\Notification;
use App\Http\Livewire\Psychologist\Battery;
use App\Http\Livewire\Psychologist\Exam\ExamQuestions;
use App\Http\Livewire\Psychologist\UserIndex;
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

Route::resource('exams', ExamController::class)->middleware('auth', 'can:Listar Examen')->names('exams');

Route::get('{exam}/pdf', [ExamController::class, 'pdf'])->middleware('auth')->name('pdf');

Route::get('{exam}/questions', ExamQuestions::class)->middleware('auth')->name('questions');

Route::get('results', [ResponseController::class, 'index'])->middleware('auth', 'can:Ver Respuestas')->name('responses.index');

Route::get('users', UserIndex::class)->middleware('auth', 'can:Listar Usuarios')->name('users');

Route::get('messages', Notification::class)->middleware('auth')->name('messages');

Route::get('battery', Battery::class)->middleware('auth', 'can:Listar Examen')->name('battery');