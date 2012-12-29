<?php

    function fun_retorna_municipio($idComunidade) {
        
        global $db;
        $sql = 'select idMunicipio from comunidade where idComunidade = ' . $idComunidade;
        $result = $db->query($sql);
	    $row = $result->fetch_assoc();
        
        return $row['idMunicipio'];
        
               
    }