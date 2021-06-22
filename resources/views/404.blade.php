<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>404</title>
</head>
<body>
@extends('layouts.navigation')




<div class="flex items-center justify-center h-screen static" id="call-to-action" >

    {{--        <div class="bg-indigo-800 text-black font-bold rounded-lg border shadow-lg p-10">--}}
    {{--            Centered Content--}}
    {{--        </div>--}}
    <div class="max-w-xl mx-auto text-center">
        <p class="mt-2 text-3xl font-bold text-gray-900 sm:text-5xl">Bienvenue chez CorsicaBox !</p>
        <div class="items-center justify-center mt-8 sm:flex">
            <div class="max-w-md p-2 mx-auto text-center">
                <a class="relative inline-block group" href="/services">

                    <span class="relative inline-block px-5 py-3 font-bold tracking-widest text-black uppercase border-2 border-current">Decouvrir nos box</span>
                </a>
            </div>

        </div>
    </div>


</div>
<footer>@extends('layouts/footer')</footer>
</body>
</html>
