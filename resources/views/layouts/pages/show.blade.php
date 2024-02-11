@extends('layouts.app')

@section('title', 'DC - Comic')

@section('main-content')
<div class="bg-body-tertiary">
    <div class="container pt-5 text-center">
        <div class="wrapper">
            <div class="img-box">
                <img src="{{ $pokemon->src }}" alt="" width="400rem" class="">
                <h1 class="type">{{ $pokemon->nome }}</h1>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="wrapper">
            <div class="left-column">
                <div class="available-wrapper">
                    <h5 class="check-avalable">
                        Special Ability:
                        <i class="fa-solid fa-sort-down"></i>
                    </h5>
                </div>
                <p>{{ $pokemon->attacco_speciale }}</p>
            </div>
        </div>
    </div>

    <div class="container text-center pb-4">
        <div class="wrapper">
            <div class="specs">
                <h2>Info</h2>

                <div class="series d-flex justify-content-center">
                    <h5>Attack: </h5>
                    <span>{{ $pokemon->attacco }}</span>
                </div>
                <div class="price d-flex justify-content-center">
                    <h5>Defense: </h5>
                    <span>{{ $pokemon->difesa }}</span>
                </div>
                <div class="sale-date">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae vero pariatur temporibus eum repellendus, esse officiis perspiciatis ad, corporis, illum quibusdam cum dolorum optio quo sequi. Non, alias reprehenderit!
                    Quae voluptatem vero ducimus, voluptates quisquam expedita a laudantium impedit cupiditate eos quo debitis? Facere corporis et rerum repellendus vero, tempore, ratione quas veritatis, voluptatibus nostrum id in voluptatum. Est?
                    Est vitae placeat excepturi molestias perferendis consequatur repellat? Eaque nesciunt explicabo illum adipisci corrupti, autem numquam animi veniam, facilis delectus id beatae in aliquam necessitatibus velit pariatur fuga ab ratione?
                </p>
                </div>
            </div>
            <div class="actions mb-3 pt-3">
                    <button class="btn btn-primary">
                        Modifica questo Pokemon
                    </button>
                    <button class="btn btn-secondary">
                        Crea il tuo Pokemon
                    </button>
                    <button class="btn btn-warning">
                        Cancella questo Pokemon
                    </button>
            </div>
        </div>
    </div>
</div>
@endsection