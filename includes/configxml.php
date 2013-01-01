<?php

    require_once 'class.Db.php';
    
   
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
    
  /* Funções só depois da criação do objeto da base de dados */  
 
      
    
    
   
  
