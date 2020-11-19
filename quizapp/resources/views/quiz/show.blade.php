<style>
    .card{
        margin-top: 5px;
    }

</style>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<x-app-layout class="bg-black">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-10">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $quiz->title }}</div>
                    <div class="card-body">
                        <a class="btn btn-dark" href="/quiz/{{ $quiz->id }}/questions/create"> ADD QUESTIONS</a>
                        <a class="btn btn-dark" href="/startquiz/{{ $quiz->id }}-{{ Str::slug($quiz->title) }}"> START QUIZ</a>
                    </div>

                </div>

                @foreach($quiz->questions as $question)
                    <div class="card mt-4">
                        <div class="card-header">{{ $question->question }}</div>

                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($question->answers as $answer)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div>{{ $answer->answer }}</div>
                                        @if($question->responses->count())
                                            <div>{{ intval(($answer->responses->count() *100 / $question->responses->count())) }}%</div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="card-footer">
                            <form action="/quiz/{{ $quiz->id }}/questions/{{ $question->id }}" method="post">
                                <a href="{{ route('question/edit', $question->id) }}" class="btn btn-sm btn-primary mt-2">Edit Question</a>
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-sm btn-danger mt-2">Delete Question</button>
                            </form>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>


</body>

</html>
