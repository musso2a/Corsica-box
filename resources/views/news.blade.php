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
<br>
<br>
<br>
<br>
<br>
<br>
<div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 ">
    <h2 class="box-border m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
        Actualités
    </h2>

</div>
<section class="max-w-5xl p-6 mx-auto bg-white">
    <form class="flex mb-0 space-x-4" method="POST" action="/actualites">
        @csrf
        <div class="flex-1">
            <label class="sr-only" for="search_input">recherche</label>

            <input
                class="w-full h-12 text-sm border-black focus:border-transparent focus:ring-black"
                id="search_input"
                placeholder="Rechercher une info"
                type="text"
            />
        </div>


        <div>
            <button
                class="inline-flex items-center justify-center w-12 h-12 text-white bg-black "
                type="submit"
            >
                <span class="sr-only">Submit</span>

                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                    ></path>
                </svg>
            </button>
        </div>
    </form>
</section>
<section class="h-screen overflow-auto">

    <div class="pt-6 pb-12 bg-white">
        <br>
        <div id="card" class="">
            <!-- container for all cards -->
            <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                <!-- card -->
                @foreach($News as $actuality)
                <div class="flex flex-col md:flex-row overflow-hidden
                                        bg-white border-black  mt-4 w-100 mx-2 mb-8" id="news-card">
                    <!-- media -->
                    <div class="h-64 w-auto md:w-1/2">
                        <img class="inset-0 h-full w-full object-fill object-scale-down object-center" src="https://i.ibb.co/6NcfBkH/niolu.jpg" />
                    </div>
                    <!-- content -->
                    <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                        <h3 class="font-semibold text-lg leading-tight truncate">{{$actuality->title}}</h3>
                        <p class="mt-2">
                            {{$actuality->short_description}}<a href="/actualite/{{$actuality->id}}">Lire la suite</a>
                        </p>
                        <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            &bull; 02/02/02
                        </p>
                    </div>
                </div><!--/ card-->
                <br>
            @endforeach
                <!--/ card-->
            </div><!--/ flex-->
        </div>
    </div>


</section>



<footer>@extends('layouts/footer')</footer>

</body>
</html>
