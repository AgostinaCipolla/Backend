<?php
   echo "Ejercicio a)1) <br>";
    for ($i = 1; $i < 10; $i++) {
        echo "$i  <br>";
    }

    echo "<br>";
    echo "Ejercicio 2) <br>";

    for ($i = 9; $i > 0; $i--) {
        echo "$i <br>";
    }
    echo "<br>Ejercicio 3) <br>";
    $numero = 2;
    echo ("<br>");
    while (($numero % 2) == 0 && $numero<21 ){
        echo "$numero <br>";
        $numero = $numero + 2;
    }
    echo "<br>Ejercicio 4) <br>";
    $numero = 1;
    echo ("<br>");
    while (($numero % 2) != 0 && $numero<21 ){
        echo "$numero <br>";
        $numero = $numero + 2;
    }

    echo "<br>Ejercicio 5) <br>";
    $suma1 = 0;
    echo ("<br>");
    for ($numero = 1; $numero <=20; $numero++ ) {
        $suma1 = $suma1 + $numero;
        echo "$suma1<br>";
        
    }
    echo "<br>Ejercicio 6) <br>";
    $suma2 = 0;
    for ($numero = 1; $numero <=20; $numero++ ) {
      if ($numero % 2 ==0) {
        $suma2 = $suma2 + $numero;
        echo "$suma2<br>";      
      }  
       
    }
?>