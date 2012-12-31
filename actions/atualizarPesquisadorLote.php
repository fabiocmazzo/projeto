<?php
   require_once '../includes/config.php';
   
   $idPesquisador   =  $_REQUEST['idPesquisador'];
   $pesquisadorLotes   =  $_REQUEST['pesquisadorLotes'];   
   
   if(!empty($idPesquisador)) {
  
     $sql = 'delete from pesquisador_sublote where idPesquisador = ' . $idPesquisador . ' and idLote is not null and idSubLote is null';
     $db->query($sql); 
     
     foreach($pesquisadorLotes as $lote) {
        
        $idComunidade = fun_retorna_comunidade_lote($lote);
        $sql = 'insert into pesquisador_sublote(idPesquisador, idComunidade, idLote) values (' .$idPesquisador . ',' . $idComunidade . ',' . $lote . ')';
        $db->query($sql); 
        
    }
   }
	
    