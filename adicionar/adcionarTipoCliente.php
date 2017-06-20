<?php

session_start();

function __autoload($nome_class) {
    require_once '../classes/' . $nome_class . '.class.php';
}

include_once '../app_conect.php';

if (isset($_POST['salvar'])) {
    try {
        $db = testdb_connect();
		$tipoCliente = new TipoCliente();
		$tipoCliente = $_POST['tipoCliente'];

        $tipoCliente->setTipoCliente($tipoCliente);

        $tipoCliente->insertIntoDatabase($db);

        header("Location: ../formTipoCliente.php");
        
    } catch (Exception $e) {
        echo 'Erro: contacte o administrador do sistema!';
        //header("Location: config.php?item=".md5('inscricao')."&ndi=".md5($_POST['ndi'])."&s=".md5('nok2'));
    }
} 
?>