<?php
/**
 * 
 * @author David Díaz
 * @version 1.0
 *
 */

namespace createForm\libraryCraeteForm;


session_start();
include_once('ExceptionForm.php');
include_once('Form.php');

class ActionForm{
	
	private $positionForm;
	private $form;
	private $formValidate;
	private $exceptionForm;
	private $optionForm;
	
	function __construct(){
		$this->positionForm = 0;
		$this->form = array();
		$this->formValidate = array();
		$this->exceptionForm = new ExceptionForm();
		$this->optionForm = array();
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
	
	public function addForm($form){
		require_once "form/{$form}_createForm.php";
		$nameVar = "{$form}_option";
		$this->optionForm = $$nameVar;
		$this->headForm($this->optionForm['option-form']);
		$this->bodyForm($this->optionForm['content-form']);
		$this->footerForm();
		$_SESSION[$form] = $this->form;
		//unset($_SESSION[$form]); //Eliminar esta linea
	}
	
	public function printForm($nameForm){
		if(isset($_SESSION[$nameForm])){
			$form = $_SESSION[$nameForm];
		}else{
			$form = $this->form;
		}
		foreach ($form as $f){
			echo $f;
		}
	}
	
	public function isAddForm($nameForm){
		return (isset($_SESSION[$nameForm]))? true : false;
	}
	
	public function validateForm($nameForm,$post){
        require_once "form/{$nameForm}_createForm.php";
		$nameVar = "{$nameForm}_option";
        $option = $$nameVar;
        foreach($option['content-form'] as $opt){
            foreach($opt as $p){
                if(isset($p['name']))
                    echo $p['name'] . "<br />";
            }
        }    
            
        echo "<pre>";
        var_dump($option);
        echo "</pre>";
        
		
		//var_dump($this->optionForm);
// 		foreach ($this->optionForm['content-form'] as $content){
// 			foreach ($content as $element){
// 				echo "<pre>";
// 				print_r($element);
// 				echo "</pre><br />";
// 			}
// 		}
		var_dump($post);
		//$form = $_SESSION[$nameForm];
	}
	
	private function validateLenght(){
		
	}
}