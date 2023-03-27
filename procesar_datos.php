<?php
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $fecha= $_POST['fecha'];
    $peliculas= $_POST['peliculas'];

    //recorrer las peliculas
    echo "<h2> Las peliculas que han visto son </h2>";
    foreach ($peliculas as $pelicula) {
        echo " <li>Peliculas " . $pelicula . "</li>";
    }

    $numeroPeliculas = count($peliculas);
    echo "<p> El numero de peliculas es " .$numeroPeliculas. "</p>";
?>