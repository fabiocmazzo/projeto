<?php
   require_once '../includes/config.php';
   
   $idCoordenador   =  $_REQUEST['idCoordenador'];
   $nmCoordenador   =  $_REQUEST['nmCoordenador'];   
   $docCoordenador  =  $_REQUEST['docCoordenador'];      
   
   if(empty($idCoordenador)) {
        $sql = 'insert into coordenador(nmCoordenador, docCoordenador) values ("' .$nmCoordenador . '","' .$docCoordenador . '")';
    } else {
        $sql =  'update coordenador set nmCoordenador = "' . $nmCoordenador . '", docCoordenador = "' . $docCoordenador . '" where idCoordenador = ' . $idCoordenador; 
    } 
   
   
    $db->query($sql);
	
    