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
<article class="h-screen overflow-auto">
    <br>
    <br>
    <div class="max-w-screen-xl px-4 py-16 mx-auto space-y-8 sm:px-6 lg:px-8 overflow-auto">

        <div class="aspect-w-16 aspect-h-9" id="actuality-img">
            <img class="object-fill object-center" src="https://i.ibb.co/k18nd39/montagne.jpg" alt="">
        </div>
        <div class="grid items-start grid-cols-1 gap-12 mt-12 lg:grid-cols-3">
            <div class="flex items-center space-x-3">
                <dl class="flex flex-col space-y-0.5 text-gray-500">
                    <div class="inline-flex">
                        <dt class="sr-only">Author</dt>
                        <dd>{{ $new->title }}</dd>
                    </div>
                    <br>
                    <div class="inline-flex">
                        <dt class="sr-only">Published on</dt>
                        <dd class="text-sm">{{ $new->created_at }}</dd>
                    </div>
                </dl>
            </div>
            <div class="lg:col-span-2">
                <div class="prose max-w-none">
                    <p>{{ $new->description }} </p>

                </div>
            </div>
        </div>
    </div>

</article>

@extends('layouts/footer')

</body>
</html>
