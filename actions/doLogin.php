<?php
   require_once '../includes/config.php';
   
   $username =  $_REQUEST['username'];
   $password =  $_REQUEST['password'];
   
   
    $sql = 'select * from usuarios where username = "'. $username . '" and password = "' . $password . '" and status = "A"';
    $result = $db->query($sql);
	$row = $result->fetch_assoc();

    if (!empty($row)) {
        $_SESSION['usuarioLogado'] = $row['username'];
        $_SESSION['nomeUsuario'] = $row['nome'];
        $_SESSION['isAdmin'] = $row['isadmin'];
        $_SESSION['logado'] = true;
        echo 'sucesso';
    } else {
       
        $_SESSION['usuarioLogado'] = '';
        $_SESSION['logado'] = false;
        $_SESSION['nomeUsuario'] = ''; 
        $_SESSION['isAdmin'] = '';
       echo 'Usuario ou senha inválidos';
       
    }
