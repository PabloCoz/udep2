<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function response()
    {
        return $this->hasOne(Response::class);
    }
}
