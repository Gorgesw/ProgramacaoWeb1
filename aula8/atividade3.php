3. Crie um programa que calcule a área de um quadrado. Você deve configurar uma
variável que representa o comprimento dos lados de um quadrado em metros. Após o
cálculo escrever uma frase com o resultado da operação, exemplo: “A área do
quadrado de lado 3 metros é 9 metros quadrados”
<br><br>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Quadrado</title>
</head>
<body>


<form method="post">
    <label>Lado do quadrado (em metros):</label><br>
    <input type="number" name="lado"  required><br><br>
    <button type="submit">Calcular</button>
</form>

<?php
if (isset($_POST['lado'])) {

    $lado = (float)$_POST['lado'];

    $area = $lado * $lado;

    echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados.</p>";
}
?>

</body>
</html>
