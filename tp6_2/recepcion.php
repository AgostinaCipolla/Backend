<?php

    $nombre = $_GET["nombrealumno"];
    $nota = $_GET["nota"];
    echo "<br>";
    

    if ($nota >= 0 && $nota  <= 10) {
        if ($nota  >= 0 && $nota  <= 2) {
            echo "La nota del alumno/a " . $nombre . " es 'muy deficiente'";
        } elseif ($nota >= 3 && $nota <= 5){
            echo "La nota del alumno/a " . $nombre . " es 'insuficiente'";
        } elseif ($nota >= 6 && $nota<= 7) {
            echo "La nota del alumno/a " . $nombre . " es 'bien'";
        } elseif ($nota >= 8 && $nota <= 9) {
            echo "La nota del alumno/a " . $nombre . " es 'notable'";
        } else {
            echo "La nota del alumno/a " . $nombre . " es 'sobresaliente'";
        } 
    }

?>