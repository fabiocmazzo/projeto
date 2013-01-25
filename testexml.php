<?php 
 
 require_once 'includes/class.PhpOpenRosa.php';

 $varXML = simplexml_load_file("http://www.cadastrofamilias.com.br/xml/familia.php?idPesquisador=6&idComunidade=65");
 
 $varXML->registerXPathNamespace('h', 'http://www.w3.org/1999/xhtml'); 
 
 $head = $varXML->xpath('//h:head');
 $body = $varXML->xpath('//h:body');
 
 
 $labels = $head[0]->model->itext->translation->text;
 
 $questions = $body[0];
 
 
 //getLabel($labels, '/data/complementoprincipal/viasdeacesso:hint');
 
 //var_dump($labels);
// print_r($head->model);
 
 foreach($questions as $question) {
 	
   if($question->getName() == "group") {
 
  
   	
   	$openGroup = openGroup($question);
   	
   foreach ($openGroup->children() as $child)
    {
        printQuestion($labels, $child);
    }
   	
   	
   }
 	
 	
     printQuestion($labels, $question);
 
 	
 	
 	
 }

