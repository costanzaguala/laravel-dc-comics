<header>
    <div class="container-fluid bg-dark p-4 mb-4">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <img class="logo-image" src="{{ asset('img/Marvel_Logo.png') }}" alt="">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-4 text-center">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
