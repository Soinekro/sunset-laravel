<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased bg-gray-700">
        <x-jet-banner />
        <div class=" container m-auto">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <div class="container mt-4  m-auto">
                <div class=" flex-row lg:flex  rounded-sm bg-cover pt-4 pb-4 bg-center bg-fixed text-center" style="background-image: url({{asset('img/tazas.jpg')}})">
                    <iframe class="m-auto" src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fsunsetartperu%2Fvideos%2F3887786291257509%2F&show_text=false&width=476&t=0" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    <div class=" -ml-12 pr-10 lg:pr-24 m-auto">
                        <div class="text-2xl  font-light md:text-3xl md:font-extrabold lg:text-5xl lg:font-extrabold mb-4 mt-5 ">
                            <span class=" pl-10 bg-clip-text md:font-bold  text-transparent lg:font-bold- bg-gradient-to-r from-green-400 to-blue-500">
                              Sunset Art
                            </span>

                          </div>
                    <h1 class=" text-2xl">Bienvenido a Sunset Art</h1>
                    <span class=" text-base pb-4">Tu mejor opcion en Estampados Sublimados</span></div>
                    </div>
            </div>

        </div>
        @stack('modals')

        @livewireScripts
    </div>
    </body>
</html>
