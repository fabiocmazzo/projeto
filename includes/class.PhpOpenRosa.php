<?php
/* Implementação do JavaOpenRosa
 * Autor: Fabio Covolo Mazzo
 * Data:  23/03/2013
 * email: fabiomazzo@gmail.com
 */
 
 require_once 'class.Question.php';

 class PhpOpenRosa {
 	
 	   var $labels = false;
 	   var $questions = false;
 	   var $formulario = array();
 	   var $results = false;
 	   
 	/* Por padrão o XML é carregado de uma URL, caso seja passado isURL
 	 * como false, ele considera que o $xml seja uma String
 	 */
 	function __construct($xml, $isUrl = true, $results = false) {
 		
 	  if($isUrl) {
 	  	$objXML = simplexml_load_file($xml);
 	   } else {
 	 	$objXML = simplexml_load_string($xml); 	
       }
 		
 		
       $objXML->registerXPathNamespace('h', 'http://www.w3.org/1999/xhtml');
       
       $head = $objXML->xpath('//h:head');
       $body = $objXML->xpath('//h:body');
       
       $this->labels = $head[0]->model->itext->translation->text;
       $this->questions = $body[0];
       $this->results = $results;
       
       foreach($this->questions as $question) {
       
       	if($question->getName() == "group") {
       
       		$openGroup = $this->openGroup($question);
       
       		foreach ($openGroup->children() as $child)
       		{
       			$this->populateQuestions($child);
       		}
      
       	}
       
       	$this->populateQuestions($question);
       }
 		
 		
 	} 
 	

   /* Remove o jr:itext do padrão OpenRosa para busca
    * de informações
    */
   private function removeJr($string) {

   	return str_replace("')","", str_replace("jr:itext('", "", $string));
   	
   }

   /* Abre o Grupo */
   private function openGroup($group) {
   
   	return $group[0];
   
   }
   
   
  /* Retorna o label de uma questão
   * de acordo com os labels
   */
  private function getLabel($attribute) {
  	 foreach($this->labels as $label) {
  	 	if($label->attributes()->id[0] == $attribute) {
  	 	  return (string)$label->value[0];	
  	 	}
  	 }
  } 
  
  
  private function getTextResult($attribute) {

  	
  	
  	$arrayMap = split("/",$attribute);
  	$countArray = count($arrayMap);
  	$retorno = $this->results;
  	
  	for ($i = 0; $i < $countArray; $i++) {
  		$retorno = $retorno[$arrayMap[$i]];
  	}

  	/* Se for um array é pq está vazia a propriedade */
  	if (is_array($retorno)) {
  		return '';
  	}
  	 return $retorno;
  	
  }
  
  
  /* Retira o /data do começo do atributo */
  private function removeData($attribute) {
  	return substr($attribute,6);
  }
  
 
 /*
  * Popula o formulário
  */
 private function populateQuestions($question, $results = false) {
 
 	switch ($question->getName()) {

 		case 'label':
 		  $this->formulario[] = new Question('label', $this->getLabel($this->removeJr($question->attributes()->ref[0])));
 		  break;
 		case 'input': 
 		  $this->formulario[] = new Question('input',$this->getLabel($this->removeJr($question->label->attributes()->ref[0])),false, false, $this->getTextResult($this->removeData($question->attributes()->ref[0])));
 		  break; 
 		case 'geopoint':
 		  $this->formulario[] = new Question('geopoint',$this->getLabel($this->removeJr($question->label->attributes()->ref[0])),false,false, $this->getTextResult($this->removeData($question->attributes()->ref[0])));
 		  break;
 		case 'upload':
 		  	$this->formulario[] = new Question('upload',$this->getLabel($this->removeJr($question->label->attributes()->ref[0])),false, false, $this->getTextResult($this->removeData($question->attributes()->ref[0])));
 		  	break;
 		case 'select':
 		   $label = $this->getLabel($this->removeJr($question->label->attributes()->ref[0]));
 		   $options = array();
 		  foreach ($question->children() as $child) {
		    
 		  	$checked = '';
 		  	$valores = split(' ', $this->getTextResult($this->removeData($question->attributes()->ref[0])));
 		  	if(in_array($child->value, $valores)) {
 		  		$checked = 'checked';
 		  	}
 		  	
 		  	if($child->getName() == 'item') {
			   	$options[] = array('label' => $this->getLabel($this->removeJr($child->label->attributes()->ref[0])), 'checked' => $checked); 
			   }
 		  }
 		  $this->formulario[] = new Question('select',$label, $options);
 		  
 		 break;

 		 case 'select1':
 		   $label = $this->getLabel($this->removeJr($question->label->attributes()->ref[0]));
 		   $options = array();
 		  foreach ($question->children() as $child) {
			   if($child->getName() == 'item') {
			   	$checked = '';
			   	if($child->value == $this->getTextResult($this->removeData($question->attributes()->ref[0]))) {
			   	 $checked = 'checked';	
			   	}
			   	$options[] = array('label' => $this->getLabel($this->removeJr($child->label->attributes()->ref[0])), 'checked' => $checked); ; 
			   }
 		  }
 		  $this->formulario[] = new Question('select1',$label, $options);
 		  
 		 break;
 	}
 	
 }
 
}