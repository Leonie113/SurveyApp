<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class QuizController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function create() {
        return view('quiz.create');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required',
        ]);

        $quiz = auth()->user()->quiz()->create($data);

        return redirect('/quiz/'.$quiz->id);
    }

    public function show(Quiz $quiz) {

        $quiz->load('questions.answers.responses');

        return view('quiz.show', compact('quiz'));
    }
}
