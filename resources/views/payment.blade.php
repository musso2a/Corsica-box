<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Actualité</title>
</head>
<body>
@extends('layouts/navigation')

<div class="flex items-center justify-center h-screen static"  >


    <div class="max-w-xl mx-auto text-center">
        <p class="mt-2 text-3xl font-bold text-gray-900 sm:text-5xl">Merci pour ton achat !</p>
        <div class="items-center justify-center mt-8 sm:flex">
            <div class="max-w-md p-2 mx-auto text-center">
                <a class="relative inline-block group" href="/home">

                    <span class="relative inline-block px-5 py-3 font-bold tracking-widest text-black uppercase border-2 border-current">Acceuil</span>
                </a>
                <a class="relative inline-block group" href="/admin">

                    <span class="relative inline-block px-5 py-3 font-bold tracking-widest text-black uppercase border-2 border-current">Mon Compte</span>
                </a>
            </div>

        </div>
    </div>


</div>


@extends('layouts/footer')

</body>
</html>
