<?php
   require_once '../includes/config.php';
   
   $idMunicipio =  $_REQUEST['idMunicipio'];
   $nmMunicipio =  $_REQUEST['nmMunicipio'];   
   $cdIBGE =       $_REQUEST['cdIBGE'];      
   $UF =           $_REQUEST['UF'];
   $idLote =       $_REQUEST['idLote'];
   
   if(empty($idMunicipio)) {
        $sql = 'insert into municipio(nmMunicipio, cdIBGE, UF, idLote) values ("' .$nmMunicipio . '","' .$cdIBGE . '","' .$UF . '",' . $idLote . ')';
    } else {
        $sql =  'update municipio set nmMunicipio = "' . $nmMunicipio . '", cdIBGE = "' . $cdIBGE . '", UF = "' . $UF . '", idLote = ' . $idLote . ' where idMunicipio = ' . $idMunicipio; 
    } 
   
   
    $db->query($sql);
	
    