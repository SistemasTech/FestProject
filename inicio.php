<?php

session_start();
include_once 'app_conect.php';

try {
    $db = testdb_connect();

    $nome = preg_replace('/[^[:alpha:]_]/', '', $_POST['user']);

    $senha = $_POST['password'];

    $utilizador = $db->query("select * from usuario where usuario='$nome' and password='$senha'");

    foreach ($utilizador as $utilizadores) {

        $idUtilizador = $utilizadores['codigoUsuario'];
        $idTipoUtilizador = $utilizadores['codigoTipoUtilizador'];
    }

    if ($idUtilizador > 0) {
        $_SESSION['idUtilizador'] = $idUtilizador;
        $_SESSION['idTipoUtilizador'] = $idTipoUtilizador;
    } else {
        header("Location: login.php?error=1");
    }
    
    if ($idTipoUtilizador == 1) {

        header("Location: index.php");
    }

    if ($idTipoUtilizador == 2) {

        header("Location: login.php?error=2");
    }
/*    if ($idTipoUtilizador == 1) {

        header("Location: index.php");
    }
    if ($idTipoUtilizador == 2) {

        header("Location: indexDocente.php");
    }

    if ($idTipoUtilizador == 3) {

        header("Location: indexPortal.php");
    }
 * 
 */
} catch (Exception $ex) {
    echo 'Erro: contacte o administrador do sistema!';
}
?>

