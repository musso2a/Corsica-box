<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
<div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-white">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-white overflow-y-auto lg:translate-x-0 lg:static lg:inset-0 " id="sidebar-admin">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
{{--                    <svg class="" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>--}}
{{--                        <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>--}}
{{--                    </svg>--}}
                    <a href="/"><img class="h-12 w-15" src="https://i.ibb.co/jRGvMvc/logo.png" alt=""></a>

                </div>
            </div>

            <nav class="mt-10">
{{--                @if( user()->is_admin == 0)--}}
                @if( Auth::user()->is_admin == 0)
                <a class="flex items-center mt-4 py-2 px-6  bg-opacity-25 text-black" href="/admin">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>

                    <span class="mx-3 ">Dashboard</span>
                </a>
                <br>
                @else
                    <a class="flex items-center mt-4 py-2 px-6  bg-opacity-25 text-black" href="/admin">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>

                        <span class="mx-3 ">Dashboard</span>
                    </a>
                    <br>
                <a class="flex items-center mt-4 py-2 px-6 text-black hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                   href="/admindashboard">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                        </path>
                    </svg>

                    <span class="mx-3">Gerer utilisateurs</span>
                </a>
                <br>
                <a class="flex items-center mt-4 py-2 px-6 text-black hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                   href="/adminplans">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>

                    <span class="mx-3">Abonnements</span>
                </a>
                <br>

                <a class="flex items-center mt-4 py-2 px-6 text-black hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                   href="/adminnews">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>

                    <span class="mx-3">Actualités</span>
                </a>
{{--                @else--}}
{{--                    <a class="flex items-center mt-4 py-2 px-6  bg-opacity-25 text-black" href="/">--}}
{{--                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                             stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                  d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                  d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>--}}
{{--                        </svg>--}}

{{--                        <span class="mx-3 ">Dashboard</span>--}}
{{--                    </a>--}}
{{--                    <br>--}}
{{--                    @endif--}}
                @endif
            </nav>
        </div>
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-black">
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-black focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <div class="relative mx-4 lg:mx-0">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">

                        </span>

                    </div>
                </div>

                <div class="flex items-center">
                    <div x-data="{ notificationOpen: false }" class="relative">
                        <button @click="notificationOpen = ! notificationOpen"
                                class="flex mx-4 text-gray-600 focus:outline-none">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </button>

                        <div x-show="notificationOpen" @click="notificationOpen = false"
                             class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>


                    </div>

                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                            <img class="h-full w-full object-cover"
                                 src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                                 alt="Your avatar">
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                             style="display: none;"></div>

                        <div x-show="dropdownOpen"
                             class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                             style="display: none;">
                            <a href="/admin"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                            <a href="/services"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
{{--                            <a href="/logout"--}}
{{--                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>--}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                                       onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-white">
                <div class="container mx-auto px-6 py-8">
                    <h3 class="text-gray-700 text-3xl font-medium">Dashboard de {{ $user->name }}</h3>

                    <div class="mt-8">
{{--                       <p>{{Auth::user()->name}}</p>--}}
                    </div>




                    <form class="w-full max-w-lg" method="POST">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_name">
                                    Prenom
                                </label>
                                <input class="appearance-none block w-full bg-white text-gray-700 border border-black py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="first_name" type="text" placeholder="Prénom">

                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                    Nom
                                </label>
                                <input class="appearance-none block w-full bg-white text-gray-700 border border-black py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-black" id="name" type="text" placeholder="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="adresse">
                                    Adresse
                                </label>
                                <input class="appearance-none block w-full bg-white text-gray-700 border border-black py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-black" id="adresse" type="text" placeholder="Adresse">

                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                                    Ville
                                </label>
                                <input class="appearance-none block w-full bg-white text-gray-700 border border-black py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="city" type="text" placeholder="Ville">

                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="postal_code">
                                    Code postal
                                </label>
                                <input class="appearance-none block w-full bg-white text-gray-700 border border-black py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-black" id="postal_code" type="text" placeholder="ZIP">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input class="appearance-none block w-full bg-white text-gray-700 border border-black py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-black" id="email" type="text" placeholder="Email">

                            </div>
                        </div>

                        <div class="mt-8">
                            <a class="relative inline-block group" href="/updateuser">
  <span
      class="absolute inset-0 transition-transform transform translate-x-1 translate-y-1 bg-black group-hover:translate-y-0 group-hover:translate-x-0"></span>
                                <span class="relative inline-block px-5 py-3 font-medium text-black bg-white border-2 border-current">
    Mettre a jour mes informations
  </span>
                            </a>
                            {{--                        <a href="/newsform">Ajouter +</a>--}}
                        </div>
                    </form>


                    {{--                    <div class="flex flex-col mt-8">--}}
{{--                        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">--}}
{{--                            <div--}}
{{--                                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">--}}
{{--                                <table class="min-w-full">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th--}}
{{--                                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                            Name</th>--}}
{{--                                        <th--}}
{{--                                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                            Adresse</th>--}}
{{--                                        <th--}}
{{--                                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                            Admin</th>--}}
{{--                                        <th--}}
{{--                                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                            Numero</th>--}}
{{--                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}

{{--                                    <tbody class="bg-white">--}}
{{--                                    @foreach($allUsers as $user)--}}
{{--                                    <tr>--}}
{{--                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
{{--                                            <div class="flex items-center">--}}
{{--                                                <div class="flex-shrink-0 h-10 w-10">--}}
{{--                                                    <img class="h-10 w-10 rounded-full"--}}
{{--                                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"--}}
{{--                                                         alt="">--}}
{{--                                                </div>--}}

{{--                                                <div class="ml-4">--}}
{{--                                                    <div class="text-sm leading-5 font-medium text-gray-900">{{ $user->name }}</div>--}}
{{--                                                    <div class="text-sm leading-5 text-gray-500">{{ $user->email }}</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}

{{--                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
{{--                                            <div class="text-sm leading-5 text-gray-900">{{ $user->adresse }}</div>--}}
{{--                                            <div class="text-sm leading-5 text-gray-500">{{ $user->city }}</div>--}}
{{--                                        </td>--}}

{{--                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
{{--                                                <span--}}
{{--                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">@if($user->is_admin==0) Utilisateur @else Admin @endif</span>--}}
{{--                                        </td>--}}

{{--                                        <td--}}
{{--                                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">--}}
{{--                                            {{ $user->telephone }}</td>--}}

{{--                                        <td--}}
{{--                                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">--}}
{{--                                            <a href="/edituser/{{ $user->id }}" class="text-indigo-600 hover:text-indigo-900">Edit</a> |--}}
{{--                                            <a href="/deleteuser/{{ $user->id }}" class="text-indigo-600 hover:text-indigo-900 color:red">Supprimer</a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    @endforeach--}}

{{--                                    </tbody>--}}
{{--                                </table>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
</body>
</html>
