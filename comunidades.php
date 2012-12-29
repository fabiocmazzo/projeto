<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
   <script type="text/javascript">
      
    function deleteComunidade(p_id) {
   	     
         if(confirm("Tem certeza que deseja apagar a Comunidade? Isso irá apagar todos os registros filhos. (Lotes, etc)")) {
            var action = '/actions/deleteComunidade.php';
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
        
        $sql = 'SELECT idComunidade, nmComunidade, (select nmMunicipio from municipio where idMunicipio = comunidade.idMunicipio) as nmMunicipio FROM comunidade';
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
                        <th class="th_date">Município</th>               
                        <th class="th_chexbox"> </th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                       while ($row = $result->fetch_assoc()) { ?>
			

                    <tr class="item">
                        <td class="subject"><a href="addComunidade.php?id=<?=$row['idComunidade']?>"><?=$row['idComunidade']?></a></td>
                        <td><span class="published"><?=$row['nmComunidade']?></span></td>
                        <td><?=$row['nmMunicipio']?></td>
                        <td class="action"><a href="#"><img onclick="deleteComunidade(<?=$row['idComunidade']?>);" src="images/del.png" alt="delete"></a></td>
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
     