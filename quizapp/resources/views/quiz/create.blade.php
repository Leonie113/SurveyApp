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
                    <div class="card-header">Create A New Survey</div>

                    <div class="card-body">
                        <form action="/quiz" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
                                <small id="title" class="form-text text-muted">Give your survey a title that explains the content</small>

                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="purpose">Purpose</label>
                                <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter Purpose">
                                <small id="purpose" class="form-text text-muted">Give your quiz a purpose to explain the content of your survey</small>

                                @error('purpose')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>



                            <a href="#"><button class="btn btn-dark">CREATE SURVEY</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


</body>

</html>
