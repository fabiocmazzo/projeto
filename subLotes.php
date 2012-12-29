<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
   <script type="text/javascript">
      
    function deleteSubLote(p_id) {
   	     
         if(confirm("Tem certeza que deseja apagar o subLote? Isso irá apagar todos os registros filhos.")) {
            var action = '/actions/deleteSubLote.php';
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
        
        $sql = 'SELECT idSubLote, nmSubLote, (select nmLote from lote where idLote = subLote.idLote) as nmLote, (select nmComunidade from comunidade, lote where lote.idLote = subLote.idLote and comunidade.idComunidade = lote.idComunidade) as nmComunidade FROM subLote';
        $result = $db->query($sql);
	   
        
        ?>

    <!--Table Styling-->
        <div class="grid-1">
           <div class="title-grid">SubLotes</div>
           <div class="content-gird">
            	<table class="display" id="example">
                <thead>
                    <tr>
                     
                        <th class="th_id">Código</th>
                        <th class="th_status">Nome</th>
                        <th class="th_date">Lote</th>
                        <th class="th_date">Comunidade</th>               
                        <th class="th_chexbox"> </th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                       while ($row = $result->fetch_assoc()) { ?>
			

                    <tr class="item">
                        <td class="subject"><a href="addSubLote.php?id=<?=$row['idSubLote']?>"><?=$row['idSubLote']?></a></td>
                        <td><span class="published"><?=$row['nmSubLote']?></span></td>
                        <td><?=$row['nmLote']?></td>
                        <td><?=$row['nmComunidade']?></td>
                        <td class="action"><a href="#"><img onclick="deleteSubLote(<?=$row['idSubLote']?>);" src="images/del.png" alt="delete"></a></td>
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
     