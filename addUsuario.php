<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
  <script type="text/javascript">
            
                   function gravar() {
                      if($("#customForm").validationEngine('validate')) {
                      	var action = '/actions/atualizarUsuario.php';
                        var form_data = {
			              username:      $("#username").val(),
			              nome:          $("#nome").val(),
                          password:      $("#password").val(),
                          isAdmin:       $("#isAdmin:checked").val(),
                          status:        $("#status:checked").val()
                          
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
			             
                             alert("Gravado com sucesso");
				             window.location = "usuarios.php";
				                               
                           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "usuarios.php";
                  }
                  
                  
    </script>
 
   <div class="main">
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
   </div>
        
        
         
        
        <?php
        
             if(isset($_REQUEST['id']) && $_SESSION['isAdmin'] == 'S') {
                $username = $_REQUEST['id'];
                $sql = 'select * from usuarios where username = "' . $username . '"';
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
             } ?>
        
        
        	<!--Form-->
        
        <div class="grid-1">
           <div class="title-grid">Cadastrar Usuário</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 
               <?php if(isset($username)) { ?>
                 <div class="elem">
                        <label>Usuário: </label>
                        <div class="indent">
                            <input type="hidden" id="username" name="username" value="<?=$row['username']?>"> <?=$row['username']?>
                        </div>
                 </div>
                <?php } else { ?>
                 <div class="elem">
                        <label>Usuário: </label>
                        <div class="indent">
                            <input type="text" id="username" name="username" maxlength="100" class="medium validate[required] text-input">
                        </div>
                 </div>
                 <?php } ?>
               
                 <div class="elem">
                        <label>Nome: </label>
                        <div class="indent">
                            <input type="text" id="nome" name="nome" maxlength="100" value="<?=$row['nome']?>" class="medium validate[required] text-input"> 
                        </div>
                 </div>
              
                 <div class="elem">
                        <label>Senha: </label>
                        <div class="indent">
                            <input type="password" id="password" name="password" maxlength="256" value="<?=$row['password']?>" class="medium validate[required] text-input"> 
                        </div>
                 </div>    
                
                  <div class="elem">
                        <label>Administrador:</label>
                        <div class="indent">
                          <p><input type="checkbox" name="isAdmin" id="isAdmin" value="S" class="styled"  <?php if($row['isadmin'] == 'S')  { ?>  checked <?php } ?> /> <label>Sim</label></p>
                        </div>
                 </div> 
                 <div class="elem">
                        <label>Status:</label>
                        <div class="indent">
                          <p><input type="checkbox" name="status" id="status" value="A" class="styled"  <?php if($row['status'] == 'A')  { ?>  checked <?php } ?> /> <label>Ativo</label></p>
                        </div>
                 </div>                                   
            	 <div class="elem">
                        
                        <div class="indent">
                         
                          <input id="gravarM" name="gravarM" onclick="gravar();" type="button" class="button-a gray" value="Gravar" />   
                          <input id="cancelarM" name="cancelarM" onclick="cancelar();" type="button" class="button-a gray" value="Cancelar" />   
                        </div>
                 </div>
                 </form>
    		 <div class="clear"> </div>
             </div>
           </div>
        </div>  
		<!--Form end-->

    

   </div><!-- END MAIN-->
   
   <?php
     require_once 'barralateral.php';
     require_once 'footer.php';
     