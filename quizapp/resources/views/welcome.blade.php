<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Survey</title>

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&family=Pacifico&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Source Sans Pro', sans-serif;
                text-align: center;
                background-color: #6E93AD;
                color: black;
            }
            h1{
                text-align: center;
                font-family: 'Pacifico';
                font-size: 80px;
                padding-top: 20%;
                padding-bottom: 5%;
            }
            .questionmarks {
                color: black;
                font-size: 70px;
                font-weight: bolder;
                margin-top: 5%;
                transition: 3s;
                animation: moving 3s;
            }
            .btn{
                margin-top: 5%;
            }
            @keyframes moving {
                0% {
                    left: 0px;
                    font-size: 70px;
                }
                50% {
                    left: 200px;
                    font-size: 200px;
                }
                100% {
                    left: 0px;
                    font-size: 70px;
                }
            }

        </style>


    <!--Content-->
    </head>
    <body>
        <h1>Survey App</h1>
        <h2>Start you new survey</h2>
        <a href="/login"><button type="button" class="btn btn-light"> Login </button></a>
        <a href="/register"><button type="button" class="btn btn-light"> Register </button></a>
        <div class="questionmarks">
            ?  ?  ?  ?  ?
        </div>



    </body>
</html>


