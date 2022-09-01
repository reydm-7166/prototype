@extends('layouts.app')

@section('page_title')
Results
@endsection


@section('body_content')

<body class="w-100 vh-100 ps-5 pe-5">
    <img src="/images/Wais Food Logo.png" alt="" id="icon" class="mt-4">
    <header class="m-5 mb-0 navbar navbar navbar-expand-lg float-end">

    <ul class="navbar-nav ms-5">
        <li class="nav-item">
            <a class="nav-link fs-3 ms-3" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4" href="#">Generator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4" href="#">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4" href="#">Login/Register</a>
        </li>
    </ul>
    </header>

    <main class="border border-primary w-100 h-75">
        <div id="dish" class="w-75 m-auto h-100 p-3 text-center">

            <div id="img_div" class="h-100">

            </div>

            <div id="details" class="h-100">
                
            </div>
        </div>
    </main>
</body>

@endsection