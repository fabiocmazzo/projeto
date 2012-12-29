<?php
   require_once '../includes/config.php';
   
   $idLote =  $_REQUEST['id'];
       
   
    $sql = 'delete from lote where idLote = '. $idLote;
    $db->query($sql);
	
    