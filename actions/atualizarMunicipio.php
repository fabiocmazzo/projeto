<?php
   require_once '../includes/config.php';
   
   $idMunicipio =  $_REQUEST['idMunicipio'];
   $nmMunicipio =  $_REQUEST['nmMunicipio'];   
   $cdIBGE =       $_REQUEST['cdIBGE'];      
   $UF =           $_REQUEST['UF'];
   
   if(empty($idMunicipio)) {
        $sql = 'insert into municipio(nmMunicipio, cdIBGE, UF) values ("' .$nmMunicipio . '","' .$cdIBGE . '","' .$UF . '")';
    } else {
        $sql =  'update municipio set nmMunicipio = "' . $nmMunicipio . '", cdIBGE = "' . $cdIBGE . '", UF = "' . $UF . '" where idMunicipio = ' . $idMunicipio; 
    } 
   
   
    $db->query($sql);
	
    