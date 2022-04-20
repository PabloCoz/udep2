<?php

namespace App\Http\Controllers\Psychologist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Battery;

class BatteryController extends Controller
{
    public function index()
    {
        $batteries = Battery::all();
        return view('psychologist.batteries.index', compact('batteries'));
    }
}
