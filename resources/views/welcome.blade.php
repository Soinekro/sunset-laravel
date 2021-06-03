<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
        <title>Sunset Art-peru</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased bg-gray-700">
        <x-jet-banner />
            @livewire('navigation-menu')

            <!-- Page Content -->
            <div class="container mt-4  m-auto">
                <div class=" flex-row lg:flex bg-cover pt-4 bg-center bg-fixed text-center" style="background-image: url({{asset('img/tazas.jpg')}})">
                    <iframe class="m-auto w-80 sm:w-96" src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fsunsetartperu%2Fvideos%2F3887786291257509%2F&show_text=false&width=476&t=0" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    <div class=" -mt-28 pb-4 md:-mt-20 lg:m-auto pr-10 -space-y-5 lg:pr-24">

                        <div class="font-bold text-xl md:font-extrabold lg:text-3xl lg:font-extrabold mb-4 mt-5 ">
                            <span class=" pl-10 bg-clip-text md:font-bold  text-transparent lg:font-bold- bg-gradient-to-r from-green-400 to-blue-500">
                                Bienvenido a Sunset Art
                            </span>
                          </div>

                    <span class=" italic text-base">Tu mejor opcion en Estampados Sublimados</span>
                    </div>
                    </div>
            </div>

        <footer>
        @extends('layouts.footer')
        </footer>

    </div>
    </body>
</html>
