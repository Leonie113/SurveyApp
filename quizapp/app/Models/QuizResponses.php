<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResponses extends Model
{
    protected $guarded = [];

    public function startquiz() {
        return $this->belongsTo(StartQuiz::class);
    }
}
