<?php
include("Empregado.php");

$empregado = new Empregado("Fernado", "Gabriel", 1000);
 
echo "nome: " . $empregado->primeiro_nome; 
echo "<br>";

echo "sobrenome: " . $empregado->sobrenome; 
echo "<br>";

echo "sálario mensal: " . $empregado->salario_mensal; 
echo "<br>";

echo "sálario anual: " . $empregado->salario_anual();
echo "<br>";

echo "acréscimo de 10%: " . $empregado->aumento_salario();
echo "<br>";