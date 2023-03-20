<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- from Master -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        @vite(['resources/css/app.css','resources/sass/app.scss','resources/css/areset.css', 'resources/css/custom.css',  'resources/js/app.js'])
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
        <title>Laravel</title>
    </head>

<body class="antialiased">
    <div class="container-fluid">
        <div class="row text-center my-3">
            <div class="col-sm-12 mb-3 bg-info">
                {{-- <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0"> --}}     
                    <h1><i class="fa-brands fa-twitter fa-spin" style="--fa-animation-iteration-count: 1;"></i>
                        <a href="/messages">Mini Twitter Reloaded with LARAVEL Breeze</a></h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque officia quia laborum minus nemo veniam saepe quaerat nostrum facere, eligendi nobis, non esse earum error molestias dignissimos ratione possimus delectus!Labore, quod voluptates temporibus deserunt mollitia perferendis, error fugiat adipisci quas provident voluptatibus dolorem eum quae nisi reiciendis ducimus officia a id veniam. Autem porro adipisci, perspiciatis recusandae mollitia asperiores.   </p>
                {{-- </div> --}}
            </div>
            <div class="col-sm-12 mb-3 bg-info">
                {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"> --}}
                    @if (Route::has('login'))
                        {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"> --}}
                            @auth
                                <h3><a href="{{ url('/dashboard') }}" {{-- class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" --}}>Dashboard</a></h3>
                                @else
                                <h3><a href="{{ route('login') }}" {{-- class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" --}}>Log in</a></h3>
        
                                @if (Route::has('register'))
                                <h3><a href="{{ route('register') }}" {{-- class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" --}}>Register</a></h3>
                                @endif
                            @endauth
                        {{-- </div> --}}
                    @endif
            </div>
            <div class="col-sm-12 mb-3">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</div>
        </div>
    </div>
{{-- <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div> --}}
    </body>
</html>
