<?php
   /*  session_start(); /* sempre que trabalhar com sessão 

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';


    //remover indices do array de sessão
    //unset($_SESSION[']);

    unser($_SESSION['x']); //para remover o índice apenas se existir

    //destrutir a variável de sessão
    //sesson_destroy  --> na proxima requisição não existirá mais
    session_destroy(); //será destruída
    //forçar um redirecionamento */

    session_destroy();
    header('Location: index.php');

?>