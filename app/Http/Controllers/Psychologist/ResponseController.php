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
        $exams = Exam::find(10)->students()->get();
        return view('psychologist.responses.index', compact('exams'));
    }
}