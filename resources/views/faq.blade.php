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
    <div class="flex w-full px-4 py-12 lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24 lg:h-screen " id="faq-list">
        <div class="max-w-lg lg:text-left lg:pr-12" id="faq-list-2">
                <div class="max-w-screen-xl px-4 py-16  sm:px-6 lg:px-8">
                    <ul class="space-y-10">
                        <li>
                            <details>
                                <summary class="pb-4 text-xl font-medium border-b-4 border-black">Lorem ipsum dolor sit amet?</summary>
                                <p class="p-4 text-lg border-l-4 border-black">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa impedit rerum adipisci nihil, ab id dolor
                                    animi quia nesciunt. Sequi nulla voluptas delectus aspernatur quidem ullam, placeat maxime, nesciunt
                                    expedita est minima beatae. Qui nostrum nemo sed. Aliquid, est facilis fuga ipsa asperiores amet nihil harum
                                    impedit modi dolor.
                                </p>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="pb-4 text-xl font-medium border-b-4 border-black">Lorem ipsum dolor sit amet?</summary>
                                <p class="p-4 text-lg border-l-4 border-black">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa impedit rerum adipisci nihil, ab id dolor
                                    animi quia nesciunt. Sequi nulla voluptas delectus aspernatur quidem ullam, placeat maxime, nesciunt
                                    expedita est minima beatae. Qui nostrum nemo sed. Aliquid, est facilis fuga ipsa asperiores amet nihil harum
                                    impedit modi dolor.
                                </p>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="pb-4 text-xl font-medium border-b-4 border-black">Lorem ipsum dolor sit amet?</summary>
                                <p class="p-4 text-lg border-l-4 border-black">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa impedit rerum adipisci nihil, ab id dolor
                                    animi quia nesciunt. Sequi nulla voluptas delectus aspernatur quidem ullam, placeat maxime, nesciunt
                                    expedita est minima beatae. Qui nostrum nemo sed. Aliquid, est facilis fuga ipsa asperiores amet nihil harum
                                    impedit modi dolor.
                                </p>
                            </details>
                        </li>
                        <li>
                            <details>
                                <summary class="pb-4 text-xl font-medium border-b-4 border-black">Lorem ipsum dolor sit amet?</summary>
                                <p class="p-4 text-lg border-l-4 border-black">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa impedit rerum adipisci nihil, ab id dolor
                                    animi quia nesciunt. Sequi nulla voluptas delectus aspernatur quidem ullam, placeat maxime, nesciunt
                                    expedita est minima beatae. Qui nostrum nemo sed. Aliquid, est facilis fuga ipsa asperiores amet nihil harum
                                    impedit modi dolor.
                                </p>
                            </details>
                        </li>
                    </ul>
                </div>

        </div>
    </div>
    <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">
        <img class="absolute inset-0 object-cover w-full h-full" src="https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80" alt="">
    </div>
</section>

@extends('layouts/footer')

</body>
</html>
