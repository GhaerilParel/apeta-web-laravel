@extends('templating.layout')
@section('title', 'Organik login4')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{ asset ('login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('login/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('login/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('login/css/iofrm-theme4.css') }}">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
             <a href="{{ route('index') }}"></a>
                <div class="logo">
                    <img class="logo-size" src="{{asset('login/images/logo apa.png')}}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('login/graphic1.png')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                        <a href="{{ route('login4') }}" class="active">Login</a><a href="{{ route('register4') }}">Register</a>
                        </div>

                        <form action="/signin-user">
                            <input class="form-control" type="text" id="email" name="email" placeholder="E-mail Address" required> 
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">
                                    Login
                                </button> 
                                <a href="/forget4">Forget password?</a>
                            </div>
                        </form>

                        <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset ('login/js/jquery.min.js') }}"></script>
<script src="{{ asset ('login/js/popper.min.js') }}"></script>
<script src="{{ asset ('login/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('login/js/main.js') }}"></script>
</body>
@endsection