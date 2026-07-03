<?php

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$emailCorreto = "admin@teste.com";
$senhaCorreta = "123456";

if (empty($email) || empty($senha)) {

    echo "<h2>Erro no Login</h2>";
    echo "<p>Preencha o e-mail e a senha.</p>";

} elseif ($email == $emailCorreto && $senha == $senhaCorreta) {

    echo "<h2>Login realizado com sucesso!</h2>";
    echo "<p>Bem-vindo ao Sistema de Cadastro de Produtos.</p>";

} else {

    echo "<h2>Acesso Negado</h2>";
    echo "<p>E-mail ou senha incorretos.</p>";

}

?>