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
        $responses = Exam::find(1)->responses()->orderBy('name')->get();
        return view('psychologist.responses.index', compact('responses'));
    }
}
