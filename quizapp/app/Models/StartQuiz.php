<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartQuiz extends Model
{
    protected $guarded = [];

    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }

    public function responses() {
        return $this->hasMany(QuizResponses::class);
    }
}
