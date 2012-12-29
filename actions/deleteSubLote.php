<?php
   require_once '../includes/config.php';
   
   $idSubLote =  $_REQUEST['id'];
       
   
    $sql = 'delete from subLote where idSubLote = '. $idSubLote;
    $db->query($sql);
	
    