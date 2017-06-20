<?php

session_start();

function __autoload($nome_class) {
    require_once '../classes/' . $nome_class . '.class.php';
}

include_once '../app_conect.php';

if (isset($_POST['salvar'])) {
    try {
        $db = testdb_connect();
        $cliente = new Cliente();

        $nome = $_POST['nomeCliente'];
        $telefone = $_POST['telefoneCliente'];
        $email = $_POST['emailCliente'];




        $cliente->setNome($nomeCliente);
        $cliente->setTelefone($telefoneCliente);
        $cliente->setEmail($emailCliente);
        ;

        $cliente->insertIntoDatabase($db);

        header("Location: ../cliente.php?clienteSalvo=1");
    } catch (Exception $e) {
        echo 'Erro: contacte o administrador do sistema!';
    }
}
?>
