<?php
   require_once '../includes/config.php';
   
   $idCoordenador   =  $_REQUEST['idCoordenador'];
   $coordenadorMunicipios   =  $_REQUEST['coordenadorMunicipios'];   
   
   if(!empty($idCoordenador)) {
  
     $sql = 'delete from coordenador_comunidade where idCoordenador = ' . $idCoordenador . ' and idComunidade is null';
     $db->query($sql); 
     
    
     /* Se estiver adicionando um municipio que ele ja tem comunidade associada vou apaga-las */
     foreach($coordenadorMunicipios as $municipio) {
        $sql = 'delete from coordenador_comunidade where idCoordenador = ' . $idCoordenador . ' and idMunicipio = ' . $municipio;
        $db->query($sql); 
    }
     
     foreach($coordenadorMunicipios as $municipio) {
        $sql = 'insert into coordenador_comunidade(idCoordenador, idMunicipio) values (' .$idCoordenador . ',' .$municipio . ')';
        $db->query($sql); 
    }
   }
	
    