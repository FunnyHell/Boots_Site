<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Home
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="/price-list" class="nav-link">
                            Price list
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/reviews" class="nav-link">
                            Reviews
                        </a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/home">
                                    Orders
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4" id="bg">
        <div class="container">
            <div class="first-main">
                <label>
                    <input type="radio" name="order" class="order">
                    <h1>Make new order</h1>
                    <div class="order-form-container">
                        <form action="/order" method="post">
                            @csrf
                            <input type="text" name="name" id="name" placeholder="Name" class="input-text" required>
                            <input type="email" name="email" id="email" placeholder="E-mail" class="input-text"
                                   required>
                            <input type="tel" name="phone" id="phone" placeholder="Phone number" class="input-text"
                                   required>
                            <input type="text" name="address" id="address" placeholder="Address" class="input-text"
                                   required>
                            <textarea name="message" id="" cols="30" rows="3" placeholder="Comment"
                                      class="input-text"></textarea>
                            <select name="price_id" class="input-text">
                                @foreach($prices as $price)
                                    <option value="{{$price->id}}">$price->service</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Order" id="order">
                        </form>
                    </div>
                </label>
            </div>
            <div class="second-main">
                <h1>About us</h1>
                <div>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, beatae culpa dicta
                        doloribus dolorum eius ex id illo illum impedit ipsam maxime natus nihil placeat porro sed totam
                        ut. Perspiciatis?</h3>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, culpa ducimus excepturi
                        exercitationem facilis harum nisi reprehenderit vitae. Aut consequuntur dicta dolorum impedit
                        nisi nostrum quas quasi rem ut voluptas!</h3>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab delectus distinctio dolorem, earum
                        error eveniet excepturi fuga harum, hic modi natus nobis nostrum praesentium quaerat quas
                        recusandae, repudiandae similique sunt!</h3>
                </div>
            </div>
            <div class="second-main">
                <h1>Contact</h1>
                <h2>Telephone: +38(067)777-77-77</h2>
                <h3>E-mail: email@example</h3>
            </div>
        </div>
    </main>
</div>
</body>
</html>
