<?php header("Content-type:text/xml");
    
    require_once 'includes/configxml.php';
    
    
    
     if(isset($_REQUEST['id'])) {
                $idPesquisador = $_REQUEST['id'];
                $sql = 'select p.idPesquisador,
                               s.idSubLote,
                               s.idLote,
                               s.idComunidade,
                               p.isFamilia,
                               p.isComunidade,
                               p.nmPesquisador,
                               (select nmComunidade from comunidade where idComunidade = s.idComunidade) nmComunidade,
                               (select nmLote from lote where idLote = s.idLote) nmLote,
                               (select nmSubLote from subLote where idSubLote = s.idSubLote) nmSubLote
                          from pesquisador p, 
                               pesquisador_sublote s
                         where p.idPesquisador = s.idPesquisador
                           and p.idPesquisador = ' . $idPesquisador;
                $result = $db->query($sql);
                
                
    
     
 ?> 
<forms>
   <?php while($row = $result->fetch_assoc()) { ?>
   <?php if($row['isFamilia'] == 'S') { ?>
    <form url="http://www.cadastrofamilias.com.br/xml/familia.php?idPesquisador=<?=$row['idPesquisador']?>&amp;idLote=<?=$row['idLote']?>&amp;idSubLote=<?=$row['idSubLote']?>&amp;idComunidade=<?=$row['idComunidade']?>">Pesquisa Familia - <?=$row['nmComunidade']?><?php if($row['nmLote'] != "") { ?> - <?php } ?><?=$row['nmLote']?><?php if($row['nmSubLote'] != "") { ?> - <?php } ?><?=$row['nmSubLote']?></form> 
   <?php }
    if($row['isComunidade'] == 'S') { ?>
    <form url="http://www.cadastrofamilias.com.br/xml/comunidade.php?idPesquisador=<?=$row['idPesquisador']?>&amp;idComunidade=<?=$row['idComunidade']?>">Pesquisa Comunidade - <?=$row['nmComunidade']?></form> 
   <?php }
       } ?>
   <form url="http://www.cadastrofamilias.com.br/xml/acaosocial.php?idPesquisador=<?=$idPesquisador?>">Pesquisa Ação Social</form>       
</forms><?php } ?>