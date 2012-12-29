<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
  <script type="text/javascript">
                      
                    $(document).ready(function() {
                        $("#idCoordenador").change(function() {
                         $("#customForm").submit();
                      });
                    });
            
                   function gravar() {
                      if($("#customForm").validationEngine('validate')) {
                      	var action = '/actions/atualizarCoordenadorMunicipio.php';
                       
                       
                        var form_data = {
			              idCoordenador: $("#idCoordenador").val(),
			              coordenadorMunicipios: $("#coordenadorMunicipios").val()
                          
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
			                 
				             alert(response);
                             alert("Gravado com sucesso");
				             window.location = "coordenadorMunicipio.php";
				                               
                           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "coordenadorMunicipio.php";
                  }
                  
                  
    </script>
 
   <div class="main">
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
   </div>
        
        
         
        
        <?php
          if(!empty($_REQUEST['idCoordenador'])) {
           $idCoordenador = $_REQUEST['idCoordenador'];
          }
        ?>
        
        
        	<!--Form-->
        
        <div class="grid-1">
           <div class="title-grid">Associar Municípios a um Coordenador</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 <div class="elem">
                        <label>Coordenador:</label>
                        <div class="indent">
                         <select id="idCoordenador" name="idCoordenador" class="chzn-select medium-select select"> 
                           <option value="">Selecione um coordenador</option>
                           <?php
                               $sqlCoordenador = 'select * from coordenador order by nmCoordenador';
                               $resultCoordenador = $db->query($sqlCoordenador);
                               
                               while($rowC = $resultCoordenador->fetch_assoc()) { ?>
                                <option value="<?=$rowC['idCoordenador']?>"<?php if($rowC['idCoordenador'] == $idCoordenador) { ?>  selected <?php } ?>><?=$rowC['nmCoordenador']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <?php } ?>
                        </select>   
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Municípios:</label>
                        <div class="indent">
                        <?php if(!isset($idCoordenador)) { ?>
                        <pre>Favor selecionar um Coordenador para associar municípios.</prev>
                       <?php } else { ?>
                         <select size="10" style="width:539px !important;" id="coordenadorMunicipios" name="coordenadorMunicipios" class="chzn-select medium-select select" multiple >
                         <?php
                               $sqlMunicipio = 'select idMunicipio, nmMunicipio, case when (select count(*) ' . 
											   'from coordenador_comunidade ' .
										       'where idComunidade is null ' .
											   'and idMunicipio = m.idMunicipio ' .
										       'and idCoordenador = ' . $idCoordenador . ') > 0 then "selected" end as selecionado  from municipio m order by nmMunicipio';
                               $resultMunicipio = $db->query($sqlMunicipio);
                               
                               while($rowM = $resultMunicipio->fetch_assoc()) { ?>
                                <option value="<?=$rowM['idMunicipio']?>"  <?=$rowM['selecionado']?>><?=$rowM['nmMunicipio']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <?php } ?>
                        </select> 
                 <?php } ?>
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
     