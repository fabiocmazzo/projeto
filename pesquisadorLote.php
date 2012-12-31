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
                      	var action = '/actions/atualizarPesquisadorLote.php';
                       
                       
                        var form_data = {
			              idPesquisador: $("#idPesquisador").val(),
			              pesquisadorLotes: $("#pesquisadorLotes").val()
                          
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
                     
                             alert("Gravado com sucesso");
				             window.location = "pesquisadorLote.php";
				           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "pesquisadorLote.php";
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
           <div class="title-grid">Associar Lotes a um Pesquisador</div>
           <div class="content-gird">
           <div class="form">
          	 <form method="post" id="customForm" action="#">
                 <div class="elem">
                        <label>Pesquisador:</label>
                        <div class="indent">
                         <select id="idPesquisador" name="idPesquisador" class="chzn-select medium-select select"> 
                           <option value="">Selecione um pesquisador</option>
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
                        <label>Lotes:</label>
                        <div class="indent">
                        <?php if(!isset($idPesquisador)) { ?>
                        <pre>Favor selecionar um pesquisador para associar lotes.</prev>
                       <?php } else { ?>
                         <select multiple data-placeholder="Selecione lotes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" style="width:100%;" id="pesquisadorLotes" name="pesquisadorLotes" class="chzn-select medium-select select">
                         <?php
                               $sqlLote = '   select idLote, nmLote, (select 
                                                            nmComunidade
                                                        from
                                                            comunidade
                                                        where
                                                            idComunidade = l.idComunidade) as nmComunidade,
                                                            case when (select count(*) from pesquisador_sublote where idComunidade = l.idComunidade
							                     and idLote = l.idLote and idSubLote is null and idPesquisador = '. $idPesquisador . ') > 0 then "selected" end as selecionado
                                                from
                                                    lote l
                                                where
                                                    l.idComunidade in (
                                                    
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


                               $resultLote = $db->query($sqlLote);
                               
                               while($rowL = $resultLote->fetch_assoc()) { ?>
                                <option value="<?=$rowL['idLote']?>"  <?=$rowL['selecionado']?>><?=$rowL['nmLote']?> - <?=$rowL['nmComunidade']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <?php } ?>
                        </select> 
                        <h5>Só serão exibidos lotes que o coordenador do pesquisador tem acesso.</h5>
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
     