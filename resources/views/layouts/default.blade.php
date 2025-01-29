<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="app" class="app">
        <div class="container-fluid defaultContent">
            <div class="row">
                <div class="col-2 with-vertical-line">
                    <div class="flex-shrink-0 p-3">
                        <a href="/"
                           class="text-center d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none">
                            <span class="fs-5 fw-semibold">Brikett Társasházkezelő</span>
                        </a>
                        <hr>
                        <ul class="list-unstyled ps-0 menuSystem">
                            <li class="mb-1">
                                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                    Törzsadatok
                                </button>
                                <div class="collapse" id="home-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Albetétkezelés</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Analitika
                                                törzs</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Vevő
                                                törzs</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Szállító
                                                törzs</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Bank,
                                                pénztár
                                            </a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tárgyi
                                                eszközök
                                            </a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Fő
                                                mérőórák
                                            </a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Levéltörzs
                                            </a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Albetétcsoportok
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1">
                                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                    Könyvelés
                                </button>
                                <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tulajdonosi
                                                befizetés</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Adóköteles
                                                bevétel</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Nem
                                                adóköteles bevétel</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Nem
                                                adóköteles kiadás</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Anyagköltség</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Egyéb
                                                költség</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Munkabér</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tartozás
                                                növekedés</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tartozás
                                                csökkenés</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Követelés
                                                növekedés</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Követelés
                                                csökkenés</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Átvezetés
                                                / pénzmozgás</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Általános
                                                könyvelés</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Banki
                                                import</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1">
                                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                    Tervezés, beszámolók
                                </button>
                                <div class="collapse" id="orders-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Pénzügyi
                                                tervek</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Pénzügyi
                                                év tervezés</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Beszámolók</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Beszámolókészítés</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="border-top my-3"></li>
                            <li class="mb-1">
                                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                    Felhasználói fiók
                                </button>
                                <div class="collapse" id="account-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Új...</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profil</a>
                                        </li>
                                        <li><a href="#"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Beállítások</a>
                                        </li>
                                        <li>
                                            <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}"
                                               class="link-body-emphasis d-inline-flex text-decoration-none rounded">Kijelentkezés</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-10">
                    <div class="row header p-4">
                        <div class="col-12 text-center">
                            <h3>Brikett társasházkezelő</h3>
                        </div>
                    </div>
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>




    </div>
</body>

</html>
