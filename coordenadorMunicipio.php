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
                          isComunidade:  $("#isComunidade:checked").val()
                          
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
           <div class="title-grid">Associar Municípios a um Coordenador</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
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
                        <label>Multiple select:</label>
                        <div class="indent">
                         <SELECT size="10" style="width:539px !important;" id="coordenadorMunicipios" name="coordenadorMunicipios" class="chzn-select medium-select select" multiple >
                         <OPTION VALUE="o1" selected>Some text goes here</OPTION>
                         <OPTION VALUE="o2">Option 2</OPTION>
                         <OPTION VALUE="o3">Optasdasdasdasdasdion 3</OPTION>
                         <OPTION VALUE="o4" selected>Option 4</OPTION>
                         <OPTION VALUE="o5">Optasdasdasdasdasdasdasdasdasdasdasdasdion 5</OPTION>
                         <OPTION VALUE="o6">Optasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdion 6</OPTION>
                        </SELECT> 
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
     