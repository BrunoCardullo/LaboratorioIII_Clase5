<?php
$conexion = mysqli_connect("LocalHost", "root","", "ejemplo1");
$consulta = mysqli_query($conexion, "SELECT * FROM tablauno");
//var_dump($consulta);
$filas = mysqli_fetch_object($consulta);
var_dump($filas);

?>