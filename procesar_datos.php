<?php
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $fecha= $_POST['fecha'];
    
    $peliculasVistas= $_POST['peliculas'];

    //recorrer las peliculas
    echo "<h2> Las peliculas que han visto son </h2>";
    foreach ($peliculasVistas as $pelicula) {
        echo " <li>Peliculas " . $pelicula . "</li>";
    }

    $numeroPeliculas = count($peliculasVistas);
    echo "<p> El numero de peliculas es " .$numeroPeliculas. "</p>";
?>