<?php

namespace createForm\form;

class ExceptionForm extends \Exception{
	
	private $attrForm = array('accept-charset','action','autocomplete','enctype','method','name','novalidate','target','accept','id');
	private $tagForm = array('input');
	private $attrInput = array('accept','after','alt','autocomplete','autofocus','before','checked','class','dirname','disabled','form','formaction','formenctype','formmethod','formnovalidate',
			'formtarget','height','id','inputmode','list','max','maxlength','min','minlength','multiple','name','pattern','placeholder','readonly','required','size','src','step',
			'type','value','width','title');
	
	function __construct(){
		
	}
	
	public function checkForm(array $attributes){
		foreach ($attributes as $key => $vale){
			if(!in_array($key, $this->attrForm)){
				throw new \Exception("No se reconoce {$key} como atributo de la etiqueta form");
			}
		}
	}
	
	public function checkBody(array $body){
		foreach ($body as $key => $vale){
			if(!in_array($key, $this->tagForm)){
				throw new \Exception("No se reconoce {$key} como etiqueta para un formulario");
			}
		}
	}
	
	public function checkInput(array $inputAttr){
		foreach ($inputAttr as $key => $vale){
			if(!in_array($key, $this->attrInput)){
				throw new \Exception("No se reconoce {$key} como atributo de la etiqueta input");
			}
		}
	}
}