<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ secure_asset('/css/style.css') }}" rel="stylesheet">
    <title>Contact</title>
</head>
<body>

@extends('layouts/navigation')


{{--<div class="flex items-center justify-center h-screen" id="call-to-action">--}}

{{--    --}}{{--        <div class="bg-indigo-800 text-black font-bold rounded-lg border shadow-lg p-10">--}}
{{--    --}}{{--            Centered Content--}}
{{--    --}}{{--        </div>--}}
{{--    <div class="max-w-xl mx-auto text-center">--}}
{{--        --}}
{{--    </div>--}}


{{--</div>--}}

<section class="text-gray-600 body-font relative h-screen object-center overflow-auto">
    <br>
    <br>
    <div class="container px-5 pt-44 mx-auto flex sm:flex-nowrap flex-wrap">
        <div class="lg:w-2/3 md:w-1/2 bg-gray-300  overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
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
            <button class="text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-grey-600 text-lg">Envoyer</button>
        </div>
    </div>
</section>


{{--<section class="relative flex flex-wrap">--}}
{{--    <div class="flex w-full px-4 py-12 lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24 lg:h-screen " id="faq-list">--}}
{{--        <div class="max-w-lg lg:text-left lg:pr-12" id="faq-list-2">--}}
{{--            <!-- component -->--}}
{{--            <!----}}
{{--                =======================================================================--}}

{{--                This is a working contact form. To receive email,--}}
{{--                Replace YOUR_ACCESS_KEY_HERE with your actual Access Key.--}}

