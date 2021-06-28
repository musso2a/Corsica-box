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
<script src="https://js.stripe.com/v3/"></script>
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

            <form action="" method="post" class="max-w-xl mx-auto mt-8 mb-0 space-y-4" id="payment-form">
                @csrf

                @foreach ($plans as $plan)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="plan" id="plan{{ $plan->id }}" value="{{ $plan->id }}">
                        <label class="form-check-label" for="plan{{ $plan->id }}">
                            Abonnement {{ $plan->name }} ({{ $plan->price }} €)
                        </label>
                    </div>
                @endforeach
                <br>
                <br>
                <div>
                    <label for="nom" class="">Nom</label>
                    <div class="relative">
                        <label for="name"></label>
                        <input
                            name="name"
                            id="name"
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
                <div id="card-element">
                    <!-- Elements will create input elements here -->
                </div>

                <!-- We'll put the error messages in this element -->
                <div id="card-errors" role="alert"></div>
                <br>
                <div class="flex items-center justify-between">


                    <button type="submit" class="inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-black" id="card-button" data-secret="{{ $intent->client_secret }}">
                        Je m'abonne !
                    </button>
                    <p class="text-sm text-gray-500">

                        <a class="underline" href=""></a>
                    </p>

                </div>
            </form>
        </div>

</section>

<script>
    const stripe = Stripe('pk_test_51J4ssvGbsQS9algrG83ozZpxyZf30FVAqM4L3UZ9zpwLsmtFudWToSP2vzNDROdq6P6aIzYMbftPPyQOxXww56T3005Tvs3zue');

    const elements = stripe.elements();
    const style = {
        base: {
            color: "#00007b",
        }
    };

    const card = elements.create("card", { style: style });
    card.mount("#card-element");

    const cardHolderName = document.getElementById('name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

    card.on('change', ({error}) => {
        let displayError = document.getElementById('card-errors');
        if (error) {
            displayError.textContent = error.message;
        } else {
            displayError.textContent = '';
        }
    });

    const form = document.getElementById('payment-form');

    form.addEventListener('submit', async (ev) => {
        ev.preventDefault();

        let displayError = document.getElementById('card-errors');

        const { setupIntent, error } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: card,
                    billing_details: { name: cardHolderName.value }
                }
            }
        );

        if (error) {
            // Display "error.message" to the user...
            displayError.textContent = error.message;
        } else {
            // The card has been verified successfully...
            displayError.textContent = '';
            // console.log(setupIntent);

            let paymentMethod = document.createElement('input');
            paymentMethod.setAttribute('type', 'hidden');
            paymentMethod.setAttribute('name', 'payment_method');
            paymentMethod.value = setupIntent.payment_method;

            form.appendChild(paymentMethod);
            form.submit();
        }

    });


</script>


@extends('layouts/footer')
</body>
</html>

