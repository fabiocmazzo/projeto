<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
  <script type="text/javascript">
            
                   function gravar() {
                   
                    if($("#customForm").validationEngine('validate')) {
                      	var action = '/actions/atualizarMunicipio.php';
                        var form_data = {
			              idMunicipio: $("#idMunicipio").val(),
			              nmMunicipio: $("#nmMunicipio").val(),
                          UF:          $("#UF").val(),
                          cdIBGE:      $("#cdIBGE").val()
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
				            
                             alert("Gravado com sucesso");
				             window.location = "municipios.php";
				                               
                           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "municipios.php";
                  }
                  
                  
    </script>
 
   <div class="main">
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
   </div>
        
        
         
        
        <?php
        
             if(isset($_REQUEST['id'])) {
                $idMunicipio = $_REQUEST['id'];
                $sql = 'select * from municipio where idMunicipio = ' . $idMunicipio;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
             } ?>
        
        
        	<!--Form-->
        
        <div class="grid-1">
           <div class="title-grid">Cadastrar Novo Município</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 
               <?php if(isset($idMunicipio)) { ?>
                 <div class="elem">
                        <label>Código Município: </label>
                        <div class="indent">
                            <input type="hidden" id="idMunicipio" name="idMunicipio" value="<?=$row['idMunicipio']?>"> <?=$row['idMunicipio']?>
                        </div>
                 </div>
                <?php } ?>
               
                 <div class="elem">
                        <label>Nome Município: </label>
                        <div class="indent">
                            <input type="text" id="nmMunicipio" name="nmMunicipio" maxlength="100" value="<?=$row['nmMunicipio']?>" class="medium validate[required] text-input"> 
                        </div>
                 </div>
               <div class="elem">
                        <label>Estado:</label>
                        <div class="indent">
                          <select name="UF" id="UF" class="chzn-select medium-select validate[required] select">
                             <option value="">Selecione...</option>
                             <?php
                               $sqlEstado = 'select * from estado order by UF';
                               $resultEstado = $db->query($sqlEstado);
                               
                               while($rowE = $resultEstado->fetch_assoc()) { ?>
                                <option value="<?=$rowE['UF']?>"<?php $rowE['UF'] == $row['UF'] ? ' selected ' : ''; ?> ><?=$rowE['descricao']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                             <?php } ?>
                        </select>   
                         </select>
                  </div>
             </div>
                 <div class="elem">
                        <label>Código IBGE:</label>
                        <div class="indent">
                            <input type="text" id="cdIBGE" name="cdIBGE" class="medium" value="<?=$row['cdIBGE']?>"> 
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
     