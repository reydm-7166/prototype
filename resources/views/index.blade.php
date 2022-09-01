@extends('layouts.app')

@section('page_title')
Homepage
@endsection

@section('body_content')

<body class="w-100 vh-100 ps-5 pe-5" background="/images/background.png">
    <header class="m-5 mb-0 navbar navbar navbar-expand-lg">
        <form action="" class="w-50" method="get">
            <input type="text" class="form-control w-50 p-2 ps-4 align-middle me-3 d-inline" placeholder="Search">
            <input class="btn btn-primary d-inline ps-4 pe-4 align-middle shadow" type="submit"></button>
        </form>

    <ul class="navbar-nav ms-5">
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4 text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4 text-white" href="#">Generator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4 text-white" href="#">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-3 ms-4 text-white" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ms-4 fs-4 text-white" href="#">Link 2</a>
        </li>
    </ul>
    </header>
    
    <main class="ms-5 me-5" id="maincontainer">
        <img src="/images/Wais Food Logo.png" class="d-inline align-bottom ms-1" id="icon" alt="">
        <img src="/images/borger.png" class="d-inline align-top ms-1" id="borger" alt="">

        <section class="d-inline align-top m-5 float-end w-50">

            <p class="text-end text-white" id="enjoy">ENJOY COOKING</p>
            <p class="text-end" id="while">WHILE YOU ARE</p>
            <p class="text-end text-white" id="planet">SAVING THE PLANET</p>
            <p class="text-end text-white lh-base" id="details">Wais Food PH is a food recipe generator that aims to lower food waste by encouraging the usage of leftover ingredients. This will address our kitchen concerns by being resourceful without compromising anything and is actually helpful in saving our body, planet and our wallet!</p>

            <button class="border border-primary btn btn-primary-outline w-50 text-right fs-3 border-3 rounded-3 float-end mt-4" id="create"><a href="{{ url('register') }}">Create an account</a> </button>
        </section>
        

    </main>
</body>


@endsection
