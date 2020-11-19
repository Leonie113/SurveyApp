<style>
    .card{
        margin-top: 5px;
    }
    #title{
        color: black;
    }




</style>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<x-app-layout class="layout">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 id="title">{{ $quiz->title }}</h1>
                <form action="/startquiz/{{ $quiz->id }}-{{ Str::slug($quiz->title) }}" method="post">
                    @csrf

                    @foreach($quiz->questions as $key => $question)
                        <div class="card mt-4">
                            <div class="card-header"><strong>{{ $key + 1 . " " }}</strong>{{ $question->question }}</div>

                            <div class="card-body">

                                @error('responses.' . $key . '.answer_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <ul class="list-group">
                                    @foreach($question->answers as $answer)
                                        <label for="answer{{ $answer->id }}">
                                            <li class="list-group-item">
                                                <input type="radio" name="responses[{{ $key }}][answer_id]"
                                                       id="answer{{ $answer->id }}" class="mr-2" value="{{ $answer->id }}"
                                                       {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : '' }}>
                                                {{ $answer->answer }}

                                                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                                            </li>
                                        </label>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    @endforeach

                <div class="card mt-4">
                    <div class="card-header">Your Information</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="startquiz[name]" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name">
                            <small id="nameHelp" class="form-text text-muted">Give your quiz a title.</small>

                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="startquiz[email]" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
                            <small id="emailHelp" class="form-text text-muted">Give your quiz a title.</small>

                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div>
                            <button class="btn btn-warning" type="submit">Complete Survey</button>
                        </div>
                    </div>
                </form>



                </div>
            </div>
        </div>
    </div>

</x-app-layout>


</body>

</html>
