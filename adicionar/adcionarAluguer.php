<?php

session_start();

function __autoload($nome_class) {
    require_once '../classes/' . $nome_class . '.class.php';
}

include_once '../app_conect.php';

if (isset($_POST['salvar'])) {
    try {
        $db = testdb_connect();
		$aluguer = new Aluguer();
		$codigoLivro = $_POST['codigoAutor'];
		$codigoCliente = $_POST['codigoCategoria'];
		$codigoUtilizador = $_POST['codigoAutor'];
		
		$dataAluguer = date('Y-m-d');
		$dataDevolucao = date('Y-m-d');

        $aluguer->setCodigoLivro($codigoLivro);
        $aluguer->setCodigoCliente($codigoCliente);
		$aluguer->setCodigoUtilizador($codigoUtilizador);
		$aluguer->setDataAluguer($dataAluguer);
		$aluguer->setDataDevolucao($dataDevolucao);

        $livro->insertIntoDatabase($db);

        header("Location: ../formAluguer.php");
        
    } catch (Exception $e) {
        echo 'Erro: contacte o administrador do sistema!';
        //header("Location: config.php?item=".md5('inscricao')."&ndi=".md5($_POST['ndi'])."&s=".md5('nok2'));
    }
} 
?>