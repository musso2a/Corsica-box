<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Produits</title>
</head>
<body>
@extends('layouts/navigation')


<!-- Section 1 -->
<section class="py-8 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24">
    <div class="box-border px-4 mx-auto border-solid sm:px-6 md:px-6 lg:px-8 max-w-7xl">
        <div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 border-gray-200">
            <h2 class="box-border m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
                Nos Boxs
            </h2>

        </div>
        <div class="grid grid-cols-1 gap-10 mt-2 leading-7 text-gray-900 border-0 border-gray-200 sm:mt-6 sm:gap-6 md:mt-8 md:gap-0 lg:grid-cols-3">
            <!-- Price 1 -->
            <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid  lg:-mr-3 sm:my-0 sm:p-6 md:my-8 md:p-8" id="card-left">
                <img class="object-contain   sm:h-96" src="https://i.ibb.co/bJW9N88/balagne.jpg" alt="" >
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Balagne
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-2xl font-semibold leading-none border-solid">
                        20 €
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                         / mois
                    </p>
                </div>

                <ul class="flex-1 p-0 mt-4 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold  text-dark sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Une bouteille de vin Corse
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-dark sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Deux morceaux de Charcuterie Corse
                    </li>

                </ul>
                <button class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-white no-underline bg-black border  cursor-pointer hover:bg-gray-600 hover:border-gray-600 hover:text-white focus-within:bg-black focus-within:border-black focus-within:text-white sm:text-base md:text-lg" >
                    Je m'abonne !
                </button>
            </div>
            <!-- Price 2 -->
            <div class="relative flex flex-col z-10 items-center max-w-md p-4 mx-auto my-0 bg-white border-4  border-solid sm:p-6 md:px-8 md:py-16" id="card-center">
                <img class="object-contain   sm:h-96" src="https://i.ibb.co/6NcfBkH/niolu.jpg" alt=""  border="0">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Niolu
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-2xl font-semibold leading-none border-solid">
                        25 €
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / mois
                    </p>
                </div>
                <br>
                <ul class="flex-1 p-0 mt-4 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold  text-dark sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Un morceau de fromage Corse
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-dark sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Un morceau de Charcuterie Corse
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-dark sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Une confiture de saison
                    </li>
                </ul>
                <button   class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-white no-underline bg-black border  cursor-pointer hover:bg-gray-600 hover:border-gray-600 hover:text-white focus-within:bg-black focus-within:border-black focus-within:text-white sm:text-base md:text-lg" id="button-card-center">
                    <a href="/product">Je m'abonne !</a>
                </button>
            </div>
            <!-- Price 3 -->
            <div class="relative z-5 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid  lg:-ml-3 sm:my-0 sm:p-6 md:my-8 md:p-8" id="card-right">
                <img class="object-contain   sm:h-96" src="https://i.ibb.co/56Nkdzj/taravu.jpg" alt="">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Taravu
                </h3>
                <div class="flex items-end mt-6  text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-2xl font-semibold leading-none border-solid">
                        19 €
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / mois
                    </p>
                </div>

                <ul class="flex-1 p-0 mt-4 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold  text-dark sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Un morceau de fromage Corse
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-dark sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Un morceau de Charcuterie Corse
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-dark sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Une confiture de saison
                    </li>
                </ul>
                <button class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-white no-underline bg-black border  cursor-pointer hover:bg-gray-600 hover:border-gray-600 hover:text-white focus-within:bg-black focus-within:border-black focus-within:text-white sm:text-base md:text-lg" >
                    Je m'abonne !
                </button>
            </div>
        </div>
    </div>
</section>

@extends('layouts/footer')
</body>
</html>



