
  <nav class="navbar navbar-expand-lg text-uppercase fixed-top" style="background: black    ;" id="mainNav" >
    <div class="container">
        <a class="navbar-brand" href="/">Melinda Ap</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1 {{ Route::is('gallery') ? 'active' : '' }}"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('gallery') }}">Gallery</a></li>
                <li class="nav-item mx-0 mx-lg-1 {{ Route::is('about') ? 'active' : '' }}"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('about') }}">About</a></li>
                <li class="nav-item mx-0 mx-lg-1 {{ Route::is('contact') ? 'active' : '' }}"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
