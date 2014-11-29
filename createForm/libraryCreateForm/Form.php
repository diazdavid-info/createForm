<?php

namespace createForm\form;

class Form{
	private static $attrForm = array('accept-charset','action','autocomplete','enctype','method','name','novalidate','target','accept','id');
	private static $tagForm = array('input');
	private static $attrInput = array('accept','after','alt','autocomplete','autofocus','before','checked','class','dirname','disabled','form','formaction','formenctype','formmethod','formnovalidate',
			'formtarget','height','id','inputmode','list','max','maxlength','min','minlength','multiple','name','pattern','placeholder','readonly','required','size','src','step',
			'type','value','width','title');
	private static $attrPrivate = array('after','before');
	
	public static function getAttrForm(){
		return self::$attrForm;
	}
	
	public static function getTagForm(){
		return self::$tagForm;
	}
	
	public static function getAttrInput(){
		return self::$attrInput;
	}
	
	public static function getAttrPrivate(){
		return self::$attrPrivate;
	}
}