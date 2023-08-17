<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jacques MBABAZI</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,200;10..48,300;10..48,400;10..48,500;10..48,600;10..48,700;10..48,800&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased">
    <div class="bg-gray-900">
        <main>
            <!-- Hero section -->
            <div class="relative isolate overflow-hidden">
                <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                    aria-hidden="true">
                    <defs>
                        <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                            patternUnits="userSpaceOnUse">
                            <path d="M.5 200V.5H200" fill="none"></path>
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                        <path
                            d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                            stroke-width="0"></path>
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)">
                    </rect>
                </svg>
                <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
                    aria-hidden="true">
                    <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                        style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                    </div>
                </div>
                <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-40 lg:flex lg:px-8 lg:pt-40">
                    <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">

                        <div class="mt-24 sm:mt-32 lg:mt-16">
                            <p class="inline-flex space-x-6 text-white text-2xl">
                                Hi !
                            </p>
                            <p class="inline-flex space-x-6 text-white font-bold text-3xl ml-2">I'am</p>
                        </div>
                        <div class="mt-5">
                            <h1 class="text-8xl text-indigo-400">Jacques M.</h1>
                        </div>
                        <h1
                            class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl underline decoration-indigo-600/30">
                            I'm a web designer and developer</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-300">I love designing web interfaces that are modern
                            and beautiful. And I love building web apps using modern web technologies.</p>

                    </div>
                    <div
                class="mx-auto mt-5 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-5 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="{{ asset('images/hero.png')}}" alt="Jacques MBABAZI"
                        class="w-full rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10 object-contain h-full w-full">
                </div>
            </div>
                </div>
            </div>

            <!-- Logo cloud -->
            <div class="mx-auto mt-8 max-w-7xl px-6 sm:mt-16 lg:px-8">
                <h2 class="text-center text-lg font-semibold leading-8 text-white">My daily go to technologies</h2>
                <div
                    class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <a href="" class="text-white">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                            alt="Laravel" width="158" height="48">
                    </a>
                    <a href="">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                            src="https://upload.wikimedia.org/wikipedia/commons/c/c2/GitHub_Invertocat_Logo.svg"
                            alt="GitHub" width="158" height="48">
                    </a>
                    <a href="">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/WordPress_blue_logo.svg/1024px-WordPress_blue_logo.svg.png"
                            alt="Tuple" width="158" height="48">
                    </a>
                    <a href="">
                        <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png"
                            alt="SavvyCal" width="158" height="48">
                    </a>
                    <a href="">
                        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                            src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg" alt="Statamic"
                            width="158" height="48">
                    </a>
                </div>
            </div>

            <!-- My Recent Works -->
            <x-project-component />

            <!-- Services section -->
            <x-service-component />

    
            
        </main>

    <!-- Footer -->
    <x-footer-component />
    </div>
    @livewireScripts
</body>

</html>