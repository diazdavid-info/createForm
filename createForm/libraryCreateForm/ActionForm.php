<?php

namespace createForm\form;
session_start();
include_once('ExceptionForm.php');
include_once('Form.php');

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
						$beforeInput = (isset($input['before']))? $input['before'] : "";
						$afterInput = (isset($input['after']))? $input['after'] : "";
						$this->form[$this->positionForm++] = $this->createLine($input, "input", $beforeInput, $afterInput);
					}
					break;
			}
		}
	}
	
	private function footerForm(){
		$this->form[$this->positionForm++] = "</form>";
		//$_SESSION['prueba'] = "david";
	}
	
	private function createLine(array $arg, $type, $before = "", $after = ""){
		$result = "{$before}<{$type} ";
		foreach ($arg as $key => $value){
			if(!in_array($key, Form::getAttrPrivate()) ){
				$result .= "{$key}='{$value}' ";
			}
		}
		$result .= "/>{$after}";
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