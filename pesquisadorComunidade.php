<?php
 require_once 'includes/config.php';
 require_once 'header.php';
 ?>
 
  <script type="text/javascript">
                      
                    $(document).ready(function() {
                        $("#idPesquisador").change(function() {
                         $("#customForm").submit();
                      });
                    });
            
                   function gravar() {
                      if($("#customForm").validationEngine('validate')) {
                      	var action = '/actions/atualizarPesquisadorComunidade.php';
                       
                       
                        var form_data = {
			              idPesquisador: $("#idPesquisador").val(),
			              pesquisadorComunidades: $("#pesquisadorComunidades").val()
                          
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
                             alert("Gravado com sucesso");
				             window.location = "pesquisadorComunidade.php";
				           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "pesquisadorComunidade.php";
                  }
                  
                  
    </script>
 
   <div class="main">
        <div class="speedbar">
        <div class="speedbar-nav">Cadastro Famílias</div> 
   </div>
        
        
         
        
        <?php
          if(!empty($_REQUEST['idPesquisador'])) {
           $idPesquisador = $_REQUEST['idPesquisador'];
          }
        ?>
        
        
        	<!--Form-->
        
        <div class="grid-1">
           <div class="title-grid">Associar Comunidades a um Pesquisador</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 <div class="elem">
                        <label>Pesquisador:</label>
                        <div class="indent">
                         <select id="idPesquisador" name="idPesquisador" class="chzn-select" style="width: 500px;"> 
                           <option value="">Selecione um pesquisador&nbsp;&nbsp;&nbsp;&nbsp;</option>
                           <?php
                               $sqlPesquisador = 'select * from pesquisador order by nmPesquisador';
                               $resultPesquisador = $db->query($sqlPesquisador);
                               
                               while($rowP = $resultPesquisador->fetch_assoc()) { ?>
                                <option value="<?=$rowP['idPesquisador']?>"<?php if($rowP['idPesquisador'] == $idPesquisador) { ?>  selected <?php } ?>><?=$rowP['nmPesquisador']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <?php } ?>
                        </select>   
                        </div>
                 </div>
                 
                 <div class="elem">
                        <label>Comunidades:</label>
                        <div class="indent">
                        <?php if(!isset($idPesquisador)) { ?>
                        <pre>Favor selecionar um pesquisador para associar comunidades.</prev>
                       <?php } else { ?>
                         <select multiple data-placeholder="Selecione comunidades &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" style="width:500px;" id="pesquisadorComunidades" name="pesquisadorComunidades" class="chzn-select">
                         <?php
                               $sqlComunidade = 'select 
                                                    idComunidade,
                                                    nmComunidade,
                                                    (select 
                                                            nmMunicipio
                                                        from
                                                            municipio
                                                        where
                                                            idMunicipio = c.idMunicipio) as nmMunicipio,
                                                      case when (select count(*) from pesquisador_comunidade where idComunidade = c.idComunidade
							                                 and idPesquisador = '. $idPesquisador . ') > 0 then "selected" end as selecionado
                                                from
                                                    comunidade c
                                                where
                                                    c.idComunidade in (
                                                    
                                                      select 
                                                            idComunidade
                                                        from
                                                            coordenador_comunidade
                                                        where
                                                            idCoordenador  in (select idCoordenador from pesquisador where idPesquisador = ' . $idPesquisador . ')
                                                            and idComunidade is not null
                                                        union
                                                        select
                                                            idComunidade
                                                           from comunidade
                                                          where idMunicipio in (select 
                                                            idMunicipio
                                                        from
                                                            coordenador_comunidade
                                                        where
                                                            idCoordenador in (select idCoordenador from pesquisador where idPesquisador = ' . $idPesquisador . ')
                                                            and idComunidade is null))';


                               $resultComunidade = $db->query($sqlComunidade);
                               
                               while($rowC = $resultComunidade->fetch_assoc()) { ?>
                                <option value="<?=$rowC['idComunidade']?>"  <?=$rowC['selecionado']?>><?=$rowC['nmComunidade']?> - <?=$rowC['nmMunicipio']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <?php } ?>
                        </select> 
                        <h5>Só serão exibidas comunidades que o coordenador do pesquisador tem acesso.</h5>
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
     