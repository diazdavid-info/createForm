<?php

namespace createForm\form;
include_once('ExceptionForm.php');

class ActionForm{
	
	private $positionForm;
	private $form;
	private $exceptionForm;
	
	function __construct(){
		$this->positionForm = 0;
		$this->form = array();
		$this->exceptionForm = new ExceptionForm();
	}
	
	private function headForm(array $attr){
		$this->exceptionForm->checkForm($attr);
		$this->form[$this->positionForm++] = $this->createLine($attr, "form");
	}
	
	private function bodyForm(array $body){
		$this->exceptionForm->checkBody($body);
		foreach ($body as $key => $value){
			switch ($key){
				case "input":
					foreach ($body[$key] as $input){
						$this->exceptionForm->checkInput($input);
						$this->form[$this->positionForm++] = $this->createLine($input, "input");
					}
					break;
			}
		}
	}
	
	private function footerForm(){
		$this->form[$this->positionForm++] = "</form>";
	}
	
	private function createLine(array $arg, $type){
		$result = "<{$type} ";
		foreach ($arg as $key => $value){
			$result .= "{$key}='{$value}' ";
		}
		$result .= "/>";
		return $result;
	}
	
	public function addForm(array $option){
		$this->headForm($option['option-form']);
		$this->bodyForm($option['content-form']);
		$this->footerForm();
	}
	
	public function printForm(){
		foreach ($this->form as $f){
			echo $f;
		}
		//print_r($this->form);
	}
}