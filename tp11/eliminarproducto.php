<?php

$idproducto = $_GET["id"];

$conexion = mysqli_connect("localhost:3306","root", "", "proyecto_integrador");
$query = "DELETE FROM productos WHERE id_producto=$idproducto";
$resultado = mysqli_query($conexion, $query);

if($resultado === true){
    echo "el producto se elimino correctamente";
}
else{
    echo "hubo un error, vuelva a intentar";
}

mysqli_close($conexion);



?>