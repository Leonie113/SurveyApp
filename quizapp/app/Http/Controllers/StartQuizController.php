<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class StartQuizController extends Controller
{
    public function show(Quiz $quiz, $slug) {
        $quiz->load('questions.answers');
        return view('startquiz.show', compact('quiz'));
    }

    public function store(Quiz $quiz) {

        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.question_id' => 'required',
            'startquiz.name' => 'required',
            'startquiz.email' => 'required|email',
        ]);

        $startquiz = $quiz->startquiz()->create($data['startquiz']);
        $startquiz->responses()->createMany($data['responses']);
        return view('startquiz.end', compact('quiz'));
    }
}
