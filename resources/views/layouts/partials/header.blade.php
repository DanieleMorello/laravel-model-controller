<header>
    <img src="{{ Vite::asset('resources/img/logo.webp') }}" alt="">
    <nav class="nav justify-content-center mt-5">
      <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-primary' : '' }}" href="{{ route('home') }}" aria-current="page">Home</a>
      <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'bg-primary' : '' }}" href="{{ route('movies') }}">Film</a>
      <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-primary' : '' }}" href="{{ route('contacts') }}">Contattaci</a>
    </nav>
</header>
