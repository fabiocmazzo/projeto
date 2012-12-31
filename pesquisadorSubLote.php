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
                      	var action = '/actions/atualizarPesquisadorSubLote.php';
                       
                       
                        var form_data = {
			              idPesquisador: $("#idPesquisador").val(),
			              pesquisadorSubLotes: $("#pesquisadorSubLotes").val()
                          
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
                             alert("Gravado com sucesso");
				             window.location = "pesquisadorSubLote.php";
				           
                       	}
	                  	});
                  } 
                  }
                  
                  function cancelar() {
                    window.location = "pesquisadorSubLote.php";
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
           <div class="title-grid">Associar SubLotes a um Pesquisador</div>
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
                        <label>SubLotes:</label>
                        <div class="indent">
                        <?php if(!isset($idPesquisador)) { ?>
                        <pre>Favor selecionar um pesquisador para associar sublotes.</prev>
                       <?php } else { ?>
                         <select multiple data-placeholder="Selecione sublotes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" style="width:100%;" id="pesquisadorSubLotes" name="pesquisadorSubLotes" class="chzn-select medium-select select">
                         <?php
                             $sqlSubLote = ' select 
                                        idSubLote,
                                        nmSubLote,
                                        (select 
                                                nmLote
                                            from
                                                lote
                                            where
                                                idLote = s.idLote) as nmLote,
                                        case
                                            when
                                                (select 
                                                        count(*)
                                                    from
                                                        pesquisador_sublote
                                                    where
                                                        idLote = s.idLote
                                                            and idSubLote = s.idSubLote
                                                            and idPesquisador = ' . $idPesquisador . ') > 0
                                            then
                                                "selected"
                                        end as selecionado
                                    from
                                        subLote s
                                    where
                                        s.idLote in (select 
                                            idLote
                                        from
                                            lote l
                                        where
                                            l.idComunidade in (select 
                                                    idComunidade
                                                from
                                                    coordenador_comunidade
                                                where
                                                    idCoordenador in (select 
                                                            idCoordenador
                                                        from
                                                            pesquisador
                                                        where
                                                            idPesquisador = ' . $idPesquisador . '))
                                
                                   union all
                                 select idLote
                                   from lote
                                  where idLote in (
                                    select idLote from comunidade where idMunicipio in (select 
                                                    idMunicipio
                                                from
                                                    coordenador_comunidade
                                                where
                                                    idCoordenador in (select 
                                                            idCoordenador
                                                        from
                                                            pesquisador
                                                        where
                                                            idPesquisador = ' . $idPesquisador . ')))) 
                                            and s.idLote not in (select 
                                                idLote
                                            from
                                                pesquisador_sublote
                                            where
                                                idSubLote is null and idPesquisador = ' . $idPesquisador . ' and idLote is not null)
                                            and s.idLote not in (select 
                                                idLote
                                            from
                                                lote
                                            where
                                                idComunidade in (select 
                                                        idComunidade
                                                    from
                                                        pesquisador_sublote
                                                    where
                                                        idLote is null and idSubLote is null
                                                            and idPesquisador = ' . $idPesquisador . ') and idLote is not null)';

                                
                               $resultSubLote = $db->query($sqlSubLote);
                               
                               while($rowS = $resultSubLote->fetch_assoc()) { ?>
                                <option value="<?=$rowS['idSubLote']?>"  <?=$rowS['selecionado']?>><?=$rowS['nmSubLote']?> - <?=$rowS['nmLote']?>&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <?php } ?>
                        </select> 
                        <h5>Só serão exibidos lotes que o coordenador do pesquisador tem acesso, e que o pesquisador não tem acesso por um nível superior (Lotes e Comunidades).</h5>
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
     