<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
   <script type="text/javascript">
      
    function deleteUsuario(p_id) {
   	     
         if(confirm("Tem certeza que deseja apagar o usuario?")) {
            var action = '/actions/deleteUsuario.php';
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
        
        $sql = 'SELECT username, nome, case isadmin when "S" then "Sim" else "Não" end as admin FROM usuarios';
        $result = $db->query($sql);
	   
        
        ?>

    <!--Table Styling-->
        <div class="grid-1">
           <div class="title-grid">Usuários</div>
           <div class="content-gird">
            	<table class="display" id="example">
                <thead>
                    <tr>
                     
                        <th class="th_id">Usuário</th>
                        <th class="th_status">Nome</th>
                        <th class="th_date">Administrador</th>
                        <th class="th_chexbox"> </th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                       while ($row = $result->fetch_assoc()) { ?>
			

                    <tr class="item">
                        <td class="subject"><a href="addUsuario.php?id=<?=$row['username']?>"><?=$row['username']?></a></td>
                        <td><span class="published"><?=$row['nome']?></span></td>
                        <td><?=$row['admin']?></td>
                        <td class="action"><a href="#"><img onclick="deleteUsuario('<?=$row['username']?>');" src="images/del.png" alt="delete"></a></td>
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
     