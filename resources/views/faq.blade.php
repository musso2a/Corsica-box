<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>FAQ</title>
</head>
<body>
@extends('layouts/navigation')
<section class="relative flex flex-wrap">
    <div class="flex w-full px-4 py-12 lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24 lg:h-screen overflow-auto" id="faq-list">
        <div class="max-w-lg lg:text-left lg:pr-12" id="faq-list-2">
                <div class="max-w-screen-xl px-4 py-16  sm:px-6 lg:px-8">
                    <ul class="space-y-10">
                        <li>
                            <details>
                                <summary class="pb-4 text-xl font-medium border-b-4 border-black">C'est quoi Corsica Box ?</summary>
                                <p class="p-4 text-lg border-l-4 border-black">
                                    Fréro fait un effort c'est dans le titre ! En vrai c'est une box mensuelle de produits Corse choisi avec le plus grand soin pour toi :) !
                                </p>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="pb-4 text-xl font-medium border-b-4 border-black">C'est vraiment corse ?</summary>
                                <p class="p-4 text-lg border-l-4 border-black">
                                    Plus Corse que Corse ! Carrement Nustrale !
                                </p>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="pb-4 text-xl font-medium border-b-4 border-black">Gestion de mon abonnement</summary>
                                <p class="p-4 text-lg border-l-4 border-black">
                                    Bon une fois que tu as souscrit c'est a vie par contre (le temps que j'arrive a faire la gestion du désabonnement..)
                                </p>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="pb-4 text-xl font-medium border-b-4 border-black">L'envoi ?</summary>
                                <p class="p-4 text-lg border-l-4 border-black">
                                    Oh la belle boite ! Oh le beau packaging ! Si jamais une commande arrive endommagée ou avec un produits plus bon on te renvoie le produit sans frais supplémentaires !
                                </p>
                            </details>
                        </li>
                    </ul>
                </div>

        </div>
    </div>
    <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
        <img class="absolute inset-0 object-cover w-full h-full" src="https://i.ibb.co/Y7rwJpg/arbre2.jpg" alt="">
    </div>
</section>

@extends('layouts/footer')

</body>
</html>
