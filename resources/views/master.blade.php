<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{url('/style/style.css')}}"/>
    <script src="{{ url('/js/jquery.min.js') }}"></script>
    <script src="{{ url('/js/script.js') }}"></script>
    <script src="{{ url('/js/validation.js') }}"></script>
    <script src="{{ url('/js/jqueryAjax.js') }}"></script>
    <title>Fitbook</title>
</head>

<body>
{{View::make('mdl')}}
{{View::make('header')}}
@yield('content')
</body>

</html>