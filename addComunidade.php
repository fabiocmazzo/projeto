<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
  <script type="text/javascript">
            
                   function gravar() {
                      if($("#customForm").validationEngine('validate')) {
                      	var action = '/actions/atualizarComunidade.php';
                        var form_data = {
			              idMunicipio: $("#idMunicipio").val(),
			              nmComunidade: $("#nmComunidade").val(),
                          idComunidade: $("#idComunidade").val()
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
				            
                             alert("Gravado com sucesso");
				             window.location = "comunidades.php";
				                               
                           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "comunidades.php";
                  }
                  
                  
    </script>
 
   <div class="main">
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
   </div>
        
        
         
        
        <?php
        
             if(isset($_REQUEST['id'])) {
                $idComunidade = $_REQUEST['id'];
                $sql = 'select * from comunidade where idComunidade = ' . $idComunidade;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
             } ?>
        
        
        	<!--Form-->
        
        <div class="grid-1">
           <div class="title-grid">Cadastrar Nova Comunidade</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 
               <?php if(isset($idComunidade)) { ?>
                 <div class="elem">
                        <label>Código Comunidade: </label>
                        <div class="indent">
                            <input type="hidden" id="idComunidade" name="idComunidade" value="<?=$row['idComunidade']?>"> <?=$row['idComunidade']?>
                        </div>
                 </div>
                <?php } ?>
               
                 <div class="elem">
                        <label>Nome Comunidade: </label>
                        <div class="indent">
                            <input type="text" id="nmComunidade" name="nmComunidade" maxlength="100" value="<?=$row['nmComunidade']?>" class="medium validate[required] text-input"> 
                        </div>
                 </div>
              
                 
                 <div class="elem">
                        <label>Município:</label>
                        <div class="indent">
                         <select id="idMunicipio" name="idMunicipio" class="chzn-select medium-select validate[required] select"> 
                           <?php
                               $sqlMunicipio = 'select * from municipio';;
                               $resultMunicipio = $db->query($sqlMunicipio);
                               
                               while($rowM = $resultMunicipio->fetch_assoc()) { ?>
                                <option value="<?=$rowM['idMunicipio']?>"<?php $rowM['idMunicipio'] == $row['idMunicipio'] ? ' selected ' : ''; ?>><?=$rowM['nmMunicipio']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <?php } ?>
                        </select>   
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
     