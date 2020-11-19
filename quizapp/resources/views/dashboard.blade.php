
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <body>
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <x-jet-welcome />
                    </div>
                </div>

            </div>
            <div container>
                <div class="row justify-content-center">
                    <div class="col-2">
                    <a href="quiz/create" ><button class="btn btn-sm btn-outline-light"">ADD NEW SURVEYS</button></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card mt-4 bg-white">
                            <div class="card-header">Survey Overview</div>

                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach($quiz as $quiz)

                                        <li class="list-group-item">
                                            <a href="{{ $quiz->path() }}">{{ $quiz->title }}</a>

                                            <div class="mt-2">
                                                <small class="font-weight-bold">Share URL</small>
                                                <p>
                                                    <a href="{{ $quiz->publicPath() }}">
                                                        {{ $quiz->publicPath() }}
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>


    </body>

</html>
