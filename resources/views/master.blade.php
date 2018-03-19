<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/metaphor.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="icon" href="{{asset('images/logo.jpg')}}">
        <link rel="apple-touch-icon" href="{{asset('images/logo.jpg')}}">
    </head>

    <body>
        @if ( $errors->count() > 0 )
            ...An error occured...
            @foreach( $errors->all() as $message )
                ...{{ $message }}...
            @endforeach
        @endif
        <div id="app" class="container">
            <nav-bar></nav-bar>
            {{Form::open()}}
            Login
            <br>
            Username
            {{Form::text('username')}}
            <br>
            Password
            {{Form::password('password')}}
            <br>
            <loading-button></loading-button>
            {{Form::close()}}
        </div>

        <script src="{{ asset('js/metaphor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
