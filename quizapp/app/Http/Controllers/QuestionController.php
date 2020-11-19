<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Quiz $quiz) {
        return view('question.create', compact('quiz'));
    }

    public function store(Quiz $quiz) {
        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required',
        ]);

        $question = $quiz->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);

        return redirect('/quiz/'.$quiz->id);
    }

    public function destroy(Quiz $quiz, Question $question) {
        $question->answers()->delete();
        $question->delete();

        return redirect($quiz->path());
    }
    public function edit(Question $question) {
        $answers = $question->answers();
        return view('quiz.edit', compact('question', 'answers'));
    }

    public function update(Request $request, Question $question) {
        $question->update($request->all());
        return redirect()->route('quiz/show', ['quiz' => $question->quiz])
                        -> with('success', 'Question updated successfully');
    }
}
