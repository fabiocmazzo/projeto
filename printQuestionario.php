<html>
<body>
<?php

 require_once 'includes/class.Db.php';
 require_once 'includes/class.PhpOpenRosa.php';
 require_once 'includes/connectMongo.php';
 
 
 /* Vou conectar com a collections familias */
	 try { 
	 	$familias = $dbMongo->familias;
	 	
  	 } catch (Exception $e) {
	 	$sql = 'insert into log(error_msg) values ("erro de conversao")';
	 	$db->query($sql);
	 }
	 
	 
	 /* Se foi passado o ID é porque é um questionário com dados, se não é apenas o modelo */
	 if(isset($_REQUEST['id'])) {
	 	$familia = $familias->findOne(array('_id' => new MongoId($_REQUEST['id'])));
	  	$openRosa = new PhpOpenRosa('http://www.cadastrofamilias.com.br/xml/familia.php',true,$familia);
	
	 } else {
	 	$openRosa = new PhpOpenRosa('http://www.cadastrofamilias.com.br/xml/familia.php');
	 }
 
	
	
	 
	 foreach($openRosa->formulario as $form) {
	 	
	   if($form->type == 'label') { echo '<b>'; }
	 	echo utf8_decode($form->label) . '<br/>';
       if($form->type == 'label') { echo '</b><br/>'; }
	 	
       echo '<br/>';
       
       if($form->type == 'input') {
       	echo '<input type="text" size="100" readonly value="'. utf8_decode($form->resultText) .'"/>';
       	echo '<br/><br/>';
       }
       
       if($form->type == 'geopoint') {
       	echo '<input type="text" size="100" readonly value="'. utf8_decode($form->resultText) .'"/>';
       	echo '<br/><br/>';
       }
       
       if($form->type == 'select') {
       	foreach($form->options as $option) {
     	  echo '<input type="checkbox" disabled ' . $option['checked'] . ' />' . utf8_decode($option['label']) . '<br/>';  		
       	}
       	echo '<br/><br/>';
       }
       
       
       if($form->type == 'select1') {
       	foreach($form->options as $option) {
       		echo '<input type="radio" disabled ' . $option['checked'] . '/>' . utf8_decode($option['label']) . '<br/>';
       	}
       	echo '<br/><br/>';
       }
       
       
       if($form->type == 'upload') {
       	echo '<img src="formularios//' . $form->resultText . '" />';
       	echo '<br/><br/>';
       }
       
	 }
	?>
</body>
</html>
  
  
  
 