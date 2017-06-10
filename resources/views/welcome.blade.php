<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{!! asset('css/bootstrap-social-gh-pages/bootstrap-social.css') !!}" media="all" rel="stylesheet" type="text/css" />

        <link href="{!! asset('css/bootstrap-social-gh-pages/assets/css/bootstrap.css') !!}" media="all" rel="stylesheet" type="text/css" />

        <link href="{!! asset('css/bootstrap-social-gh-pages/assets/css/font-awesome.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link href="{!! asset('css/bootstrap-social-gh-pages/assets/css/docs.css') !!}" media="all" rel="stylesheet" type="text/css" />

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <br>

                <a href="{{ url('/auth/facebook') }}" class="btn btn-block btn-social btn-facebook">
                    <span class="fa fa-facebook"></span> Sign in with Facebook
                </a>

                <a href="{{ url('/auth/twitter') }}" class="btn btn-block btn-social btn-twitter">
                    <span class="fa fa-twitter"></span> Sign in with Twitter
                </a>

                <a href="{{ url('/auth/google') }}" class="btn btn-block btn-social btn-google">
                    <span class="fa fa-google"></span> Sign in with Google
                </a>

                <div class="title m-b-md">
                    Laravel
                </div>
            </div>
        </div>
    </body>
</html>
