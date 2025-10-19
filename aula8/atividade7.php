Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como
ela não tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que
ficou em 60 parcelas de R$ 489,65.
Escreva um programa que calcule o valor gasto só dos juros que serão pagos por
Mariazinha em comparação ao valor a vista do carro. <br><br>
|
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Juros do Financiamento</title>
</head>
<body>

<form method="post">
    <label>Valor do carro à vista:</label><br>
    <input type="text" name="valor_carro" required><br><br>

    <label>Quantidade de parcelas:</label><br>
    <input type="text" name="parcelas" required><br><br>

    <label>Valor de cada parcela:</label><br>
    <input type="text" name="valor_parcela" required><br><br>

    <button type="submit">Calcular Juros</button>
</form>

<?php
if (isset($_POST['valor_carro'], $_POST['parcelas'], $_POST['valor_parcela'])) {

    $valorCarro = $_POST['valor_carro'];
    $parcelas = $_POST['parcelas'];
    $valorParcela = $_POST['valor_parcela'];

    $totalPago = $parcelas * $valorParcela;
    $juros = $totalPago - $valorCarro;

    echo "<p>O valor gasto com juros será: R$ $juros</p>";
}
?>

</body>
</html>
