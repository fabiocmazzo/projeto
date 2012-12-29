<?php
   require_once '../includes/config.php';
   
   $idComunidade =  $_REQUEST['id'];
       
   
    $sql = 'delete from comunidade where idComunidade = '. $idComunidade;
    $db->query($sql);
	
    