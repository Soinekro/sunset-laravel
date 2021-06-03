<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
        <title>Sunset Biografia</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased bg-gray-700">
        <x-jet-banner />
            @livewire('navigation-menu')

            <!-- Page Heading -->
            <!-- Page Content -->
            <div>
                <div class=" container bg-gray-600 mt-4 m-auto p-10 ">
                    <img src="{{asset('img/logo.png')}}" class=" border rounded-full w-1/4 float-left " alt="logo Sunset Art"><h1 class=" mr-8 text-2xl font-bold"> Biografia de Sunset </h1>
                    <div class="container ml-42 font-serif text-justify p-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quasi ad, facere molestiae aliquam cum! Optio quae, corrupti voluptatibus doloremque quisquam voluptatum quod incidunt sit autem excepturi dignissimos officia quaerat.</p>
                    <p>Accusantium sint, ad minus error temporibus nam hic in voluptatem qui ipsum maiores repellendus, quod at, corrupti ab natus dignissimos beatae tempora alias quas. Voluptatem temporibus quaerat necessitatibus ducimus explicabo.</p>
                    <p>Sequi vel assumenda ea quos hic corporis reiciendis itaque ducimus, illo qui earum quasi suscipit numquam eaque voluptatibus explicabo laborum cupiditate odit cum quia dolorem, doloremque aperiam? Doloremque, illo expedita.</p>
                    <p>Iure delectus officiis nesciunt perspiciatis beatae minus error, nulla esse, laboriosam facere aliquam, illo veniam ea modi nostrum maiores quis omnis? Eligendi dolorum culpa voluptatum placeat laudantium iusto voluptates doloremque!</p>
                    <p>Ad, explicabo. Officia minus sit provident dolorum ipsum at, ex ratione cumque atque, illo necessitatibus! Voluptates, ratione illum? Ea adipisci quod quos repellendus nihil ullam rem et quo fugiat? Ad!</p>
                    <p>Eius, architecto vitae, ipsum rerum excepturi delectus praesentium maiores doloribus mollitia ducimus distinctio animi voluptate eaque adipisci exercitationem incidunt voluptatum reprehenderit minima commodi odit iusto aperiam? Eos voluptates debitis labore.</p>
                    <p>Expedita, eos laborum et rerum inventore architecto eveniet error repudiandae debitis laudantium nostrum quae quas in excepturi praesentium incidunt voluptatem qui est laboriosam sed iste perspiciatis magnam. Vero, obcaecati provident.</p>
                    <p>Velit ea animi delectus omnis in voluptates aliquid enim consequuntur dolorum incidunt itaque, ipsa nostrum provident distinctio maxime voluptas voluptate, modi dicta, corrupti eos dolores. Nam eligendi corrupti modi suscipit.</p>
                    <p>Repellat corporis dolore totam aspernatur amet accusantium pariatur delectus obcaecati et numquam ea earum minus sint suscipit, sed consectetur laboriosam facere exercitationem error. Qui harum assumenda quo corporis voluptas deleniti!</p>
                    <p>Dolorum, quis labore delectus, quia quaerat neque deserunt sunt cumque a repudiandae unde asperiores non qui molestias inventore laudantium esse magnam nostrum provident quo facilis? Vitae magni facere modi doloribus.</p>
                    <p>Autem necessitatibus blanditiis consequuntur ducimus distinctio et facere repellat harum voluptates, a veritatis nam, amet consectetur ex magni eius possimus ut aliquid ipsum, eaque architecto? Iure minima eius libero corporis?</p>
                    <p>Amet temporibus repudiandae officiis odio quae! Commodi neque sed eius labore! Hic, blanditiis laudantium amet, delectus ipsam quod excepturi saepe minus laborum velit odio modi voluptatum animi repudiandae sed labore.</p>
                    <p>Deserunt fuga accusamus tempore dicta hic soluta laboriosam aut, excepturi, atque at deleniti magnam illo ab delectus nihil. Itaque nihil accusantium eligendi modi omnis accusamus vel quod iusto quasi porro.</p>
                    <p>Magnam, labore quos porro id est harum dolorem enim eum iure, doloremque, quasi dolore odio cupiditate reiciendis maxime unde eos. Quaerat quam accusantium doloribus expedita, nisi alias odit saepe. Voluptas?</p>
                    <p>At, aliquid enim. Maiores iste, amet rem voluptatibus possimus expedita corporis voluptas unde vitae, facilis architecto ullam saepe itaque perspiciatis velit tempore vero cupiditate dolorem earum sit natus? Distinctio, porro!</p>
                    <p>Molestiae sit sunt non placeat laudantium incidunt quod possimus enim. Quisquam inventore nobis modi molestias. Libero laborum unde rem molestiae veniam quibusdam facere vero impedit delectus. Sed iste optio consequuntur?</p>
                    </div>
                </div>
            </div>
            </div>

        @include('layouts.footer')

        @livewireScripts
    </body>
</html>
