<?php
   require_once '../includes/config.php';
   
   $idPesquisador   =  $_REQUEST['idPesquisador'];
   $pesquisadorSubLotes   =  $_REQUEST['pesquisadorSubLotes'];   
   
   if(!empty($idPesquisador)) {
  
     $sql = 'delete from pesquisador_sublote where idPesquisador = ' . $idPesquisador . ' and idLote is not null and idSubLote is not null';
     $db->query($sql); 
     
     foreach($pesquisadorSubLotes as $subLote) {
        
        $idLote = fun_retorna_sublote_lote($subLote);
        $idComunidade = fun_retorna_comunidade_lote($idLote);
        $sql = 'insert into pesquisador_sublote(idPesquisador, idComunidade, idLote, idSubLote) values (' .$idPesquisador . ',' . $idComunidade . ',' . $idLote . ',' . $subLote . ')';
        $db->query($sql); 
        
    }
   }
	
    