<?php
   require_once '../includes/config.php';
   
   $idLote =  $_REQUEST['idLote'];
   $nmLote =  $_REQUEST['nmLote'];   
      
   
   if(empty($idLote)) {
        $sql = 'insert into lote(nmLote) values ("' .$nmLote . '")';
    } else {
        $sql =  'update lote set nmLote = "' . $nmLote . '" where idLote = ' . $idLote; 
    } 
   
  
   
   $db->query($sql);
	
    