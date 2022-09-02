@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('generator.css') }}">
@endsection

@section('page_title')
Generator
@endsection

@section('body_content')

<body class="w-100 vh-100 ps-5">

    <div class="w-25 vh-100 d-inline-block p-2">
        <img src="/images/Wais Food Logo.png" width="150px" height="150px" class="d-block" alt="">
        <form action="" method="get">
            <input type="text" name="search" class="form-control p-3" placeholder="Search" id="">
        </form>

        <section class="w-100 h-100 border rounded mt-2 p-2 ps-3" id="ing">
            <p class="text-center fs-3">Ingredients</p>

            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Butter</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Sugar</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Garlic Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Flour</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Egg</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Olive Oil</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Parsley</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Chili Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Basil</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Butter</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Sugar</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Garlic Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Flour</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Egg</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Olive Oil</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Parsley</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Chili Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Basil</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Butter</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Sugar</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Garlic Powder</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Flour</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Egg</button>
            <button class="border btn text-white rounded-pill align-top fs-4 border-3 mt-4">Olive Oil</button>


        </section>
    </div>

    <div class="d-inline-block ms-5 pt-0 vh-100 align-top" id="main">
        <div id="seventy">

        </div>
        
        <div id="footer">
            <img src="/images/likedislike.png" height="150px" class="float-end d-inline-block" alt="">
        </div>

    </div>
    

</body>

@endsection