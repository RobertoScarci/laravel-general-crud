<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/2560px-International_Pok%C3%A9mon_logo.svg.png" alt="" width="10%">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item {{ ( Route::currentRouteName() == 'home') ? 'active' : '' }}">
                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item {{ ( Route::currentRouteName() == 'pages.pokemons') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('pages.pokemons') }}">PokeDex</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Crea un nuono Pokemon</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <img src="https://assets.pokemon.com//assets/cms2/img/misc/virtual-backgrounds/go/pokestop.jpg" alt="" class="pokedex">
</header>