<?php
    session_start();

    //variavel verifica o estado da autentificação
    $usuario_autentificado = false;
    $usuario_id = null; 
    $usuario_perfil_id = null;

    $perfis = array(1 => 'administrativo', 2 => 'usuario');

    //usuarios do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2)
    );


    foreach($usuarios_app as $user) 
    {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) 
        {
            $usuario_autentificado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    
    if ($usuario_autentificado)
    {
        echo 'Usuário autentificado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }
    else 
    {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

/* para garantir a seguranaça dos dados no backend
    retira-se como valida_login.php e registrodechamados.hd do diretório publico e aloca-os a uma pasta privada no servido, para evitar que usuários avançados possam baixar o arquivo valida_login ou visualizar os chamados do clientes e administrador

    no xampp criasse uma pasta app_help_desk em uma pasta superior
*/
?>     
    


