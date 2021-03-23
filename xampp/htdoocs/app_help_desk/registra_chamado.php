<?php
    session_start();
   /*  echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */

    //monstagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // implode('#', $_POST)
    //escrevendo o texto
    $texto = $_SESSION['id'].'#'.$titulo.'#'. $categoria.'#'.$descricao.PHP_EOL;

    /* fopen nome do arquivo,  parametro*/
    //abertura do arquivo
    $arquivo = fopen('../../app_help_desk/RegistroDeChamados.hd', 'a'); /* a - escrita */

    //dois parametros referencia do arquivo, o que será escrito
    fwrite($arquivo, $texto);

    //sempre deve-se fechar o arquivo aberto
    fclose($arquivo);

    //echo $texto;
    header('Location: abrir_chamado.php'); //poder-se-iá criar uma outra página com o informe que o chamado foi criado.
?>