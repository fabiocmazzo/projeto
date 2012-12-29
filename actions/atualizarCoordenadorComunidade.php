<?php
   require_once '../includes/config.php';
   
   $idCoordenador   =  $_REQUEST['idCoordenador'];
   $coordenadorComunidades   =  $_REQUEST['coordenadorComunidades'];   
   
   if(!empty($idCoordenador)) {
  
     $sql = 'delete from coordenador_comunidade where idCoordenador = ' . $idCoordenador . ' and idComunidade is not null';
     $db->query($sql); 
     
     foreach($coordenadorComunidades as $comunidade) {
        $idMunicipio = fun_retorna_municipio($comunidade);
        $sql = 'insert into coordenador_comunidade(idCoordenador, idMunicipio, idComunidade) values (' .$idCoordenador . ',' . $idMunicipio . ',' . $comunidade . ')';
        $db->query($sql); 
    }
   }
	
    