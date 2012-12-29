<?php
   require_once '../includes/config.php';
   
   $idMunicipio =  $_REQUEST['idMunicipio'];
   $nmComunidade =  $_REQUEST['nmComunidade'];   
   $idComunidade =  $_REQUEST['idComunidade'];      
   
   if(empty($idComunidade)) {
        $sql = 'insert into comunidade(nmComunidade, idMunicipio) values ("' .$nmComunidade . '",' .$idMunicipio . ')';
    } else {
        $sql =  'update comunidade set nmComunidade = "' . $nmComunidade . '", idMunicipio = ' . $idMunicipio . ' where idComunidade = ' . $idComunidade; 
    } 
   
   
    $db->query($sql);
	
    