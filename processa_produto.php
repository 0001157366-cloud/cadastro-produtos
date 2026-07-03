<?php

$nome = $_POST['nome'] ?? '';
$preco = $_POST['preco'] ?? '';
$categoria = $_POST['categoria'] ?? '';
$descricao = $_POST['descricao'] ?? '';

if (empty($nome) || empty($preco) || empty($categoria) || empty($descricao)) {

    echo "<h2>Erro!</h2>";
    echo "<p>Preencha todos os campos obrigatórios.</p>";

} else {

    echo "<h2>Cadastro recebido com sucesso!</h2>";

    echo "<hr>";

    echo "<strong>Nome:</strong> $nome <br>";
    echo "<strong>Preço:</strong> R$ $preco <br>";
    echo "<strong>Categoria:</strong> $categoria <br>";
    echo "<strong>Descrição:</strong> $descricao <br>";

}

?>