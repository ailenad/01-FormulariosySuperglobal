<?php
    $peliculas = array(
        'jumanji' => 'Jumanji',
        'juego' => 'Los juegos del hambre',
        'titanic' => 'Titanic',
        'codigo' => 'El codigo enigma',
        'felicidad' => 'En busca de la felicidad',
        'minions' => 'Minions',
        'sherek' => 'Sherek',
        'spiderman' => 'Spiderman',
        'jack' => 'Jack Reacher',
        'linea' => 'Linea de fuego'
    );

    foreach ($peliculas as $key => $value) {
        echo '<input type="checkbox" name="peliculasVistas[]" value="' . $key . '">';
        echo '<label for="' . $key . '">' . $value . '</label><br>';
    }


?>