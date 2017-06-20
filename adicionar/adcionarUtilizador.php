<?php

session_start();

function __autoload($nome_class) {
    require_once '../classes/' . $nome_class . '.class.php';
}

include_once '../app_conect.php';

if (isset($_POST['salvar'])) {
    try {
        $db = testdb_connect();
        $utilizador = new Utilizador();
        $nomeUtilizador = $_POST['nomeUtilizador'];
        $password = base64_encode($_POST['password']);
		$funcionario = $_POST['nomeFuncionario'];
        $tipoUtilizador = 1;

        $utilizador->setNomeUtilizador($nomeUtilizador);
        $utilizador->setSenha($senha);
		$utilizador->setNomeFuncionario($nomeFuncionario);
        $utilizador->setCodigoTipoUtilizador($tipoUtilizador);

        $utilizador->insertIntoDatabase($db);

        header("Location: ../formUsuario.php");
        
    } catch (Exception $e) {
        echo 'Erro: contacte o administrador do sistema!';
        //header("Location: config.php?item=".md5('inscricao')."&ndi=".md5($_POST['ndi'])."&s=".md5('nok2'));
    }
} 
?>