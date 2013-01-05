<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
   <script type="text/javascript">
      
    function deleteLote(p_id) {
   	     
         if(confirm("Tem certeza que deseja apagar o Lote? Isso irá apagar todos os registros filhos. (Municípios, etc)")) {
            var action = '/actions/deleteLote.php';
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
        
        $sql = 'SELECT idLote, nmLote FROM lote';
        $result = $db->query($sql);
	   
        
        ?>

    <!--Table Styling-->
        <div class="grid-1">
           <div class="title-grid">Lotes</div>
           <div class="content-gird">
            	<table class="display" id="example">
                <thead>
                    <tr>
                     
                        <th class="th_id">Código</th>
                        <th class="th_status">Nome</th>
                        <th class="th_chexbox"> </th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                       while ($row = $result->fetch_assoc()) { ?>
			

                    <tr class="item">
                        <td class="subject"><a href="addLote.php?id=<?=$row['idLote']?>"><?=$row['idLote']?></a></td>
                        <td><span class="published"><?=$row['nmLote']?></span></td>
                        <td class="action"><a href="#"><img onclick="deleteLote(<?=$row['idLote']?>);" src="images/del.png" alt="delete"></a></td>
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
     