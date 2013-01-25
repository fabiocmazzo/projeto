<?php
 require_once 'includes/connectMongo.php';
 require_once 'includes/config.php';
 require_once 'header.php';
 
 
 /* Vou conectar com a collections familias */
	 try { 
	 	$familias = $dbMongo->familias;
	 	
  	 } catch (Exception $e) {
	 	$sql = 'insert into log(error_msg) values ("erro de conversao")';
	 	$db->query($sql);
	 }
	 
	 $query = array("responsavel.tipopesquisa" => "familia");
	 $questionarios = $familias->find($query);
	 
 ?>
 
    
 <div class="main">
  		
          
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
         
          

        </div>
        
      
    <!--Table Styling-->
        <div class="grid-1">
           <div class="title-grid">Pesquisas Recebidas</div>
           <div class="content-gird">
            	<table class="display" id="example">
                <thead>
                    <tr>
                     
                        <th class="th_date">Data</th>
                        <th class="th_status">Entrevistador</th>
                        <th class="th_date">Comunidade</th>
                        <th class="th_id">Abrir</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                       foreach ($questionarios as $questionario) { ?>
			

                    <tr class="item">
                       <td><span class="published"><?=$questionario['responsavel']['datapesquisa']?></span></td>
                        <td><?=$questionario['responsavel']['nomeresponsavel']?></td>
                        <td><?=$questionario['principal']['comunidade']?></td>
                        <td class="action"><a target="_blank" href="printQuestionario.php?id=<?=$questionario['_id']?>&tipoPesquisa=<?=$questionario['responsavel']['tipopesquisa']?>"><img src="images/arrow.png" alt="abrir"></a></td>
                    </tr>
                    
                    <?php } ?>
              </table>
    		<div class="clear"> </div>
            </div>
           </div>

   </div><!-- END MAIN-->
   
   <?php
     require_once 'barralateral.php';
     require_once 'footer.php';
     