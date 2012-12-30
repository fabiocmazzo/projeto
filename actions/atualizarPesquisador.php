<?php
   require_once '../includes/config.php';
   
   $idPesquisador   =  $_REQUEST['idPesquisador'];
   $nmPesquisador   =  $_REQUEST['nmPesquisador'];   
   $tipo            =  $_REQUEST['tipo'];    
   $isFamilia       =  $_REQUEST['isFamilia'];
   $isComunidade    =  $_REQUEST['isComunidade']; 
   $idCoordenador   =  $_REQUEST['idCoordenador'];
   $CPF   =  $_REQUEST['CPF'];
   
   if(empty($idPesquisador)) {
        $sql = 'insert into pesquisador(nmPesquisador, tipo, CPF, isFamilia, isComunidade, idCoordenador) values ("' .$nmPesquisador . '","' .$tipo . '",' . $CPF . ',"' .$isFamilia . '","' .$isComunidade . '","' .$idCoordenador . '")';
    } else {
        $sql = 'update pesquisador set nmPesquisador = "' . $nmPesquisador . '", tipo = "' . $tipo . '", CPF = ' . $CPF . ',isFamilia = "' . $isFamilia . '", isComunidade = "' . $isComunidade . '", idCoordenador = "' . $idCoordenador . '" where idPesquisador = ' . $idPesquisador; 
    } 
   
   
   $db->query($sql);
	
    