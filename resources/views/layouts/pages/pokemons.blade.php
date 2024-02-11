@extends('layouts.app')

@section('title', 'DC - Comics')

@section('main-content')

    <section class="pt-3 pb-4 container">
        <div class="row">
            <h1 class="title">PokeDex</h1>
            <div class=" d-flex flex-wrap">
                @foreach ($pokemons as $pokemon)
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                    <a href="{{ route('pages.show', $pokemon->id) }}">
                      <h5 class="card-title"><img src="{{ $pokemon['src'] }}" alt="" width="100%"></h5>
                    </a>
                      <h4 class=" mb-2 text-body-secondary">Name: {{ $pokemon['nome'] }}</h4>
                      <p class="card-text">Evolution: {{ $pokemon['evoluzione'] }}</p>
                      <p class="card-text pt-2">Special Attack: {{ $pokemon['attacco_speciale'] }}</p>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
    
@endsection