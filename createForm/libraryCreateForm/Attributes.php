<?php
/**
 *
 * @author David Díaz
 * @version 1.0
 *
 */

namespace createForm\libraryCraeteForm;

class Attributes{
	
	private $key;
	private $value;
	
	function __construct($key, $value){
		$this->key = $key;
		$this->value = $value;
	}
	
	public function getKey(){
		return $this->key;
	}
	
	public function getValue(){
		return $this->value;
	}
}