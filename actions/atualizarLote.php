<?php
   require_once '../includes/config.php';
   
   $idLote =  $_REQUEST['idLote'];
   $nmLote =  $_REQUEST['nmLote'];   
   $idComunidade =  $_REQUEST['idComunidade'];      
   
   if(empty($idLote)) {
        $sql = 'insert into lote(nmLote, idComunidade) values ("' .$nmLote . '",' .$idComunidade . ')';
    } else {
        $sql =  'update lote set nmLote = "' . $nmLote . '", idComunidade = ' . $idComunidade . ' where idLote = ' . $idLote; 
    } 
   
  
   
   $db->query($sql);
	
    