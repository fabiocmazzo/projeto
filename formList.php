<?php header("Content-type:text/xml"); ?>
<?php
    
    require_once 'includes/configxml.php';
    
    $idPesquisador = $_REQUEST['id'];
    
     if(isset($_REQUEST['id'])) {
                $idPesquisador = $_REQUEST['id'];
                $sql = 'select * from pesquisador where idPesquisador = ' . $idPesquisador;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
    }
     
 ?> 
 <forms>
   <?php if($row['isFamilia'] == 'S') { ?>
    <form url="http://www.cadastrofamilias.com.br/xml/familia.php?idPesquisador=<?=$row['idPesquisador']?>">Pesquisa Familia - <?=$row['nmPesquisador']?></form> 
   <?php } ?>
</forms> 
      