<?php
   $pagina = basename($_SERVER['PHP_SELF'], ".php");
?>
 <!-- SIDEBAR -->
   <div class="sidebar">
   <span class="categories">Cadastros</span>
   <ul class="menu">
	
       <li <?php if($pagina == 'lotes' || $pagina == 'addLote') {?>class="expand"<?php } ?>>
			<a href="#"><span class="files icon">Lote</span><span class="num">2</span></a>
			<ul class="acitem">
				<li><a href="/lotes.php"><span class="invoice icon">Listar</span></a></li>
				<li><a href="/addLote.php"><span class="w-editor icon">Adicionar</span></a></li>
            </ul>
		</li>
    	<li <?php if($pagina == 'municipios' || $pagina == 'addMunicipio') {?>class="expand"<?php } ?>>
			<a href="#"><span class="files icon">Município</span><span class="num">2</span></a>
			<ul class="acitem">
				<li><a href="/municipios.php"><span class="invoice icon">Listar</span></a></li>
				<li><a href="/addMunicipio.php"><span class="w-editor icon">Adicionar</span></a></li>
            </ul>
		</li>
		<li <?php if($pagina == 'comunidades' || $pagina == 'addComunidade') {?>class="expand"<?php } ?>>
			<a href="#"><span class="files icon">Comunidade</span><span class="num">2</span></a>
			<ul class="acitem">
				<li><a href="/comunidades.php"><span class="invoice icon">Listar</span></a></li>
				<li><a href="/addComunidade.php"><span class="w-editor icon">Adicionar</span></a></li>
            </ul>
		</li>
  		<li <?php if(in_array($pagina,array('coordenadores','addCoordenador','coordenadorComunidade','coordenadorMunicipio'))) {?>class="expand"<?php } ?>>
			<a href="#"><span class="files icon">Coordenador</span><span class="num">4</span></a>
			<ul class="acitem">
				<li><a href="/coordenadores.php"><span class="invoice icon">Listar</span></a></li>
				<li><a href="/addCoordenador.php"><span class="w-editor icon">Adicionar</span></a></li>
	           <li><a href="/coordenadorMunicipio.php"><span class="forms icon">Associar Municípios</span></a></li>
               <li><a href="/coordenadorComunidade.php"><span class="forms icon">Associar Comunidades</span></a></li>
            </ul>
		</li>   
  		<li <?php if(in_array($pagina,array('pesquisadores','addPesquisador','pesquisadorComunidade','pesquisadorLote','pesquisadorSubLote'))) {?>class="expand"<?php } ?>>
			<a href="#"><span class="files icon">Pesquisador</span><span class="num">3</span></a>
			<ul class="acitem">
				<li><a href="/pesquisadores.php"><span class="invoice icon">Listar</span></a></li>
				<li><a href="/addPesquisador.php"><span class="w-editor icon">Adicionar</span></a></li>
                <li><a href="/pesquisadorComunidade.php"><span class="forms icon">Associar Comunidades</span></a></li>
            </ul>
		</li>  
       <?php if($_SESSION['isAdmin'] == 'S') { ?>
           <li <?php if($pagina == 'usuarios' || $pagina == 'addUsuario') {?>class="expand"<?php } ?>>
    			<a href="#"><span class="files icon">Usuários</span><span class="num">2</span></a>
    			<ul class="acitem">
    				<li><a href="/usuarios.php"><span class="invoice icon">Listar</span></a></li>
    				<li><a href="/addUsuario.php"><span class="w-editor icon">Adicionar</span></a></li>
                </ul>
    		</li>
       <?php } ?>
     <?php if($_SESSION['isAnalista'] == 'S') { ?>
           <li <?php if($pagina == 'pesquisasRecebidas') {?>class="expand"<?php } ?>>
    			<a href="#"><span class="files icon">Resultados</span><span class="num">3</span></a>
    			<ul class="acitem">
    				<li><a href="pesquisasRecebidasFamilia.php"><span class="invoice icon">Pesquisas Recebidas - Família</span></a></li>
    				<li><a href="pesquisasRecebidasComunidade.php"><span class="invoice icon">Pesquisas Recebidas - Comunidade</span></a></li>
    				<li><a href="pesquisasRecebidasAcaoSocial.php"><span class="invoice icon">Pesquisas Recebidas - Ação Social</span></a></li>
                </ul>
    		</li>
       <?php } ?>      
            
	</ul>	
   
        
	</div>

 	<!-- SIDEBAR -->