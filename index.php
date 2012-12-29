<?php
  require_once 'includes/config.php';
    
  if($_SESSION['logado']) {
    header('Location: admin.php');
  }
?>
   
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Familias - Projeto Água para Todos</title>
	<meta name="description" content="">
    <link rel="shortcut icon" href="images/favicon.ico" />
    
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen"  />
	<link rel="stylesheet" href="css/login.css" type="text/css" media="screen"  />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cuprum" />
    
    <script type="text/javascript" src="lib/jquery-1.8.3.min.js"></script>

    <script src="lib/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script src="lib/jquery.validationEngine-pt.js" type="text/javascript" charset="utf-8"></script>
    <script>
            $(document).ready(function(){
                
                $("#go").click(function() {
                    
                    if($("#form-login").validationEngine('validate')) {
                      	var action = '/actions/doLogin.php';
                        var form_data = {
			              username: $("#username").val(),
			              password: $("#password").val(),
			             }; 
                         
                       $.ajax({
			             type: "POST",
			             url: action,
			             data: form_data,
			             success: function(response)
			             {
				           if(response == 'sucesso') {
				             location.reload();
				           } else {
				             alert(response);
				           }                           
                           
                       	}
	                  	});
                         
                         
                    }
                });
            });
						
	
    </script>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
 
    <section id="form"><form id="form-login" action="dashboard.html"  class="formular" method="post">
    	 <div id="content-header">
<img style="display:block; margin-left:auto; margin-right: auto;" src="images/logo_azul.png" />
				  <br/><br/>
				  <p  style="display:block; margin-left:auto; margin-right: auto;"id="logo">Cadastro Familias - Projeto Água para Todos</p>
                       </div> 
    	
     		<div id="content">
            
                 <input type="text" name="username" id="username" class="validate[required] text-input" placeholder="Usuário"><br><br>
                 <input type="password" name="password" id="password" class="validate[required] text-input" placeholder="Senha"><br><br>
                 				  <br/>

                 <div class="buttons">
                 <input type="button"  name="go" id="go" class="button-a blue" value="Entrar">
                 </div>
                  
                        </div>
                             <img style="margin: 65px auto; display: block;" src="images/logo_newello.png" />
		</form>
     
    </section>
 

</body>
</html>