{{--                Create Access Key here 👉 https://web3forms.com/--}}

{{--                Surjith S M (@surjithctly)--}}
{{--                =======================================================================--}}
{{--             -->--}}


{{--            <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">--}}
{{--                <div class="container mx-auto">--}}
{{--                    <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">--}}
{{--                        <div class="text-center">--}}
{{--                            <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Contact Us</h1>--}}
{{--                            <p class="text-gray-400 dark:text-gray-400">Fill up the form below to send us a message.</p>--}}
{{--                        </div>--}}
{{--                        <div class="m-7">--}}
{{--                            <form action="https://api.web3forms.com/submit" method="POST" id="form">--}}

{{--                                <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">--}}
{{--                                <input type="hidden" name="subject" value="New Submission from Web3Forms">--}}
{{--                                <input type="checkbox" name="botcheck" id="" style="display: none;">--}}


{{--                                <div class="mb-6">--}}
{{--                                    <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full Name</label>--}}
{{--                                    <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />--}}
{{--                                </div>--}}
{{--                                <div class="mb-6">--}}
{{--                                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email Address</label>--}}
{{--                                    <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />--}}
{{--                                </div>--}}
{{--                                <div class="mb-6">--}}

{{--                                    <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">Phone Number</label>--}}
{{--                                    <input type="text" name="phone" id="phone" placeholder="+1 (555) 1234-567" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />--}}
{{--                                </div>--}}
{{--                                <div class="mb-6">--}}
{{--                                    <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Your Message</label>--}}

{{--                                    <textarea rows="5" name="message" id="message" placeholder="Your Message" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="mb-6">--}}
{{--                                    <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Send Message</button>--}}
{{--                                </div>--}}
{{--                                <p class="text-base text-center text-gray-400" id="result">--}}
{{--                                </p>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-auto">--}}
{{--        <img class="absolute inset-0 object-cover w-full h-full" src="https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80" alt="">--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="relative flex flex-wrap lg:h-screen">--}}

{{--    <div class="w-full mx-auto px-auto px-4 py- md:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24">--}}
{{--        <div class="max-w-lg mx-auto text-center">--}}
{{--            <h1 class="text-2xl font-medium text-gray-900 sm:text-3xl p-30 sm:py-28">Get started today!</h1>--}}

{{--            <p class="mt-4 text-gray-500 italic">--}}
{{--                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque ipsa culpa autem, at--}}
{{--                itaque nostrum!--}}
{{--            </p>--}}
{{--        </div>--}}

{{--        <form action="" class="max-w-xl mx-auto mt-8 mb-0 space-y-4">--}}
{{--            <div>--}}
{{--                <label for="email" class="sr-only">Email</label>--}}

{{--                <div class="relative">--}}
{{--                    <input--}}
{{--                        type="email"--}}
{{--                        class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"--}}
{{--                        placeholder="Enter email"--}}
{{--                    />--}}

{{--                    <span class="absolute inset-y-0 inline-flex items-center right-4">--}}
{{--            <svg--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                class="w-5 h-5 text-gray-400"--}}
{{--                fill="none"--}}
{{--                viewBox="0 0 24 24"--}}
{{--                stroke="currentColor"--}}
{{--            >--}}
{{--              <path--}}
{{--                  stroke-linecap="round"--}}
{{--                  stroke-linejoin="round"--}}
{{--                  stroke-width="2"--}}
{{--                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"--}}
{{--              />--}}
{{--            </svg>--}}
{{--          </span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <label for="password" class="sr-only">Password</label>--}}
{{--                <div class="relative">--}}
{{--                    <input--}}
{{--                        type="password"--}}
{{--                        class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"--}}
{{--                        placeholder="Enter password"--}}
{{--                    />--}}

{{--                    <span class="absolute inset-y-0 inline-flex items-center right-4">--}}
{{--            <svg--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                class="w-5 h-5 text-gray-400"--}}
{{--                fill="none"--}}
{{--                viewBox="0 0 24 24"--}}
{{--                stroke="currentColor"--}}
{{--            >--}}
{{--              <path--}}
{{--                  stroke-linecap="round"--}}
{{--                  stroke-linejoin="round"--}}
{{--                  stroke-width="2"--}}
{{--                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"--}}
{{--              />--}}
{{--              <path--}}
{{--                  stroke-linecap="round"--}}
{{--                  stroke-linejoin="round"--}}
{{--                  stroke-width="2"--}}
{{--                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"--}}
{{--              />--}}
{{--            </svg>--}}
{{--          </span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-between">--}}
{{--                <p class="text-sm text-gray-500">--}}
{{--                    No account?--}}
{{--                    <a class="underline" href="">Sign up</a>--}}
{{--                </p>--}}

{{--                <button type="submit" class="inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg">--}}
{{--                    Sign in--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--    <div class="relative w-full h-64 md:w-1/2 md:h-auto">--}}
{{--        <img class="absolute inset-0 object-cover w-full h-full" src="https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80" alt="" />--}}
{{--    </div>--}}
{{--</section>--}}





{{--<section class="h-screen">--}}

{{--    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">--}}
{{--        <div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 border-gray-200">--}}
{{--            <h2 class="box-border m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">--}}
{{--                Nos Boxs--}}
{{--            </h2>--}}

{{--        </div>--}}
{{--        <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">--}}
{{--            <div class="lg:py-12 lg:col-span-2">--}}
{{--                <p class="max-w-xl text-lg">--}}
{{--                    At the same time, the fact that we are wholly owned and totally independent from manufacturer and other group--}}
{{--                    control gives you confidence that we will only recommend what is right for you.--}}
{{--                </p>--}}

{{--                <div class="mt-8">--}}
{{--                    <a href="" class="text-2xl font-bold text-pink-600"> 0151 475 4450 </a>--}}

{{--                    <address class="mt-2 not-italic">282 Kevin Brook, Imogeneborough, CA 58517</address>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="p-8 bg-white rounded-lg shadow-lg lg:p-12 lg:col-span-3">--}}
{{--                <form action="" class="space-y-4">--}}
{{--                    <div>--}}
{{--                        <label class="sr-only" for="name">Name</label>--}}
{{--                        <input class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="Name" type="text" id="name" />--}}
{{--                    </div>--}}

{{--                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">--}}
{{--                        <div>--}}
{{--                            <label class="sr-only" for="email">Email</label>--}}
{{--                            <input--}}
{{--                                class="w-full p-3 text-sm border-gray-200 rounded-lg"--}}
{{--                                placeholder="Email address"--}}
{{--                                type="email"--}}
{{--                                id="email"--}}
{{--                            />--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="sr-only" for="phone">Phone</label>--}}
{{--                            <input--}}
{{--                                class="w-full p-3 text-sm border-gray-200 rounded-lg"--}}
{{--                                placeholder="Phone Number"--}}
{{--                                type="tel"--}}
{{--                                id="phone"--}}
{{--                            />--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">--}}
{{--                        <div>--}}
{{--                            <input class="sr-only" id="option1" type="radio" tabindex="-1" />--}}
{{--                            <label for="option1" class="block w-full p-3 border border-gray-200 rounded-lg" tabindex="0">--}}
{{--                                <span class="text-sm font-medium"> Option 1 </span>--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <input class="sr-only" id="option2" type="radio" tabindex="-1" />--}}
{{--                            <label for="option2" class="block w-full p-3 border border-gray-200 rounded-lg" tabindex="0">--}}
{{--                                <span class="text-sm font-medium"> Option 2 </span>--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <input class="sr-only" id="option3" type="radio" tabindex="-1" />--}}
{{--                            <label for="option3" class="block w-full p-3 border border-gray-200 rounded-lg" tabindex="0">--}}
{{--                                <span class="text-sm font-medium"> Option 3 </span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div>--}}
{{--                        <label class="sr-only" for="message">Message</label>--}}
{{--                        <textarea--}}
{{--                            class="w-full p-3 text-sm border-gray-200 rounded-lg"--}}
{{--                            placeholder="Message"--}}
{{--                            rows="8"--}}
{{--                            id="message"--}}
{{--                        ></textarea>--}}
{{--                    </div>--}}

{{--                    <div class="mt-4">--}}
{{--                        <button--}}
{{--                            type="submit"--}}
{{--                            class="inline-flex items-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto"--}}
{{--                        >--}}
{{--                            <span class="font-medium"> Send Enquiry </span>--}}

{{--                            <svg--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                class="w-5 h-5 ml-3"--}}
{{--                                fill="none"--}}
{{--                                viewBox="0 0 24 24"--}}
{{--                                stroke="currentColor"--}}
{{--                            >--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}




@extends('layouts/footer')
</body>
</html>
