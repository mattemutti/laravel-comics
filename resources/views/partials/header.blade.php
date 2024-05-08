<header>

    <div class="top_header">
        <div class="container">
            <div class="row justify-content-end text-end g-0 ">
                <div class="col-3"><a class="text-white text-decoration-none" href="">DC POWER VISA</a></div>
                <div class="col-3"><a class="text-white text-decoration-none" href="">ADDITIONAL DC SITES</a></div>
            </div>
        </div>
    </div>
    {{-- header top --}}




    <div class="container nav_header">
        <div class="row justify-content-between g-0">
            <div class="col-2">

                <nav class="navbar ">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand" href="/">
                            <img class="logo_header" src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                                alt="">
                        </a>
                    </div>
                </nav>
            </div>
            <div class="col-8 d-flex justify-content-center">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">CHARACTERS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  {{ Route::currentRouteName() === 'comics.index' || 'comics.show' ? 'nav_active' : '' }} "
                                        href="{{ route('comics.index') }}">COMICS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">MOVIES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">TV</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">GAMES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">COLLECTIBLES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">VIDEOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FANS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">NEWS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">SHOP</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>




            </div>

            <div class="col-2 text-end align-content-center justify-content-end px-0">

                <nav class="navbar">
                    <div class="container-fluid justify-content-end px-0 ">
                        <form class="d-flex  " role="search">
                            <input class="form-control me-2 nav_search text-end" type="search" placeholder="Search "
                                aria-label="Search">
                        </form>
                    </div>
                </nav>
            </div>




        </div>
    </div>


</header>
