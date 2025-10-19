<?php

$arquivo = __DIR__ . '/pessoas.json';

if (!file_exists($arquivo)) {
    die("Arquivo pessoas.json não encontrado!");
}

$nome      = isset($_POST['pessoa']) ? $_POST['pessoa'] : '';
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
$email     = isset($_POST['email']) ? $_POST['email'] : '';
$senha     = isset($_POST['senha']) ? $_POST['senha'] : '';
$cidade    = isset($_POST['cidade']) ? $_POST['cidade'] : '';
$estado    = isset($_POST['estado']) ? $_POST['estado'] : '';


$pessoa = [
    'nome'      => $nome,
    'sobrenome' => $sobrenome,
    'email'     => $email,
    'senha'     => $senha,
    'cidade'    => $cidade,
    'estado'    => $estado
];

$dados = json_decode(file_get_contents($arquivo), true);


if (!is_array($dados)) {
    die("Erro ao ler o arquivo JSON.");
}


$dados[] = $pessoa;


file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "Pessoa adicionada com sucesso!";





