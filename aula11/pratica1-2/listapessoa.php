<?php
require_once('connect.php');


$busca = $_GET['busca'] ?? '';

if ($busca != '') {
    $sql = "SELECT * FROM TBPESSOA WHERE PESNOME ILIKE '%$busca%'";
} else {
    $sql = "SELECT * FROM TBPESSOA";
}

$result = pg_query($condb, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Pessoas</title>
</head>
<body>

<h2>Listagem de Pessoas</h2>

<form method="get" action="">
    <input type="text" name="busca" placeholder="Buscar por nome..." value="<?php echo ($busca); ?>">
    <button type="submit">Buscar</button>
</form>

<br>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Email</th>
        <th>Cidade</th>
        <th>Estado</th>
    </tr>

    <?php while ($row = pg_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['pesnome']; ?></td>
            <td><?php echo $row['pessobrenome']; ?></td>
            <td><?php echo $row['pesemail']; ?></td>
            <td><?php echo $row['pescidade']; ?></td>
            <td><?php echo $row['pesestado']; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
