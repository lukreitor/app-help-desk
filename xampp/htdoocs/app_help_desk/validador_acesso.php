<?php
  session_start();

  //Verifica se o usuário pode visualizar a página
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM')
  {
    header('Location: index.php?login=erro2');
  }
?>      