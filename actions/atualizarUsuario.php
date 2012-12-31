<?php
   require_once '../includes/config.php';
   
   $username        =  $_REQUEST['username'];
   $nome            =  $_REQUEST['nome'];   
   $isadmin         =  $_REQUEST['isAdmin'];    
   $password        =  $_REQUEST['password'];
   $status          =  $_REQUEST['status']; 
  
    $sqlCheca = 'select * from usuarios where username = "' . $username . '"';
    $resultCheca  = $db->query($sqlCheca);
    $rowCheca = $resultCheca->fetch_assoc();
    
    
   if(empty($rowCheca)) {
        $sql = 'insert into usuarios(username, nome, password, isadmin, status) values ("' .$username . '","' .$nome . '","' . $password . '","' .$isadmin . '","' .$status . '")';
    } else {
        $sql = 'update usuarios set nome = "' . $nome . '", password = "' . $password . '", isadmin = "' . $isadmin . '",status = "' . $status . '" where username = "' . $username . '"'; 
    } 
   
   $db->query($sql);
	
    