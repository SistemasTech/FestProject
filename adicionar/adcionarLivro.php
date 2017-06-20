<?php

session_start();

function __autoload($nome_class) {
    require_once '../classes/' . $nome_class . '.class.php';
}

include_once '../app_conect.php';

if (isset($_POST['salvar'])) {
    try {
        $db = testdb_connect();
        $livro = new LivroModel();

        $tituloLivro = $_POST['tituloLivro'];
        $edicao = $_POST['edicao'];
        $anoLancamento = $_POST['anoLancamento'];
        $quantidade = $_POST['quantidade'];
        
        $codigoCategoria = $_POST['codigoCategoria'];
        $codigoAutor = $_POST['codigoAutor'];
        $capa = $_POST['arquivo'];



        $livro->setTituloLivro($tituloLivro);
        $livro->setEdicao($edicao);
        $livro->setAnolancamento($anoLancamento);
        $livro->setQuantidade($quantidade);
        $livro->setCodigoAutor($codigoAutor);
        $livro->setCodigoCategoria($codigoCategoria);
        $livro->setCapa($capa);
        $livro->insertIntoDatabase($db);

        header("Location: ../formLivro.php");
    } catch (Exception $e) {
        echo 'Erro: contacte o administrador do sistema!';
        //header("Location: config.php?item=".md5('inscricao')."&ndi=".md5($_POST['ndi'])."&s=".md5('nok2'));
    }
}
?>