<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
   <script type="text/javascript">
      
    function deletePesquisador(p_id) {
   	     
         if(confirm("Tem certeza que deseja apagar o Pesquisador? Isso irá apagar todos os registros filhos.")) {
            var action = '/actions/deletePesquisador.php';
            var form_data = {
			           id: p_id
	              }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
				           
                          location.reload();  
                                             
                           
                       	}
	                  	});
         }
        }              
    
   </script>
 
 <div class="main">
  		
          
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
         
          

        </div>
        
        <?php
        
        $sql = 'SELECT idPesquisador, nmPesquisador, (select nmCoordenador from coordenador where idCoordenador = pesquisador.idCoordenador) as nmCoordenador, case tipo when "A" then "Assistente Social" when "T" then "Técnico de Campo" end as tipo, case isFamilia when "S" then "Sim" end as isFamilia, case isComunidade when "S" then "Sim" end as isComunidade FROM pesquisador';
        $result = $db->query($sql);
	   
        
        ?>

    <!--Table Styling-->
        <div class="grid-1">
           <div class="title-grid">Comunidades</div>
           <div class="content-gird">
            	<table class="display" id="example">
                <thead>
                    <tr>
                     
                        <th class="th_id">Código</th>
                        <th class="th_status">Nome</th>
                        <th class="th_date">Coordenador</th>
                        <th class="th_date">Tipo</th>
                        <th class="th_date">Família</th>
                        <th class="th_date">Comunidade</th>                                     
                        <th class="th_chexbox"> </th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                       while ($row = $result->fetch_assoc()) { ?>
			

                    <tr class="item">
                        <td class="subject"><a href="addPesquisador.php?id=<?=$row['idPesquisador']?>"><?=$row['idPesquisador']?></a></td>
                        <td><span class="published"><?=$row['nmPesquisador']?></span></td>
                        <td><?=$row['nmCoordenador']?></td>
                        <td><?=$row['tipo']?></td>
                        <td><?=$row['isFamilia']?></td>
                        <td><?=$row['isComunidade']?></td>                           
                        <td class="action"><a href="#"><img onclick="deletePesquisador(<?=$row['idPesquisador']?>);" src="images/del.png" alt="delete"></a></td>
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
     