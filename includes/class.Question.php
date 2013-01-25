<?php

/**
 *
 * @author Fabio Covolo Mazzo
 *        
 */

class Question {
	
	var $type = false;
	var $label = false;
	var $resultText	= false;
	var $options = false;
	var $imageLink = false;
	
	
	
	
	/**
	 * 
	 * @param Tipo da Pergunta  $type
	 * @param unknown $label
	 * @param string $options
	 */
	function __construct($type, $label, $options = false, $imageLink = false, $resultText = false) {
  
	  $this->type = $type;
	  $this->label = $label;
	  $this->options = $options;
	  $this->imageLink = $imageLink;
	  $this->resultText = $resultText;	 
	
	}
	
	
}

?>