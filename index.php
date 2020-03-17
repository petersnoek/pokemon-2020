<?php

    // based on : https://pokemondb.net/pokedex/all 

    require 'EnergyType.php';
    require 'Pokemon.php';

    $pokedex = [];
    $pokedex[0] = new Pokemon('Pikachu', 35, EnergyType::LIGHTNING, []);
    $pokedex[1] = new Pokemon('Charmander', 39, EnergyType::FIRE, []);

    

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokemon-2020</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css" >
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">Pokemon 2020 uitwerking</h1>

    </div>

    <div class="columns">
    
    <?php foreach($pokedex as $pok) {  ?>
        <div class="column">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="<?php echo $pok->image_url ?>" alt="pokemon image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                <div class="media-content">
                    <p class="title is-4"><?php echo $pok->name ?></p>
                    <p class="subtitle is-6"><?php echo $pok->energytype ?></p>
                </div>
                </div>
            </div>
        </div>
        </div>

    <?php } ?>

    </div>


  </section>
  </body>
</html>