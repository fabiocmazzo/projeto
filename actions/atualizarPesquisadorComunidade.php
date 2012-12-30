<?php
   require_once '../includes/config.php';
   
   $idPesquisador   =  $_REQUEST['idPesquisador'];
   $pesquisadorComunidades   =  $_REQUEST['pesquisadorComunidades'];   
   
   if(!empty($idCoordenador)) {
  
     $sql = 'delete from pesquisador_sublote where idPesquisador = ' . $idPesquisador . ' and idLote is null and idSubLote is null';
     $db->query($sql); 
     
     foreach($pesquisadorComunidades as $comunidade) {
        $sql = 'insert into pesquisador_sublote(idPesquisador, idComunidade) values (' .$idPesquisador . ',' . $comunidade . ')';
        $db->query($sql); 
    }
   }
	
    