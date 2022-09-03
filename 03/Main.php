<?php
include("Circulo.php");

$circulo = new Circulo(10, 10, 5);

echo "área do círculo: " . $circulo->area_do_circulo();
echo "<br>";

echo "reduzir: " . $circulo->reduzir(10);
echo "<br>";

echo "aumentar: " . $circulo->aumentar(10);
echo "<br>";

echo $circulo->mover(20);
