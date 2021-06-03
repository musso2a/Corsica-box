<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">


</head>
<body>
<nav class="flex items-center justify-between flex-wrap bg-white p-6 fixed w-full z-10 top-0" id="nav-bar">
    <div class="flex items-center flex-shrink-0 text-black mr-6">
        <a class="text-grey no-underline hover:text-grey hover:no-underline" href="/">
            <span class="text-2xl pl-2"><i class="em em-grinning"></i> CorsicaBox</span>
        </a>
    </div>

    <div class="block lg:hidden">
        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-grey hover:border-grey">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>

    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black no-underline" href="/services">Services</a>
            </li>
            <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black no-underline" href="/actualites">Actualités</a>
            </li>
            <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black no-underline" href="/contact">Contact</a>
            </li>
            <li class="mr-3">
                <a class="inline-block py-2 px-4 text-black no-underline" href="#">Connexion</a>
            </li>
        </ul>
        <div id="search-toggle" class="search-icon cursor-pointer pl-6">
            <svg class="fill-current pointer-events-none text-grey-darkest w-4 h-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
            </svg>
        </div>
    </div>


    <div class="relative w-full hidden bg-white" id="search-content">
        <div class="container mx-auto py-4 text-black">
            <input id="searchfield" type="search" placeholder="Recherche" autofocus="autofocus" class="w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">
        </div>

    </div>
</nav>

<!--Container-->
{{--<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-18">--}}

{{--</div>--}}

<script>
    //Javascript to toggle the menu
    document.getElementById('nav-toggle').onclick = function(){
        document.getElementById("nav-content").classList.toggle("hidden");
    }
</script>

</body>
</html>
