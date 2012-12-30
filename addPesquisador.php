<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
  <script type="text/javascript">
            
                   function gravar() {
                      if($("#customForm").validationEngine('validate')) {
                      	var action = '/actions/atualizarPesquisador.php';
                        var form_data = {
			              idPesquisador: $("#idPesquisador").val(),
			              nmPesquisador: $("#nmPesquisador").val(),
                          idCoordenador: $("#idCoordenador").val(),
                          tipo:          $("#tipo").val(),
                          isFamilia:     $("#isFamilia:checked").val(),
                          isComunidade:  $("#isComunidade:checked").val(),
                          CPF:           $("#CPF").val()
                          
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
				             
                             alert("Gravado com sucesso");
				             window.location = "pesquisadores.php";
				                               
                           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "pesquisadores.php";
                  }
                  
                  
    </script>
 
   <div class="main">
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
   </div>
        
        
         
        
        <?php
        
             if(isset($_REQUEST['id'])) {
                $idPesquisador = $_REQUEST['id'];
                $sql = 'select * from pesquisador where idPesquisador = ' . $idPesquisador;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
             } ?>
        
        
        	<!--Form-->
        
        <div class="grid-1">
           <div class="title-grid">Cadastrar Novo Pesquisador</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 
               <?php if(isset($idPesquisador)) { ?>
                 <div class="elem">
                        <label>Código Pesquisador: </label>
                        <div class="indent">
                            <input type="hidden" id="idPesquisador" name="idPesquisador" value="<?=$row['idPesquisador']?>"> <?=$row['idPesquisador']?>
                        </div>
                 </div>
                <?php } ?>
               
                 <div class="elem">
                        <label>Nome: </label>
                        <div class="indent">
                            <input type="text" id="nmPesquisador" name="nmPesquisador" maxlength="100" value="<?=$row['nmPesquisador']?>" class="medium validate[required] text-input"> 
                        </div>
                 </div>
              
                 <div class="elem">
                        <label>CPF: </label>
                        <div class="indent">
                            <input type="text" id="CPF" name="CPF" maxlength="11" value="<?=$row['CPF']?>" class="medium text-input"> 
                        </div>
                 </div>    
                 <script type="text/javascript">
                   $("#CPF").numeric({ decimal: false, negative: false }, function() { alert("Somente números"); this.value = ""; this.focus(); });
                 </script>
                 <div class="elem">
                        <label>Coordenador:</label>
                        <div class="indent">
                         <select id="idCoordenador" name="idCoordenador" class="chzn-select medium-select validate[required] select"> 
                           <?php
                               $sqlCoordenador = 'select * from coordenador';;
                               $resultCoordenador = $db->query($sqlCoordenador);
                               
                               while($rowC = $resultCoordenador->fetch_assoc()) { ?>
                                <option value="<?=$rowC['idCoordenador']?>"<?php $rowC['idCoordenador'] == $row['idCoordenador'] ? ' selected ' : ''; ?>><?=$rowC['nmCoordenador']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <?php } ?>
                        </select>   
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Tipo:</label>
                        <div class="indent">
                         <select id="tipo" name="tipo" class="chzn-select medium-select validate[required] select"> 
                           <option value="A"<?php  'A' == $row['tipo'] ? ' selected ' : ''; ?>>Assistente Social&nbsp;&nbsp;&nbsp;&nbsp;</option>
                           <option value="T"<?php  'T' == $row['tipo'] ? ' selected ' : ''; ?>>Técnico de Campo&nbsp;&nbsp;&nbsp;&nbsp;</option>                           
                        </select>   
                        </div>
                 </div>                 

                  <div class="elem">
                        <label>Atende:</label>
                        <div class="indent">
                          <p><input type="checkbox" name="isFamilia" id="isFamilia" value="S" class="styled"  <?php if($row['isFamilia'] == 'S')  { ?>  checked <?php } ?> /> <label>Família</label></p>
                          <p><input type="checkbox" name="isComunidade" id="isComunidade" value="S" class="styled"  <?php if($row['isComunidade'] == 'S')  { ?>  checked <?php } ?>/> <label>Comunidade</label></p>
   
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
     