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
                      	var action = '/actions/atualizarCoordenadorComunidade.php';
                       
                       
                        var form_data = {
			              idCoordenador: $("#idCoordenador").val(),
			              coordenadorComunidades: $("#coordenadorComunidades").val()
                          
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
			                 
                             alert("Gravado com sucesso");
				             window.location = "coordenadorComunidades.php";
				                               
                           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "coordenadorComunidades.php";
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
           <div class="title-grid">Associar Comunidades a um Coordenador</div>
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
                        <label>Comunidades:</label>
                        <div class="indent">
                        <?php if(!isset($idCoordenador)) { ?>
                        <pre>Favor selecionar um Coordenador para associar comunidades.</prev>
                       <?php } else { ?>
                         <select size="10" style="width:539px !important;" id="coordenadorComunidades" name="coordenadorComunidades" class="chzn-select medium-select select" multiple>
                         <?php
                               $sqlComunidade = 'select idComunidade, nmComunidade, 
                                                (select nmMunicipio from municipio where idMunicipio = c.idMunicipio) as nmMunicipio 
                                                , case when (select count(*) from coordenador_comunidade where idComunidade = c.idComunidade
							                     and idMunicipio = c.idMunicipio and idCoordenador = '. $idCoordenador . ') > 0 then "selected" end as selecionado 
                                                 from comunidade c where c.idMunicipio not in 
                                                 (select idMunicipio from coordenador_comunidade where idComunidade is null and idCoordenador = '. $idCoordenador .')';
                               $resultComunidade = $db->query($sqlComunidade);
                               
                               while($rowC = $resultComunidade->fetch_assoc()) { ?>
                                <option value="<?=$rowC['idComunidade']?>"  <?=$rowC['selecionado']?>><?=$rowC['nmComunidade']?> - <?=$rowC['nmMunicipio']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <?php } ?>
                        </select> 
                        <h5>Não serão apresentadas comunidades dos municipios que o coordenador já está associado.</h5>
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
     