<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="title" content="" />
    <meta name="description" content="" />
    <link rel="canonical" href="https://www.mhebazar.in/login" />
    <link rel="icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/faviicon-32x32.jpeg') }}" />
    <link href="{{ url('css/newassets/css/style2513.css') }}" rel="stylesheet">
    <title>Login </title>
    <meta name="robots" content="noindex">
    <style>
        #togglePassword {
            background: #ffffff url(css/newassets/imgs/template/icons/view.svg) no-repeat center;
            margin-right:20px;
            opacity: 1;
            margin-top: -40px;
            float: right;
            border: none
        }
    </style>
</head>

<body>



    @include('layouts.frontened.header')

    @include('layouts.frontened.sidebar')

    <main class="main">
        <section class="section-box shop-template mt-60">
            <div class="container">
                <div class="row mb-100">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <h3>Member Login</h3>
                        <p class="font-md color-gray-500">Welcome back!</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-register mt-30 mb-30">
                                <div class="form-group">
                                    <label class="mb-5 font-sm color-gray-700">Email *</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="mhebazartest@gmail.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="mb-5 font-sm color-gray-700">Password *</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="******************">
                                    <span class="btn btn-quickview" id="togglePassword"></span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 text-end">
                                        <div class="form-group"><a class="font-xs color-gray-500" href="{{ route('password.request') }}">Forgot
                                                your
                                                password?</a></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="font-md-bold btn btn-buy" type="submit" value="Sign In">
                                </div>
                                <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Have not an
                                        account?</span><a class="font-xs color-brand-3 font-medium" href="{{route('register')}}">Sign
                                        Up</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5"></div>
                </div>
            </div>
        </section>

        @include('layouts.frontened.abovefooter')
    </main>

    @include('layouts.frontened.footer')

    @include('layouts.frontened.script')
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
            var temp = document.getElementById("password-confirm");
            if (temp.type === "password") {
                temp.type = "text";
            } else {
                temp.type = "password";
            }


        });
    </script>
</body>


</html>
