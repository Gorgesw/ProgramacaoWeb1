Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas
pena que ele não sabia da mesma chance que Paulinho.
A empresa que Juquinha foi comprar a moto utiliza juros compostos para calcular o
valor das parcelas.

As opções de compras estudadas por ele são as mesmas de Paulinho, ou seja 24, 36,
48 e 60 vezes o juro nesta empresa inicia em 2% para 24 vezes e aumenta 0,3% para
as opções de parcelamento seguintes.
Utilizando então a fórmula de juros composto que segue abaixo, calcule o valor da
parcela para cada uma das opções a ser estudada por Juquinha.
M = C * (1 + i)t , onde:
M = Montante
C = Capital Inicial
i = Taxa de juros
t = Tempo <br><br>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Parcelas com Juros Compostos</title>
</head>
<body>

<form method="post">
    <label>Valor da moto:</label><br>
    <input type="text" name="valor" required><br><br>
    <button type="submit">Calcular Parcelas</button>
</form>

<?php
if (isset($_POST['valor'])) {
    $valor = $_POST['valor'];

    $parcelas = [24, 36, 48, 60];
    $taxaBase = 2;

    foreach ($parcelas as $i => $numParcelas) {
        $taxa = $taxaBase + ($i * 0.3); 
        $montante = $valor * pow(1 + ($taxa/100), $numParcelas);
        $valorParcela = $montante / $numParcelas;
        $valorParcelaFormatado = number_format($valorParcela, 2, ",", ".");
        echo "<p>$numParcelas vezes com taxa de $taxa%: R$ $valorParcelaFormatado por parcela</p>";
    }
}
?>

</body>
</html>
