<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function exams()
    {
        return $this->belongsToMany(Exam::class);
    }

    public function response()
    {
        return $this->belongsTo(Response::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
