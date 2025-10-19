<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if ($login == "admin" && $senha == "1234") {
        $_SESSION["login"] = $login;
        $_SESSION["senha"] = $senha;
        $_SESSION["inicio"] = date("d/m/Y H:i:s");
        $_SESSION["ultima"] = $_SESSION["inicio"];
        $_SESSION["tempo_inicio"] = time();

        header("Location: sessao.php");
    } else {
        echo "Login ou senha incorretos!";
    }
}
?>

<form method="post">
    Login: <input type="text" name="login" required><br>
    Senha: <input type="password" name="senha" required><br>
    <input type="submit" value="Entrar">
</form>
