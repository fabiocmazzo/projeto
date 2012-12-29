<?php
   $pagina = basename($_SERVER['PHP_SELF'], ".php");
?>
 <!-- SIDEBAR -->
   <div class="sidebar">
   <span class="categories">Cadastros</span>
   <ul class="menu">
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
		<li <?php if($pagina == 'lotes' || $pagina == 'addLote') {?>class="expand"<?php } ?>>
			<a href="#"><span class="files icon">Lote</span><span class="num">2</span></a>
			<ul class="acitem">
				<li><a href="/lotes.php"><span class="invoice icon">Listar</span></a></li>
				<li><a href="/addLote.php"><span class="w-editor icon">Adicionar</span></a></li>
            </ul>
		</li>
		<li <?php if($pagina == 'subLotes' || $pagina == 'addSubLote') {?>class="expand"<?php } ?>>
			<a href="#"><span class="files icon">SubLote</span><span class="num">2</span></a>
			<ul class="acitem">
				<li><a href="/subLotes.php"><span class="invoice icon">Listar</span></a></li>
				<li><a href="/addSubLote.php"><span class="w-editor icon">Adicionar</span></a></li>
            </ul>
		</li>
  		<li <?php if($pagina == 'coordenadores' || $pagina == 'addCordenador') {?>class="expand"<?php } ?>>
			<a href="#"><span class="files icon">Coordenador</span><span class="num">4</span></a>
			<ul class="acitem">
				<li><a href="/coordenadores.php"><span class="invoice icon">Listar</span></a></li>
				<li><a href="/addCoordenador.php"><span class="w-editor icon">Adicionar</span></a></li>
	           <li><a href="/coordenadorMunicipio.php"><span class="forms icon">Associar Municípios</span></a></li>
               <li><a href="/coordenadorComunidade.php"><span class="forms icon">Associar Comunidades</span></a></li>
            </ul>
		</li>   
  		<li <?php if($pagina == 'pesquisadores' || $pagina == 'addPesquisador') {?>class="expand"<?php } ?>>
			<a href="#"><span class="files icon">Pesquisador</span><span class="num">5</span></a>
			<ul class="acitem">
				<li><a href="/pesquisadores.php"><span class="invoice icon">Listar</span></a></li>
				<li><a href="/addPesquisador.php"><span class="w-editor icon">Adicionar</span></a></li>
                <li><a href="/pesquisadorComunidade.php"><span class="forms icon">Associar Comunidades</span></a></li>
                <li><a href="/pesquisadorLote.php"><span class="forms icon">Associar Lotes</span></a></li>
                <li><a href="/pesquisadorSubLote.php"><span class="forms icon">Associar SubLotes</span></a></li>
            </ul>
		</li>              
	</ul>	
   
        
	</div>

 	<!-- SIDEBAR -->