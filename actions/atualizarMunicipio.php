<?php
   require_once '../includes/config.php';
   
   $idMunicipio =  $_REQUEST['idMunicipio'];
   $nmMunicipio =  $_REQUEST['nmMunicipio'];   
   $cdIBGE =       $_REQUEST['cdIBGE'];      
   
   if(empty($idMunicipio)) {
        $sql = 'insert into municipio(nmMunicipio, cdIBGE) values ("' .$nmMunicipio . '","' .$cdIBGE . '")';
    } else {
        $sql =  'update municipio set nmMunicipio = "' . $nmMunicipio . '", cdIBGE = "' . $cdIBGE . '" where idMunicipio = ' . $idMunicipio; 
    } 
   
   
    $db->query($sql);
	
    