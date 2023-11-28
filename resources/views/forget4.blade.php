@extends('templating.layout')
@section('title', 'Organik daftarmitra')
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
            <a href="{{ route ('index') }}">
                <div class="logo">
                    <img class="logo-size" src="login/images/logo apa.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="login/graphic1.png" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you use to sign in to iofrm</p>
                        <form>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <div class="form-button full-width">
                                <button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Password link sent</h3>
                        <p>Please check your inbox iofrm@iofrmtemplate.io</p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>
                            <a href="{{ route('login4') }}"><button>Previous</button></a>
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