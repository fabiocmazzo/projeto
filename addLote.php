<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
  <script type="text/javascript">
            
                   function gravar() {
                      if($("#customForm").validationEngine('validate')) {
                      	var action = '/actions/atualizarLote.php';
                        var form_data = {
			              idLote: $("#idLote").val(),
			              nmLote: $("#nmLote").val(),
                          idComunidade: $("#idComunidade").val()
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
                        
                             alert("Gravado com sucesso");
				             window.location = "lotes.php";
				                               
                           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "lotes.php";
                  }
                  
                  
    </script>
 
   <div class="main">
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
   </div>
        
        
         
        
        <?php
        
             if(isset($_REQUEST['id'])) {
                $idLote = $_REQUEST['id'];
                $sql = 'select * from lote where idLote = ' . $idLote;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
             } ?>
        
        
        	<!--Form-->
        
        <div class="grid-1">
           <div class="title-grid">Cadastrar Novo Lote</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 
               <?php if(isset($idLote)) { ?>
                 <div class="elem">
                        <label>Código Lote: </label>
                        <div class="indent">
                            <input type="hidden" id="idLote" name="idLote" value="<?=$row['idLote']?>"> <?=$row['idLote']?>
                        </div>
                 </div>
                <?php } ?>
               
                 <div class="elem">
                        <label>Nome Lote: </label>
                        <div class="indent">
                            <input type="text" id="nmLote" name="nmLote" maxlength="100" value="<?=$row['nmLote']?>" class="medium validate[required] text-input"> 
                        </div>
                 </div>
              
                 
                 <div class="elem">
                        <label>Comunidade:</label>
                        <div class="indent">
                         <select id="idComunidade" name="idComunidade" class="chzn-select medium-select select"> 
                           <?php
                               $sqlComunidade = 'select * from comunidade';;
                               $resultComunidade = $db->query($sqlComunidade);
                               
                               while($rowC = $resultComunidade->fetch_assoc()) { ?>
                                <option value="<?=$rowC['idComunidade']?>"<?php $rowC['idComunidade'] == $row['idComunidade'] ? ' selected ' : ''; ?>><?=$rowC['nmComunidade']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
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
     