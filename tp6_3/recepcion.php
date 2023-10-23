<?php

$nombre = $_GET["nombrealumno"];
$nota = $_GET["nota"];
echo "<br>";

if (empty($nombre) && empty($nota)) {
    echo "no ingreso datos validos";
} elseif (empty($nombre)) {
    echo "no ingreso nombre valido";
} elseif (empty($nota)) {
    echo "no ingreso nota valida";
} else {
 

    if ($_GET["nota"] >= 0 && $_GET["nota"] <= 10) {
        if ($_GET["nota"] >= 0 && $_GET["nota"] <= 2) {
            echo "La nota del alumno/a " . $nombre . " es 'muy deficiente'";
        } elseif ($_GET["nota"] >= 3 && $_GET["nota"] <= 5){
            echo "La nota del alumno/a " . $nombre . " es 'insuficiente'";
        } elseif ($_GET["nota"] >= 6 && $_GET["nota"] <= 7) {
            echo "La nota del alumno/a " . $nombre . " es 'bien'";
        } elseif ($_GET["nota"] >= 8 && $_GET["nota"] <= 9) {
            echo "La nota del alumno/a " . $nombre . " es 'notable'";
        } else {
            echo "La nota del alumno/a " . $nombre . " es 'sobresaliente'";
        }
    }else {
        echo "la nota ingresada es invalida";
        }
}   
?>