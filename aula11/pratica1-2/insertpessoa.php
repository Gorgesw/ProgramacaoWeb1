<?php 
require_once ('connect.php');

$nome      = $_POST['pessoa'] ?? '';
$sobrenome = $_POST['sobrenome'] ?? '';
$email     = $_POST['email'] ?? '';
$senha     = $_POST['senha'] ?? '';
$cidade    = $_POST['cidade'] ?? '';
$estado    = $_POST['estado'] ?? '';

$aDados = [
    $nome,
    $sobrenome,
    $senha,
    $email,
    $cidade,
    $estado
];


$result = pg_query_params($condb,
                          "INSERT INTO TBPESSOA (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO)
                          VALUES ($1, $2, $3, $4, $5, $6 )",
                          $aDados);
                          if ($result) {
                            echo "<br> deu certo";
                          };

if ($result) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro.";
}                          



