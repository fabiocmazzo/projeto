<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
  <script type="text/javascript">
            
                   function gravar() {
                   
                    if($("#customForm").validationEngine('validate')) {
                      	var action = '/actions/atualizarCoordenador.php';
                        var form_data = {
			              idCoordenador: $("#idCoordenador").val(),
			              nmCoordenador: $("#nmCoordenador").val(),
                          docCoordenador: $("#docCoordenador").val()
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
				            
                             alert("Gravado com sucesso");
				             window.location = "coordenadores.php";
				                               
                           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "coordenadores.php";
                  }
                  
                  
    </script>
 
   <div class="main">
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
   </div>
        
        
         
        
        <?php
        
             if(isset($_REQUEST['id'])) {
                $idCoordenador = $_REQUEST['id'];
                $sql = 'select * from coordenador where idCoordenador = ' . $idCoordenador;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
             } ?>
        
        
        	<!--Form-->
        
        <div class="grid-1">
           <div class="title-grid">Cadastrar Novo Coordenador</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 
               <?php if(isset($idCoordenador)) { ?>
                 <div class="elem">
                        <label>Código Coordenador: </label>
                        <div class="indent">
                            <input type="hidden" id="idCoordenador" name="idCoordenador" value="<?=$row['idCoordenador']?>"> <?=$row['idCoordenador']?>
                        </div>
                 </div>
                <?php } ?>
               
                 <div class="elem">
                        <label>Nome Coordenador: </label>
                        <div class="indent">
                            <input type="text" id="nmCoordenador" name="nmCoordenador" maxlength="100" value="<?=$row['nmCoordenador']?>" class="medium validate[required] text-input"> 
                        </div>
                 </div>
              
                 
                 <div class="elem">
                        <label>Documento:</label>
                        <div class="indent">
                            <input type="text" id="docCoordenador" name="docCoordenador" maxlength="14" class="medium" value="<?=$row['docCoordenador']?>"> 
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
     