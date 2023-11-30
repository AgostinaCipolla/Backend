<?php
//Ejercicio 1.a)

function perimetro($lado) {
    $per = $lado*$lado;
    echo "El perimetro del cuadrado con lado = " . $lado . " es " . $per;
}

perimetro(5);

//Ejercicio 1.b)
echo "<br>";

function convertiramayus ($cadena) {
    $mayuscula = strtoupper($cadena);
    echo "La cadena convertida en mayuscula es " . $mayuscula;
}

convertiramayus("hola");
echo "<br>";

function convertiraminus ($cadena) {
    $minuscula = strtolower($cadena);
    echo "La cadena convertida en mayuscula es " . $minuscula ;
}

convertiraminus("HOLA");
echo "<br>";

//Ejercicio 1.c)
echo "<br>";

function diames($mes) {
    if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
        $resultado = "El mes ingresado tiene 31 dias";
        return $resultado;
    } elseif ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
        $resultado = "El mes ingresado tiene 30 dias";
        return $resultado;
    }
    else 
    $resultado = "El mes ingresado tiene 28 dias";
    return $resultado;
}

$variable = diames(12);
echo $variable."<br>";




?>