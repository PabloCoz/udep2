<?php

namespace App\Http\Controllers\Psychologist;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        $exams = Exam::orderBy('id', 'desc')->paginate(8);
        return view('psychologist.responses.index', compact('exams'));
    }

    public function show(Exam $exam)
    {
        return view('psychologist.responses.show', compact('exam'));
    }
}