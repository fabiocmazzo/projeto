<?php
   require_once '../includes/config.php';
   
   $idCoordenador =  $_REQUEST['id'];
       
   
    $sql = 'delete from coordenador where idCoordenador = '. $idCoordenador;
    $db->query($sql);
	
    