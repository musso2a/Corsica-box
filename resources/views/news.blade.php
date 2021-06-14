<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Actualités</title>
</head>
<body>
@extends('layouts/navigation')

<section class="h-screen overflow-auto">
    <div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 border-gray-200">
        <h2 class="box-border m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
            Actualités
        </h2>

    </div>
    <div class="pt-24 pb-12 bg-white">
        <br>
        <div id="card" class="">
            <!-- container for all cards -->
            <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                <!-- card -->
                <div class="flex flex-col md:flex-row overflow-hidden
                                        bg-white border-black  mt-4 w-100 mx-2" id="news-card">
                    <!-- media -->
                    <div class="h-64 w-auto md:w-1/2">
                        <img class="inset-0 h-full w-full object-fill object-scale-down object-center" src="https://i.ibb.co/6NcfBkH/niolu.jpg" />
                    </div>
                    <!-- content -->
                    <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                        <h3 class="font-semibold text-lg leading-tight truncate">Titre</h3>
                        <p class="mt-2">
                            Voici une nouvelle box du mois c'est incroyable blablabla....<a href="#">Lire la suite</a>
                        </p>
                        <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            &bull; 02/02/02
                        </p>
                    </div>
                </div><!--/ card-->
                <br>
                <div class="flex flex-col md:flex-row overflow-hidden
                                        bg-white border-black  mt-4 w-100 mx-2" id="news-card">
                    <!-- media -->
                    <div class="h-64 w-auto md:w-1/2">
                        <img class="inset-0 h-full w-full object-fill object-scale-down object-center" src="https://i.ibb.co/6NcfBkH/niolu.jpg" />
                    </div>
                    <!-- content -->
                    <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                        <h3 class="font-semibold text-lg leading-tight truncate">Titre</h3>
                        <p class="mt-2">
                            Voici une nouvelle box du mois c'est incroyable blablabla....<a href="#">Lire la suite</a>
                        </p>
                        <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            &bull; 02/02/02
                        </p>
                    </div>
                </div><!--/ card-->
                <br>
                <div class="flex flex-col md:flex-row overflow-hidden
                                        bg-white border-black  mt-4 w-100 mx-2" id="news-card">
                    <!-- media -->
                    <div class="h-64 w-auto md:w-1/2">
                        <img class="inset-0 h-full w-full object-fill object-scale-down object-center" src="https://i.ibb.co/6NcfBkH/niolu.jpg" />
                    </div>
                    <!-- content -->
                    <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                        <h3 class="font-semibold text-lg leading-tight truncate">Titre</h3>
                        <p class="mt-2">
                            Voici une nouvelle box du mois c'est incroyable blablabla....<a href="#">Lire la suite</a>
                        </p>
                        <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            &bull; 02/02/02
                        </p>
                    </div>
                </div><!--/ card-->
            </div><!--/ flex-->
        </div>
    </div>


</section>



{{--<div class="flex items-center  justify-center h-screen bg-white  overflow-y-scroll" id="call-to-action">--}}


{{--    <!-- component -->--}}
{{--    <div class="min-h-screen bg-white flex  flex-col justify-center items-center ">--}}
{{--        <!-- Start of component -->--}}
{{--        <div class="max-w-2xl bg-white border-2  p-5 rounded-md tracking-wide shadow-lg">--}}
{{--            <div id="header" class="flex">--}}
{{--                <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                <div id="body" class="flex flex-col ml-5">--}}
{{--                    <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>--}}
{{--                    <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                    <div class="flex mt-5">--}}
{{--                        <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                        <p class="ml-3">John Doe</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--        <!-- End of component -->--}}

{{--        <div class="max-w-2xl bg-white border-2  p-5 rounded-md tracking-wide shadow-lg">--}}
{{--            <div id="header" class="flex">--}}
{{--                <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                <div id="body" class="flex flex-col ml-5">--}}
{{--                    <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>--}}
{{--                    <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                    <div class="flex mt-5">--}}
{{--                        <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                        <p class="ml-3">John Doe</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="max-w-2xl bg-white border-2  p-5 rounded-md tracking-wide shadow-lg">--}}
{{--            <div id="header" class="flex">--}}
{{--                <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                <div id="body" class="flex flex-col ml-5">--}}
{{--                    <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>--}}
{{--                    <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                    <div class="flex mt-5">--}}
{{--                        <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                        <p class="ml-3">John Doe</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="max-w-2xl bg-white border-2  p-5 rounded-md tracking-wide shadow-lg">--}}
{{--            <div id="header" class="flex">--}}
{{--                <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                <div id="body" class="flex flex-col ml-5">--}}
{{--                    <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>--}}
{{--                    <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                    <div class="flex mt-5">--}}
{{--                        <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                        <p class="ml-3">John Doe</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="max-w-2xl bg-white border-2  p-5 rounded-md tracking-wide shadow-lg">--}}
{{--            <div id="header" class="flex">--}}
{{--                <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                <div id="body" class="flex flex-col ml-5">--}}
{{--                    <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>--}}
{{--                    <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                    <div class="flex mt-5">--}}
{{--                        <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />--}}
{{--                        <p class="ml-3">John Doe</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="max-w-xl mx-auto text-center">--}}
{{--        <p class="mt-2 text-3xl font-bold text-gray-900 sm:text-5xl">Bienvenue chez CorsicaBox !</p>--}}
{{--        <div class="items-center justify-center mt-8 sm:flex">--}}
{{--            <div class="max-w-md p-2 mx-auto text-center">--}}
{{--                <a class="relative inline-block group" href="">--}}

{{--                    <span class="relative inline-block px-5 py-3 font-bold tracking-widest text-black uppercase border-2 border-current">Decouvrir nos box</span>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}


{{--</div>--}}
<footer>@extends('layouts/footer')</footer>

</body>
</html>
