<?php

    $nombre = $_GET["nombrealumno"];
    $nota = $_GET["nota"];
    echo "<br>";
    

    if ($nota >= 0 && $nota  <= 10) {
        if ($nota  >= 0 && $nota  <= 2) {
            echo "La nota del alumno/a " . $nombre . " es " . $nota . ": muy deficiente";
        } elseif ($nota >= 3 && $nota <= 5){
            echo "La nota del alumno/a " . $nombre . " es " . $nota . ": insuficiente";
        } elseif ($nota >= 6 && $nota<= 7) {
            echo "La nota del alumno/a " . $nombre . " es " . $nota . ": bien";
        } elseif ($nota >= 8 && $nota <= 9) {
            echo "La nota del alumno/a " . $nombre . " es " . $nota . ": notable";
        } else {
            echo "La nota del alumno/a " . $nombre . " es" . $nota . ": sobresaliente";
        } 
    }

?>