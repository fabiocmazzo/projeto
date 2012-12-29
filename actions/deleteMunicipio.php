<?php
   require_once '../includes/config.php';
   
   $idMunicipio =  $_REQUEST['id'];
       
   
    $sql = 'delete from municipio where idMunicipio = '. $idMunicipio;
    $db->query($sql);
	
    