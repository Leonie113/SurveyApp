<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <h1>Edit Question</h1>
        <form action="{{ route('question/update',$question->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-12 mt-8">
                        <div class="card">
                            <div class="card-header">
                                <label for="question">Question</label>  </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="question" value="{{ $question->name }}"placeholder="Enter Question">
                                    <small id="questionHelp" class="form-text text-muted">Type in your edited question.</small>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </form>

</x-app-layout>
    </body>
</html>
