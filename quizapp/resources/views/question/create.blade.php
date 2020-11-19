<style>
    .card{
        margin-top: 5px;
    }

</style>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container mt-8">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Questions</div>

                    <div class="card-body">
                        <form action="/quiz/{{ $quiz->id }}/questions" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input name="question[question]" type="text" class="form-control"
                                       value="{{ old('question.question') }}"
                                       id="question" aria-describedby="questionHelp" placeholder="Enter Question">
                                <small id="questionHelp" class="form-text text-muted">Ask questions which are easy to understand</small>

                                @error('question.question')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <legend>Choices</legend>
                                    <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>


                                    <div>
                                        <div class="form-group">
                                            <label for="answer1">Choice 1</label>
                                            <input name="answers[][answer]" type="text"
                                                   value="{{ old('answers.0.answer') }}"
                                                   class="form-control" id="answer1" aria-describedby="choicesHelp" placeholder="Enter Choice 1">

                                            @error('answers.0.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="answer2">Choice 2</label>
                                            <input name="answers[][answer]" type="text"
                                                   value="{{ old('answers.1.answer') }}"
                                                   class="form-control" id="answer2" aria-describedby="choicesHelp" placeholder="Enter Choice 2">

                                            @error('answers.1.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="answer3">Choice 3</label>
                                            <input name="answers[][answer]" type="text"
                                                   value="{{ old('answers.2.answer') }}"
                                                   class="form-control" id="answer3" aria-describedby="choicesHelp" placeholder="Enter Choice 3">

                                            @error('answers.2.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="answer4">Choice 4</label>
                                            <input name="answers[][answer]" type="text"
                                                   value="{{ old('answers.3.answer') }}"
                                                   class="form-control" id="answer4" aria-describedby="choicesHelp" placeholder="Enter Choice 4">

                                            @error('answers.3.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>


                                    </div>
                                </fieldset>
                            </div>

                            <a href="#"><button class="btn btn-dark">ADD QUESTION</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


</body>

</html>
