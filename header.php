<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <title>Cadastro Famílias</title>
	<meta name="description" content="">
    
    <link rel="shortcut icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fancybox.css" media="screen"  />
    <link rel="stylesheet" href="css/jquery-ui-1.8.16.custom.css" media="screen"  />
    <link rel="stylesheet" href="css/fullcalendar.css" media="screen"  />
    <link rel="stylesheet" href="lib/elfinder/css/elfinder.css" media="screen" />
    <link rel="stylesheet" href="lib/editor/jquery.wysiwyg.css" media="screen" />
    <link rel="stylesheet" href="lib/editor/default.css" media="screen" />
    <link rel="stylesheet" href="lib/player/css/style.css">
    <link rel="stylesheet" href="css/tipTip.css" media="screen" />
    <link rel="stylesheet" href="css/chosen.css" media="screen"  />
    <link rel="stylesheet" href="css/colorpicker.css" type="text/css" />
    <link rel="stylesheet" href="css/tables.css" media="screen"  />
    <link rel="stylesheet" href="css/jquery.jgrowl.css" media="screen"  />
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen"  />
    
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script type="text/javascript" src="lib/jquery-1.8.3.min.js"></script>
    <script src="lib/jquery-ui-1.8.16.custom.min.js"></script>
    <script src="lib/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script src="lib/jquery.validationEngine-pt.js" type="text/javascript" charset="utf-8"></script>
    
    <script type="text/javascript" src="lib/ddaccordion.js"></script>
<!--	<script type="text/javascript" src="lib/jquery.flot.min.js"></script>
    <script type="text/javascript" src="lib/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="lib/jquery.flot.orderBars.js"></script> -->
    <script type="text/javascript" src="lib/fancybox/fancybox.js"></script>
    <script type="text/javascript" src="lib/fullcalendar.min.js"></script>
    <script src="lib/elfinder/js/elfinder.min.js" charset="utf-8"></script>
    <script src="lib/editor/jquery.wysiwyg.js" charset="utf-8"></script>
    <script src="lib/editor/wysiwyg.image.js" charset="utf-8"></script>
	<script src="lib/editor/default.js" charset="utf-8"></script>
    <script src="lib/editor/wysiwyg.link.js" charset="utf-8"></script>
    <script src="lib/editor/wysiwyg.table.js" charset="utf-8"></script>
   <!-- <script type="text/javascript" src="lib/player/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="lib/player/ttw-video-player-min.js"></script> -->
    <script src="lib/jquery.tipTip.minified.js"></script>
    <script src="lib/forms.js"></script>
    <script src="lib/chosen.jquery.min.js"></script>
    <script src="lib/autoresize.jquery.min.js"></script>
    <script type="text/javascript" src="lib/colorpicker.js"></script>
	<!-- <script type="text/javascript" src="lib/validation.js"></script> -->
    <script src="lib/jquery.dataTables.min.js"></script>
    <script src="lib/jquery.jgrowl_minimized.js"></script>
    <script src="lib/slidernav-min.js"></script>
    <script src="lib/jquery.alerts.js" type="text/javascript"></script>
    <script src="lib/formToWizard.js"></script><script>$(document).ready(function(){ $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' }) });</script>
    
    
    <script type="text/javascript" src="lib/functions.js"></script>
    
</head>

<body>

 <header>
	  <div class="centered">
      <!-- Logo -->
	  <h1><a href="/index.php" class="logo">Cadastro Familias - Projeto Água para Todos</a></h1>
      <!-- Logo end -->
      
      <!-- Navigation -->
      <nav>             
        <ul>
            <li id="login">
                <span id="login-trigger">
                 <span id="login-triggers">
 					<span id="user-panel-check"></span>
  					<span id="user-panel-title">Minha Conta</span>
                  </span>
                </span>
                <div id="login-content">
                  <ul>
                    <li><a href="/logout.php"><img src="images/logout.png" alt=""><span>Sair</span></a></li>
                  </ul>
               </div>                     
            </li> 
        </ul>
      </nav>  
      
      <div class="account-name"><p><span class="welcome">Bem Vindo,</span> <strong><?=$_SESSION['usuarioLogado']?></strong></p><div class="account-separator"></div></div>
        <div class="account-name">
        <div class="account-separator"></div></div>
      <!-- Navigation end-->
     
       </div>
 </header>
 
 
 
  <section id="content">
  <div class="centered"> 