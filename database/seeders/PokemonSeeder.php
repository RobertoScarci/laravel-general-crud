<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pokemons = config('pokemons.pokemons');

        foreach($pokemons as $pokemon){
            $newPokemon = new Pokemon();
            $newPokemon->nome = $pokemon['nome'];
            $newPokemon->tipo = $pokemon['tipo'];
            $newPokemon->attacco = $pokemon['attacco'];
            $newPokemon->difesa = $pokemon['difesa'];
            $newPokemon->attacco_speciale = $pokemon['attacco_speciale'];
            $newPokemon->evoluzione = $pokemon['evoluzione'];
            $newPokemon->src = $pokemon['src'];
            $newPokemon->save();
        }
    }
}
