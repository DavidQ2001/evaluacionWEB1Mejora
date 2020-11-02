<?php
$precioproducto1=$_POST["precioProducto1"];
$precioproducto2=$_POST["precioProducto2"];
$precioproducto3=$_POST["precioProducto3"];
$precioproducto4=$_POST["precioProducto4"];
$precioproducto5=$_POST["precioProducto5"];

$total = $precioproducto1+$precioproducto2+$precioproducto3+$precioproducto4+$precioproducto5;
$porcentaje = 0.19;
$costoPorcentaje = $total * $porcentaje;

echo ($total + $costoPorcentaje);

