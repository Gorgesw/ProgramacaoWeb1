<?php

$salario1 = 1000;
$salario2 = 2000;
$salario2 = $salario1;
$salario2++;
$salario1 *= 1.1;

echo "salario 1: $salario1, Salario2: $salario2 <br>";

if ($salario1 > $salario2) {
    echo "<br>O Valor da variável 1: $salario1 é maior que o valor da variável 2: $salario2";
} else if ($salario1 < $salario2) {
   echo  "<br>O Valor da variável 2: $salario2 é maior que o valor da variável 1: $salario1";
} else {
   echo  "Os valores da variável 1: $salario1 e variável 2: $salario2 sao iguais!";
}

$status = array("Otimo", "Muito Bom", "bom");
foreach ($status as $valor) {
   echo "<br> $valor ";
}

for ($i = 1; $i = 100; $i++) {
   $salario1++;
   if ($i = 49) {
      break;
   }

}