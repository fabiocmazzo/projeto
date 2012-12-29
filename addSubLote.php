<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
  <script type="text/javascript">
            
                   function gravar() {
                      if($("#customForm").validationEngine('validate')) {
                      	var action = '/actions/atualizarSubLote.php';
                        var form_data = {
			              idSubLote: $("#idSubLote").val(),
			              nmSubLote: $("#nmSubLote").val(),
                          idLote: $("#idLote").val()
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
                        
                             alert("Gravado com sucesso");
				             window.location = "subLotes.php";
				                               
                           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "subLotes.php";
                  }
                  
                  
    </script>
 
   <div class="main">
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
   </div>
        
        
         
        
        <?php
        
             if(isset($_REQUEST['id'])) {
                $idSubLote = $_REQUEST['id'];
                $sql = 'select * from subLote where idSubLote = ' . $idSubLote;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
             } ?>
        
        
        	<!--Form-->
        
        <div class="grid-1">
           <div class="title-grid">Cadastrar Novo SubLote</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 
               <?php if(isset($idSubLote)) { ?>
                 <div class="elem">
                        <label>Código SubLote: </label>
                        <div class="indent">
                            <input type="hidden" id="idSubLote" name="idSubLote" value="<?=$row['idSubLote']?>"> <?=$row['idSubLote']?>
                        </div>
                 </div>
                <?php } ?>
               
                 <div class="elem">
                        <label>Nome SubLote: </label>
                        <div class="indent">
                            <input type="text" id="nmSubLote" name="nmSubLote" maxlength="100" value="<?=$row['nmSubLote']?>" class="medium validate[required] text-input"> 
                        </div>
                 </div>
              
                 
                 <div class="elem">
                        <label>Lote:</label>
                        <div class="indent">
                         <select id="idLote" name="idLote" class="chzn-select medium-select select"> 
                           <?php
                               $sqlLote = 'select idLote, nmLote, (select nmComunidade from comunidade where idComunidade = lote.idComunidade) as nmComunidade from lote';
                               $resultLote = $db->query($sqlLote);
                           
                               while($rowL = $resultLote->fetch_assoc()) { ?>
                                <option value="<?=$rowL['idLote']?>"<?php $rowL['idLote'] == $row['idLote'] ? ' selected ' : ''; ?>><?=$rowL['nmLote']?> - <?=$rowL['nmComunidade']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
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
     