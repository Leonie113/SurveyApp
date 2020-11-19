<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Str;

class Quiz extends Model
{
    protected $guarded = [];

    public function path() {
        return url('/quiz/' . $this->id);
    }

    public function publicPath() {
        return url('/startquiz/'.$this->id.'-'. Str::slug($this->title));
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function startquiz() {
        return $this->hasMany(StartQuiz::class);
    }
}
