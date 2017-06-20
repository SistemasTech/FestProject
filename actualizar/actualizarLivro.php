<?php

session_start();

function __autoload($nome_class) {
    require_once '../classes/' . $nome_class . '.class.php';
}

include_once '../app_conect.php';

if (isset($_GET['codigoLivro'])) 
    {
    $db = testdb_connect();
    $codigoLivro = $_GET['codigoLivro']; 
    
    $livro = new LivroModel();
    $livro = LivroModel::findById($db, $_GET['codigoLivro']);
   
    if (!empty($livro)) {
        
        $tituloLivro = $_POST['tituloLivro'];
        $edicao = $_POST['edicao'];
        $anoLancamento = $_POST['anoLancamento'];
        $quantidade = $_POST['quantidade'];
        
        $codigoCategoria = $_POST['codigoCategoria'];
        $codigoAutor = $_POST['codigoAutor'];
        $capa = $_POST['capa'];
             
        $livro->setTituloLivro($_POST['tituloLivro']);
        $livro->setEdicao($_POST['edicao']);
        $livro->setAnolancamento($_POST['anoLancamento']);
        $livro->setQuantidade($_POST['quantidade']);
        $livro->setCodigoCategoria($_POST['codigoCategoria']);
        $livro->setCodigoAutor($_POST['codigoAutor']);
        $livro->setCapa($_POST['capa']);
        
        
        $livro->updateToDatabase($db);
   
        
        header("Location: ../formLivro.php");
        //  header('Location: index.php?' . md5('pagina utilizador'));
        exit();
    } else {
        echo 'empty';
    }
} else {
    echo 'isset';
}
?>