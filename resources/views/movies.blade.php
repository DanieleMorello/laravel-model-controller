@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Film amazing collection</h1>
        <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos molestiae, nam perferendis blanditiis distinctio, soluta facilis magni odio necessitatibus vero aut nisi iusto quos veniam ratione inventore. Sunt, rerum saepe.</p>
        <button class="btn btn-primary btn-lg" type="button">Guarda tutti i film</button>
    </div>
</div>
  <h1 class="text-center">Film</h1>
  <div class="container">
  <section class="py-5">
    <div class="row row-cols-1 row-cols-lg-3 g-4">
      @forelse ($movies as $movie)
      <div class="col">
        <div class="card">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}" class="card-img-top">
            <div class="card-body">
                <h3 class="card-title"> {{ $movie->title }}</h3>
                 <p>{{ $movie->description }}</p>
                 <button class="btn btn-primary">Guarda ora</button>
            </div>
        </div>
    </div>

  @empty
       <div class="col">
        <p>Spiacente film non disponibile!</p>
      </div>
  @endforelse
    </div>
    </section>
</div>

@endsection
