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
<article>

    <div class="max-w-screen-xl px-4 py-16 mx-auto space-y-8 sm:px-6 lg:px-8">

        <div class="aspect-w-16 aspect-h-9" id="actuality-img">
            <img class="object-cover " src="https://images.unsplash.com/photo-1611095786283-c2f965646ef1?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1651&q=80" alt="">
        </div>
        <div class="grid items-start grid-cols-1 gap-12 mt-12 lg:grid-cols-3">
            <div class="flex items-center space-x-3">
                <dl class="flex flex-col space-y-0.5 text-gray-500">
                    <div class="inline-flex">
                        <dt class="sr-only">Author</dt>
                        <dd>Alfie Wickers</dd>
                    </div>
                    <div class="inline-flex">
                        <dt class="sr-only">Published on</dt>
                        <dd class="text-sm">Mar 30, 2021</dd>
                    </div>
                </dl>
            </div>
            <div class="lg:col-span-2">
                <div class="prose max-w-none">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus reprehenderit sit perferendis culpa
                        voluptas laborum omnis aliquid quibusdam eveniet laboriosam ea commodi, ex quae repellat asperiores tenetur
                        consequuntur dolorem. Ea!
                    </p>
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, dicta!</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor facere tenetur repellendus minima reiciendis
                        est culpa eos illo voluptatem! Modi soluta veritatis ipsam labore voluptatem asperiores dolor rem porro
                        dolores.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam repudiandae temporibus maxime assumenda
                        blanditiis fugit neque doloremque aut sit vero!
                    </p>
                </div>
            </div>
        </div>
    </div>

</article>

@extends('layouts/footer')

</body>
</html>
