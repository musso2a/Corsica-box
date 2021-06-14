<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ secure_asset('/css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
@extends('layouts/navigation')

<section class="text-gray-600 body-font overflow-hidden h-screen ">
    <br>
    <br>
    <div class="container px-5 py-24 mx-auto ">
        <br>
        <br>
        <br>
        <div class="lg:w-4/5 mx-auto flex flex-wrap object-center">
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://i.ibb.co/bJW9N88/balagne.jpg" id="product-img">

            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">

                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Box Balagne</h1>
                <br>
                <p class="leading-relaxed">La box Balagne contient:</p>
                <br>
                <ul>
                    <li>- 2 morceau de charcuterie</li>
                    <li>- 1 bouteille de vin</li>
                </ul>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">

                    <div class="flex ml-6 items-center object-none object-bottom" id="select-sub">


                        <div class="relative">
                            <span class="mr-3">Durée d'abonnement :</span>
                            <select class="form-select block w-full mt-1">
                                <option>1 mois/19.99€(par mois)</option>
                                <option>3 mois/18.99€(par mois)</option>
                                <option>6 mois/15.99€(par mois)</option>
                            </select>
                            <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
              </span>
                        </div>
                    </div>
                </div>
                <div class="flex object-left">
                    <button class="flex ml-auto text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-black-600 rounded">S'abonner</button>
                </div>
            </div>
        </div>
    </div>
</section>

@extends('layouts/footer')
</body>
</html>

