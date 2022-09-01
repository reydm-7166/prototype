<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title>@yield('page_title')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
        #back {
            width: max-content;
        }
        * {
            box-sizing: border-box;
            /* border: black 1px dotted; */
        }
        body {
            overflow: hidden;
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
        }
        #borger{
            height: 85vh;
        }
        #icon {
            height: 15vh;
            width: 15vh;
            margin-bottom: 20px;
        }
        #enjoy, #while, #planet {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.9vw;
        }
        #while {
            color: #835215;
        }
        #details {
            font-size: 26px;
        }
        button {
            color: white;
            border-color: #835215;
        }
        a, a:hover {
            text-decoration: none;
            color: white;
        }
        div label {
            letter-spacing: 2px;
        }
    </style>
</head>
@yield('body_content')


</html>