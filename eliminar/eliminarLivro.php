<?php

session_start();

function __autoload($nome_class) {
    require_once '../classes/' . $nome_class . '.class.php';
}

include_once '../app_conect.php';

$db = testdb_connect();

if (isset($_GET['codigoLivro'])) {
    $codigoLivro = $_GET['codigoLivro'];
    $livro = new LivroModel();
    $livro = LivroModel::findById($db, $codigoLivro);
    if (!empty($livro)) {
        $livro->deleteFromDatabase($db);

        header("Location: ../formLivro.php");
    }
}
?>

