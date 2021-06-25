<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.0.0-d782a78/tailwind.min.css">
    <title>Abonnements</title>
</head>
<body>
@extends('layouts/navigation')

<section class="text-gray-600 body-font overflow-hidden h-screen overflow-auto ">
    <br>
    <br>

    <div class="container px-5 py-24 mx-auto overflow-auto">
        <br>
        <br>
        <br>
        <div class="grid grid-cols-2 gap-6 row-span-1  xl:grid-cols-3 overflow-auto">
            <div>
            <a href="#subscribe" class="flex flex-col p-2 bg-black">
                <img src="https://i.ibb.co/bJW9N88/balagne.jpg" alt="" class="w-full " />

                <div class="flex flex-col justify-between h-3/6 p-4 space-y-4">
                    <h5 class="text-xl font-medium text-white text-center">Balagne</h5>
                    <ul class="text-center">
                        <li class="text-white">Un morceau de fromage Corse</li>
                        <li class="text-white">Un morceaux de Charcuterie Corse</li>
                        <li class="text-white">Une confiture de saison</li>

                    </ul>

                </div>
            </a>
            </div>
            <div>
                <a href="#subscribe" class="flex flex-col p-2 bg-black">
                    <img src="https://i.ibb.co/6NcfBkH/niolu.jpg" alt="" class="w-full " />

                    <div class="flex flex-col justify-between h-3/6 p-4 space-y-4">
                        <h5 class="text-xl font-medium text-white text-center">Niolu</h5>
                        <ul class="text-center">
                            <li class="text-white">Un morceau de fromage Corse</li>
                            <li class="text-white">Un morceau de Charcuterie Corse</li>
                            <li class="text-white">Une confiture de saison</li>

                        </ul>

                    </div>
                </a>
            </div>
            <div>
                <a href="#subscribe" class="flex flex-col p-2 bg-black">
                    <img src="https://i.ibb.co/56Nkdzj/taravu.jpg" alt="" class="w-full " />

                    <div class="flex flex-col justify-between h-3/6 p-4 space-y-4">
                        <h5 class="text-xl font-medium text-white text-center">Taravu</h5>
                        <ul class="text-center">
                            <li class="text-white">Un morceau de fromage Corse</li>
                            <li class="text-white">Un morceaux de Charcuterie Corse</li>
                            <li class="text-white">Une confiture de saison</li>

                        </ul>

                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="subscribe">
    <h1 class="box-border m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl text-center">Mon Abonnement</h1>


        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">

            <form action="" method="post" class="max-w-xl mx-auto mt-8 mb-0 space-y-4">
                @csrf

                <div class="mx-auto">
                    <label for="plan{{ $plan->id }}">
                        @foreach($plans as $plan)
                        <select class="w-2/4 border bg-white  px-3 py-2 outline-none ">
                                        <option class="py-1" value="{{ $plan->id }}">{{ $plan->name }} {{ $plan->price }}</option>
                        </select>
                        @endforeach
                    </label>


                </div>
                <br>
                <br>
                <div>
                    <label for="nom" class="">Nom</label>
                    <div class="relative">
                        <input
                            type="text"
                            class="w-2/4 border bg-white  px-3 py-2 outline-none"
                            placeholder="Ton nom"
                        />

                        <span class="absolute inset-y-0 inline-flex items-center right-4">
        </span>
                    </div>
                </div>
                <br>
                <br>
                <div class="flex items-center justify-between">
                    <button type="submit" class="inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-black">
                        Je m'abonne !
                    </button>
                    <p class="text-sm text-gray-500">

                        <a class="underline" href=""></a>
                    </p>

                </div>
            </form>
        </div>

</section>



{{--        <div class="lg:w-4/5 mx-auto flex flex-wrap object-center">--}}
{{--            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://i.ibb.co/bJW9N88/balagne.jpg" id="product-img">--}}

{{--            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">--}}

{{--                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Box Balagne</h1>--}}
{{--                <br>--}}
{{--                <p class="leading-relaxed">La box Balagne contient:</p>--}}
{{--                <br>--}}
{{--                <ul>--}}
{{--                    <li>- 2 morceau de charcuterie</li>--}}
{{--                    <li>- 1 bouteille de vin</li>--}}
{{--                </ul>--}}
{{--                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">--}}

{{--                    <div class="flex ml-6 items-center object-none object-bottom" id="select-sub">--}}


{{--                        <div class="relative">--}}
{{--                            <span class="mr-3">Durée d'abonnement :</span>--}}
{{--                            <select class="form-select block w-full mt-1">--}}
{{--                                <option>1 mois/19.99€(par mois)</option>--}}
{{--                                <option>3 mois/18.99€(par mois)</option>--}}
{{--                                <option>6 mois/15.99€(par mois)</option>--}}
{{--                            </select>--}}
{{--                            <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">--}}
{{--              </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex object-left">--}}
{{--                    <button class="flex ml-auto text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-black-600 rounded">S'abonner</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}



@extends('layouts/footer')
</body>
</html>

