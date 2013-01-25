<?php
   require_once '../includes/config.php';
   
   $username        =  $_REQUEST['username'];
   $nome            =  $_REQUEST['nome'];   
   $isadmin         =  $_REQUEST['isAdmin'];    
   $password        =  $_REQUEST['password'];
   $status          =  $_REQUEST['status']; 
   $isAnalista      =  $_REQUEST['isAnalista'];
    
  
    $sqlCheca = 'select * from usuarios where username = "' . $username . '"';
    $resultCheca  = $db->query($sqlCheca);
    $rowCheca = $resultCheca->fetch_assoc();
    
    
   if(empty($rowCheca)) {
        $sql = 'insert into usuarios(username, nome, password, isadmin, isAnalista, status) values ("' .$username . '","' .$nome . '","' . $password . '","' .$isadmin . '","' .$isAnalista . '","' .$status . '")';
    } else {
        $sql = 'update usuarios set nome = "' . $nome . '", password = "' . $password . '", isadmin = "' . $isadmin . '",isAnalista = "' . $isAnalista . '",status = "' . $status . '" where username = "' . $username . '"'; 
    } 
   
   $db->query($sql);
	
    