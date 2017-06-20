<?php

define('CHARSET', 'UTF-8');
ini_set('default_charset', CHARSET);
ini_set('mbstring.http_output', CHARSET);
ini_set('mbstring.internal_encoding', CHARSET);
header('Content-Type: text/html; charset=' . CHARSET);

session_start();

function __autoload($nome_class) {
    require_once '../classes/' . $nome_class . '.class.php';
}

include_once '../app_conect.php';


// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = '../imagem/imagemLivro';

// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 100 * pow(1024, 2); // 2Mb
// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'jpeg', 'png', 'gif');

// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;

// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
    die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
    exit; // Para a execução do script
}

// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
// Faz a verificação da extensão do arquivo
if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
    echo "O arquivo enviado é muito grande, envie arquivos de até 80Mb.";
}

// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
    if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
        $nome_final = time();
    } else {
// Mantém o nome original do arquivo
        $nome_final = $_FILES['arquivo']['name'];
    }

// Depois verifica se é possível mover o arquivo para a pasta escolhida
    //  if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . utf8_encode(trim($nome_final)))) {
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
        echo "Upload efetuado com sucesso!";
        echo $nome_final;
        echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';



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
    }
}
?>