<?php




class Pokemon {

    public $name;
    public $max_health;   // maximaal health
    public $health;   // gezondheid; als deze <= 0 is, is de pokemon dood
    public $energytype;  // voor deze opdracht mag je volstaan met 1
    public $energytypes;   // uitbreiding: meerdere types kunnen hebben

    // example: https://img.pokemondb.net/artwork/pikachu.jpg
    // example: https://img.pokemondb.net/artwork/bulbasaur.jpg
    public $image_url;

    function __construct($name, $max_health, $energytype, $energytypes){
        $this->name = $name;
        $this->max_health = $max_health;
        $this->health = $max_health;
        $this->energytype = $energytype;
        $this->energytypes = $energytypes;

        $this->image_url = 'https://img.pokemondb.net/artwork/' . strtolower($name) . '.jpg'; 

    }

    

}

