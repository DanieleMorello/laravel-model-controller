<header class="text-center bg-dark py-3">
    @include('layouts.partials.logo')
    <nav class="nav justify-content-center mt-5">

      <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'bg-primary text-white' : '' }}" href="{{ route('home') }}" aria-current="page">Home</a>
      <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'bg-primary text-white' : '' }}" href="{{ route('movies') }}">Film</a>
      <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'bg-primary text-white' : '' }}" href="{{ route('contacts') }}">Contattaci</a>
    </nav>
</header>
