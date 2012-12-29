<?php
   require_once '../includes/config.php';
   
   $idLote =  $_REQUEST['idLote'];
   $nmSubLote =  $_REQUEST['nmSubLote'];   
   $idSubLote =  $_REQUEST['idSubLote'];      
   
   if(empty($idSubLote)) {
        $sql = 'insert into subLote(nmSubLote, idLote) values ("' .$nmSubLote . '",' .$idLote . ')';
    } else {
        $sql =  'update subLote set nmSubLote = "' . $nmSubLote . '", idLote = ' . $idLote . ' where idSubLote = ' . $idSubLote; 
    } 
   
  
   
   $db->query($sql);
	
    