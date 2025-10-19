<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

$_SESSION["ultima"] = date("d/m/Y H:i:s");
$tempo = time() - $_SESSION["tempo_inicio"];

if ($tempo >= 200) {
    session_destroy();
    header("Location: login.php");
    exit();
}
if (!isset($_COOKIE['login']) && !isset($_COOKIE['senha'])) {
    setcookie("login",$_SESSION['login'], time() + (60*5), "/" );
    setcookie("senha",$_SESSION['senha'], time() + (60*5), "/" );
}
?>

<p>Login: <?php echo $_SESSION["login"]; ?></p>
<p>Senha: <?php echo $_SESSION["senha"]; ?></p>
<p>Data/hora início da sessão: <?php echo $_SESSION["inicio"]; ?></p>
<p>Data/hora da última requisição: <?php echo $_SESSION["ultima"]; ?></p>
<p>Tempo de sessão: <?php echo $tempo; ?> segundos</p>

<a href="logout.php">Encerrar sessão</a>
