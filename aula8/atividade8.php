Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois
utiliza Juros Simples para o cálculo das parcelas.
Sabendo então que o valor a vista do moto é R$ 8.654,00.
Crie um programa que calcule o valor das parcelas para as opções abaixo, sabendo que
a taxa de juros aumenta 0,5% em cada nível e inicia em 1,5% para 24 vezes:
24 ezes
36 vezes
48 vezes
60 vezes <br> <br>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Parcelas do Financiamento</title>
</head>
<body>

<form method="post">
    <label>Valor do financiamento:</label><br>
    <input type="text" name="valor" required><br><br>
    <button type="submit">Calcular Parcelas</button>
</form>

<?php
if (isset($_POST['valor'])) {
    $valor = $_POST['valor'];

    $parcelas = [24, 36, 48, 60];
    $taxaBase = 1.5;

    foreach ($parcelas as $i => $numParcelas) {
        $taxa = $taxaBase + ($i * 0.5);
        $valorParcela = ($valor * (1 + $taxa/100)) / $numParcelas;
        $valorParcelaFormatado = number_format($valorParcela, 2, ",", ".");
        echo "<p>$numParcelas vezes com taxa de $taxa%: R$ $valorParcelaFormatado por parcela</p>";
    }
}
?>

</body>
</html>
