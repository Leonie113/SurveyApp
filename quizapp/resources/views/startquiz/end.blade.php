<html>
<title>
    Survey | Thank you
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<x-app-layout class="bg-black">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-4">
                    <div class="card">
                        <div class="card-header">Thank you for taking this survey</div>
                        <div class="card-body">
                            We thank you for taking this survey. You can build your own survey or take other surveys on the home page.
                        </div>
                        <div class="card-footer">
                            <a href="/quiz/create" ><button class="btn btn-sm btn-warning"">ADD NEW SURVEYS</button></a>
                            <a href="/dashboard"><button class="btn btn-sm btn-dark">DASHBOARD</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>


</body>

</html>
