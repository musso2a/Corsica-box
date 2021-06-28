<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Recherche</title>
</head>
<body>
@extends('layouts/navigation')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 border-gray-200">
    <h2 class="box-border m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
        Actualités
    </h2>

</div>
<section class="h-screen overflow-auto">

    <div class="pt-6 pb-12 bg-white">
        <br>
        <div id="card" class="">
            <!-- container for all cards -->
            <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                <!-- card -->
                @foreach($searchNews as $actuality)
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

