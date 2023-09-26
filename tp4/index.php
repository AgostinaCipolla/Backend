  <?php
  //Ejercicio 1
  $n = 15;
    if ($n > 0) {
      echo "El numero ingresado es un numero positivo";
    }

//Ejercicio 2
$n = 5;
    if (($n>1) && ($n<10)) {
      echo "<br><br>El numero ingresado es mayor a 1 y menor que 10";
    }

// Ejercicio 3
$n = 11;
    if (($n<2) || ($n>=10)) {
      echo "<br><br> El numero ingresado es mayor o igual a 10 o menor a 2 ";
    } else {
      echo "<br><br>El numero no pudo ser validado";
    }

//Ejercicio 4
    $numero1 = 16;
    $numero2 = 8;
    
      if ($numero1>$numero2) {
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2; 
        echo "<br><br> La suma de los numeros " . $numero1 . " y " . $numero2 . " es = " . $suma;
        echo "<br> La resta de los numeros " . $numero1 . " y " . $numero2 . " es = " . $resta;
      } elseif ($numero2>$numero1) {
        $multip = $numero1 * $numero2;
        $divic = $numero1 / $numero2;
        $resto = $numero1 % $numero2;
        echo "<br><br> La multiplicacion de los numeros " . $numero1 . " y " . $numero2 . " es = " . $multip;
        echo "<br> La division entera de los numeros " . $numero1 . " y " . $numero2 . " es = " . $divic;
        echo "<br> El resto de la division entera de los numeros " . $numero1 . " y " . $numero2 . " es = " . $resto;
      } else{
        echo "<br><br> Los numeros son iguales";
      }
  ?>
