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
<style type="text/css">
    .text-9xl{
        font-size: 14rem;
    }
    @media(max-width: 645px){
        .text-9xl{
            font-size: 5.75rem;
        }
        .text-6xl{
            font-size: 1.75rem;
        }
        .text-2xl {
            font-size: 1rem;
            line-height: 1.2rem;
        }
        .py-8 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        .px-6 {
            padding-left: 1.2rem;
            padding-right: 1.2rem;
        }
        .mr-6{
            margin-right: 0.5rem;
        }
        .px-12 {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }
</style>
</head>
<body>
@extends('layouts.navigation')
<div class="bg-gradient-to-r from-black to-white">
    <div class="w-9/12 m-auto py-16 min-h-screen flex items-center justify-center">
        <div class="bg-white shadow overflow-hidden  pb-8">
            <div class="border-t border-gray-200 text-center pt-8">
                <h1 class="text-9xl font-bold ">404</h1>
                <h1 class="text-6xl font-medium py-8"> Rien a voir ici </h1>
                <p class="text-2xl pb-8 px-12 font-medium">Oops! La page que tu cherches n'existe pas je pense ...</p>
                <a href="/"><button class="bg-black  text-white font-semibold px-6 py-3  mr-6">
                    Acceuil
                </button></a>
                <a href="/contact"><button class="bg-black text-white font-semibold px-6 py-3 ">
                    Contact
                </button></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<footer>@extends('layouts/footer')</footer>
</body>
</html>
