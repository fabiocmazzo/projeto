<?php
   require_once '../includes/config.php';
   
   $idPesquisador   =  $_REQUEST['idPesquisador'];
   $pesquisadorComunidades   =  $_REQUEST['pesquisadorComunidades'];   
   
   if(!empty($idPesquisador)) {
  
     $sql = 'delete from pesquisador_comunidade where idPesquisador = ' . $idPesquisador;
     $db->query($sql); 
     
     foreach($pesquisadorComunidades as $comunidade) {
        $sql = 'insert into pesquisador_comunidade(idPesquisador, idComunidade) values (' .$idPesquisador . ',' . $comunidade . ')';
        $db->query($sql);
        
    }
   }
	
    