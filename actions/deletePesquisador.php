<?php
   require_once '../includes/config.php';
   
   $idPesquisador =  $_REQUEST['id'];
       
   
    $sql = 'delete from pesquisador where idPesquisador = '. $idPesquisador;
    $db->query($sql);
	
    