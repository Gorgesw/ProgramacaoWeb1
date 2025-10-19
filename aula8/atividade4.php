Crie um programa que calcule a área de um retângulo. Você deve configurar duas
variáveis que representam os lados a e bdesse quadrado em metros. Após o cálculo
escrever uma frase com o resultado da operação, exemplo: “A área do retângulo de
lados 3 e 2 metros é 6 metros quadrados.” Caso a área for maior que 10 escreva a frase
usando a tag h1, se não, escrever com h3. <br><br>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Retângulo</title>
</head>
<body>


<form method="post">
    <label>Lado a (em metros):</label><br>
    <input type="number" name="lado_a" required><br><br>

    <label>Lado b (em metros):</label><br>
    <input type="number" name="lado_b" required><br><br>

    <button type="submit">Calcular</button>
</form>

<?php
if (isset($_POST['lado_a']) && isset($_POST['lado_b'])) {

    $ladoA = $_POST['lado_a'];
    $ladoB = $_POST['lado_b'];

    $area = $ladoA * $ladoB;


    $frase = "A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.";

    if ($area > 10) {
        echo "<h1>$frase</h1>";
    } else {
        echo "<h3>$frase</h3>";
    }
}
?>

</body>
</html>
