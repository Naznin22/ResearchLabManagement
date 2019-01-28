<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <title>Laravel</title> --}}
        <title>Researches </title>
    {{-- <link rel="stylesheet" type="text/css" href="./css/style.css "> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" /> --}}
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" /> 
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
       
    </head>
    <body>
        @include('inc.messages')  
        @yield('content')
    </body>
</html>
