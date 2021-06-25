<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Contact</title>
</head>
<body>

@extends('layouts/navigation')


<section class="text-black body-font relative h-screen object-center overflow-auto">
    <br>
    <br>
    <br>

    @if(Session::get('message_sent'))
        <div
            class="flex items-center p-4 text-green-600 border border-l-4 border-current rounded-sm shadow-lg"
            role="alert"
            aria-labelledby="error-summary-title">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                <path
                    fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"
                />
            </svg>

            <p class="ml-3 font-bold" id="error-summary-title">Post has been published!</p>
        </div>
    @endif
    <div class="container px-5 pt-12 mx-auto flex sm:flex-nowrap flex-wrap sm:pt-44 ">
        <div class="lg:w-2/3 md:w-1/2 bg-gray-300  overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative object-center">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=webstart%20paris+(Titre)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
            <div class="bg-white relative flex flex-wrap py-6 shadow-md">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESSE</h2>
                    <p class="mt-1">Ecole incroyable : Webstart</p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                    <a class="text-blue-500 leading-relaxed">corsicabox@gmail.com</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">TELEPHONE</h2>
                    <p class="leading-relaxed">06.06.06.06.06</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <form method="POST" enctype="multipart/form-data" action="{{  url('contact') }}">
                @csrf

            <h1 class="text-black text-3xl mb-1 font-medium  text-center">Formulaire de contact</h1>
            <p class="leading-relaxed mb-5 text-gray-600 text-center italic" >N'hésitez pas a checker notre <a href="/faq">FAQ</a> </p>
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Nom</label>
                <input type="text" id="name" name="name" class="w-full bg-white  border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-white  border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message" class="w-full bg-white  border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-grey-600 text-lg" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</section>
<br>
<br>




@extends('layouts/footer')
</body>
</html>
