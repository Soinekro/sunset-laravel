<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
        <title>Sunset Creadores</title>

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
    <body class="antialiased bg-gray-700">
        <x-jet-banner />
            @livewire('navigation-menu')

            <!-- Page Content -->
        <div>
            @include('layouts.card-creador')
        </div>
        @include('layouts.footer')
        @livewireScripts
    </body>
</html>
