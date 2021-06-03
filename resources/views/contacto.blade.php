<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto Sunset</title>
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
        <!-- Fonts -->
        <link href="{https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap}" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    @include('navigation-menu')
    <form action="{{route('contacto.store')}}" method="POST">
        @csrf
        @include('layouts.form')
    </form>

    @include('layouts.footer')
</body>
</html>
