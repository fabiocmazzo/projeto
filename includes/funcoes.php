<?php

    function fun_retorna_municipio($idComunidade) {
        
        global $db;
        $sql = 'select idMunicipio from comunidade where idComunidade = ' . $idComunidade;
        $result = $db->query($sql);
	    $row = $result->fetch_assoc();
        
        return $row['idMunicipio'];
        
               
    }
    
    
     function fun_retorna_comunidade_lote($idLote) {
        
        global $db;
        $sql = 'select idComunidade from lote where idLote = ' . $idLote;
        $result = $db->query($sql);
	    $row = $result->fetch_assoc();
        
        return $row['idComunidade'];
        
               
    }
    
    
      function fun_retorna_sublote_lote($idSubLote) {
        
        global $db;
        $sql = 'select idLote from subLote where idSubLote = ' . $idSubLote;
        $result = $db->query($sql);
	    $row = $result->fetch_assoc();
        
        return $row['idLote'];
        
               
    }