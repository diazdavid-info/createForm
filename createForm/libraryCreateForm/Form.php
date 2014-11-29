<?php

namespace createForm\form;

class Form{
	private static $attrPrivate = array('after','before');
	
	public static function getAttrPrivate(){
		return self::$attrPrivate;
	}
}