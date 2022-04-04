<?php

use App\Http\Livewire\Students\ExamResponse;
use App\Http\Livewire\Students\ExamStudents;
use Illuminate\Support\Facades\Route;

Route::get('students/exams',ExamStudents::class)->name('students.exam');

Route::get('students/{exam}/response', ExamResponse::class)->name('students.response');

