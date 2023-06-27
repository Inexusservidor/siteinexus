<?php
// processar_formulario.php

// Dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

// Aqui você insere o código de conexão ao banco de dados e a instrução SQL de inserção

// Verifique se os dados foram enviados antes de inserir no banco de dados
if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($mensagem)) {
    // Insira o código de inserção no banco de dados aqui
    // ...

    // Exiba uma mensagem de sucesso
    echo 'Dados inseridos com sucesso!';
} else {
    // Exiba uma mensagem de erro caso algum campo esteja vazio
    echo 'Todos os campos devem ser preenchidos!';
}
?>