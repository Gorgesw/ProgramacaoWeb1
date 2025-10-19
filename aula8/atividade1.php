1. Criar um programa que execute a soma de três valores.
Se a primeira variável for maior que 10, escrever o resultado da operação em azul
Se a segunda variável for menor que a terceira, escrever o resultado em verde
Se a terceira variável for menor que a primeira e a segunda variável escrever o
resultado em vermelho. <br><br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">

<label for="um">Valor 1 </label> <br> 
<input type="number" name="um"><br>

<label for="dois">Valor 2 </label> <br> 
<input type="number" name="dois"><br>

<label for="tres">Valor 3 </label> <br> 
<input type="number" name="tres"><br><br>
<button>Somar</button>
</form>
    
<?php

$valorUm = ($_POST['um']) ? (float)$_POST['um'] : 0;
$valorDois = ($_POST['dois']) ? (float)$_POST['dois'] : 0;
$valorTres = ($_POST['tres']) ? (float)$_POST['tres'] : 0;

$resultado = $valorUm + $valorDois + $valorTres;

$resultado = $valorUm + $valorDois + $valorTres;
if ($valorUm !== '' && $valorDois !== '' && $valorTres !== '') {

    $resultado = $valorUm + $valorDois + $valorTres;

    if ($valorUm > 10) {
        echo "<p style='color: blue;'>Resultado: $resultado</p>";
    } elseif ($valorDois < $valorTres) {
        echo "<p style='color: green;'>Resultado: $resultado</p>";
    } elseif ($valorTres < $valorUm && $valorTres < $valorDois) {
        echo "<p style='color: red;'>Resultado: $resultado</p>";
    } else {
        echo "<p>Resultado: $resultado</p>"; 
    }
}
?>

</body>
</html>