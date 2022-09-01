@extends('layouts.app')

@section('page_title')
    Create Account
@endsection

@section('body_content')
    <body class="w-100 vh-100 ps-5 pe-5">
        <main class="text-center m-auto h-100 w-50">
            <img src="/images/Wais Food Logo.png" class="mt-5 d-block m-auto" id="icon" alt="">

            <p class="fs-1 d-block">Create New Account</p>
            <p class="fs-5 d-block"><a href="" class="text-primary">Already registered? Login</a></p>

        <section class="text-start w-50 m-auto">

            <form action="" method="post" id="signup">
                <div class="mb-3">
                    <label class="form-label text-uppercase">First Name</label>
                    <input type="text" class="form-control p-3" placeholder="eg. John">

                  </div>

                  <div class="mb-3">
                    <label class="form-label text-uppercase">Last Name</label>
                    <input type="text" class="form-control p-3" placeholder="eg. Doe">

                  </div>

                  <div class="mb-3">
                    <label class="form-label text-uppercase">Email Address</label>
                    <input type="email" class="form-control p-3" aria-describedby="emailHelp" placeholder="sample@email.com">
                    <div id="emailHelp" class="form-text fst-italic">We'll never share your email with anyone else.</div>
                  </div>

                  <div class="mb-5">
                    <label class="form-label text-uppercase">Password</label>
                    <input type="password" class="form-control p-3" placeholder="8 Characters long and above">
                  </div>

                  <div class="mb-3">
                    <input type="submit" class="form-control shadow w-50 m-auto pb-3 pt-2 fs-4 bg-dark text-white" value="Sign up">
                  </div>

            </form>
        </section>
        </main>
    </body>
@endsection