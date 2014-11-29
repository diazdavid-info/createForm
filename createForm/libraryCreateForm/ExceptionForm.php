<?php
/**
 * 
 * @author David Díaz
 * @version 1.0
 *
 */

namespace createForm\libraryCraeteForm;

class ExceptionForm extends \Exception{
	
	/**
	 * Constructor reservado para posibles mejoras.
	 */
	function __construct(){}
	
	/**
	 * Función que ckequea si los atributos que tiene la etiqueta <form> son correctos.
	 * Si la función detecta que la etiqueta <form> tiene un atributo no válido la función levanta una excepción.
	 * @param array $attributes Array con los atributos que se desean añadir a la etiqueta <form>.
	 * @throws \Exception
	 */
	public function checkForm(array $attributes){
		foreach ($attributes as $key => $vale){
			if(!in_array($key, Form::getAttrForm())){
				throw new \Exception("No se reconoce {$key} como atributo de la etiqueta form");
			}
		}
	}
	
	/**
	 * Función que ckequea que las etiquetas que se van a encerrar dentro de la etiqueta <form> son propias de un formulario.
	 * Si la función detecta que se quiere añadir una etiqueta que no corresponden con las etiquetas típicas de un formulario levanta una excepción.
	 * @param array $body Array con las etiquetas que se van a añadir dentro de la etiqueta <form>.
	 * @throws \Exception
	 */
	public function checkBody(array $body){
		foreach ($body as $key => $vale){
			if(!in_array($key, Form::getTagForm())){
				throw new \Exception("No se reconoce {$key} como etiqueta para un formulario");
			}
		}
	}
	
	/**
	 * Función que chekea que los atributos que se intentan añadir dentro de la etiqueta <input> son correctos.
	 * Si la función detecta que se intenta añadir atributos que no son validos para la etiqueta <input> levanta una excepción.
	 * @param array $inputAttr Array con los atributos que se van a añadir a la etiqueta <input>.
	 * @throws \Exception
	 */
	public function checkInput(array $inputAttr){
		foreach ($inputAttr as $key => $vale){
			if(!in_array($key, Form::getAttrInput())){
				throw new \Exception("No se reconoce {$key} como atributo de la etiqueta input");
			}
		}
	}
}