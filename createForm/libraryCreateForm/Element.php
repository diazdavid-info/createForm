<?php
/**
 *
 * @author David Díaz
 * @version 1.0
 *
 */

namespace createForm\libraryCraeteForm;

class Element{
	
	private $name;
	private $Attributes;
	
	function __construct($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function addAttribute(Attributes $attr){
		$this->Attributes[] = $attr;
	}
}