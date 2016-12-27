<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ownly</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Ownly
                </div>

                <div class="links">
                    <a href="http://intern.limitstyle.com/jane.huang/A07-%E6%95%B8%E4%BD%8D%E6%87%89%E7%94%A8APP%E8%88%87%E5%8A%A0%E5%80%BC%E7%B6%B2%E7%AB%99___Ownly_%E5%AE%8C%E6%95%B4%E7%89%88.pdf">Documentation</a>
                    <a href="{{'contactUs'}}">Public</a>
                    <a href="https://www.facebook.com/OwnlyYJ/?skip_nax_wizard=true&__mref=message_bubble">News</a>
                    <a href="{{'login'}}">Private</a>
                    <a href="https://github.com/janeehuang/testShow">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

