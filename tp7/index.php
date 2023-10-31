<?php
// Ejercicio 1.a)
$array1 = [2,4,6,8,10,12,14,16,18,20];

foreach ($array1 as $numero) {
    echo $numero . "<br>";
}
echo "<br>";

// Ejercicio 1.b)
$array2 = ["Pedro", "Ana", 34, 1 ];
print_r($array2);

echo "<br>";
// Ejercicio 1.b)
$arrayAsoc = [
    "nombre" => "Pedro",
    "apellido" => "Torres",
    "direccion" => "Av. Mayo 3703",
    "telefono" => 1122334455, 
]; 

echo "<br>";
// Ejercicio 1.c)
$array3= ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

foreach ($array3 as $clave => $ciudad) {
    echo "La ciudad con el indice " . $clave. " tiene el nombre " . $ciudad ."<br>";
}
echo "<br>";
// Ejercicio 1.d)

$arrayAsoc2 = [
   "MD" => "Madrid",
   "BCL" => "Barcelona",
   "LD" => "Londres",
   "NY" => "New York",
   "LA" => "Los Angeles",
   "CCG" => "Chicago",
];

foreach ($arrayAsoc2 as $clave => $ciudad) {
    echo "El indice de " . $ciudad . " es " . $clave . "<br>";
}



?>