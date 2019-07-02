<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top spyOnThis" style="opacity: 0.75">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="{{ asset('storage/local_assets/icons/mylogo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            &nbsp; Francis Gelsano
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tech-stack">Tech Stack</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blogs">Blogs</a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

                @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>