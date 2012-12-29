<?php

    require_once 'class.Db.php';
    require_once 'funcoes.php';
   
    define('ENVIRONMENT','dev'); // Enquanto essa constante for dev exibirá todos os erros do banco de dados
    
    // Conectar com o banco de dados
	try 
	{
		$db = new Db('localhost', 'cadastro_familias', 'e8ap2epwde', 'cadastro_familia', 3306);
		$db->Execute('SET NAMES UTF8');
	}
	catch(ConnectException $exception) 
	{
		if (ENVIRONMENT == 'dev')
		{
			echo "Database Connection Error:<br />";
			printr($exception->getMessage());	
		}
	}
    
    
        
	
	
	session_start();
    
    $curdir = dirname($_SERVER['REQUEST_URI'])."/";
    
 if(basename($_SERVER['PHP_SELF'], ".php") != 'index' && $curdir != '/actions/') {
      if(!$_SESSION['logado']) {
        header('Location: index.php');
      }
      
     } 
      
    
    
   
  
