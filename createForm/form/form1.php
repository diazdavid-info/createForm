<?php

namespace createForm\form;

$option = array(
		'option-form' => array(
				'action' => 'index.php',
				'method' => 'POST',
				'enctype' => 'multipart/form-data',
				'accept' => 'png',
				'id' => 'form1'
		),
		'content-form' => array(
				'input' => array(
						'1' => array(
								'type' => 'text',
								'id' => 'nombre',
								'class' => 'line',
								'name' => 'nombre',
								'value' => '',
								'placeholder' => 'David',
								'before' => '<span>Nombre</span>',
								'after' => '<br />'
						),
						'2' => array(
								'type' => 'text',
								'id' => 'apellidos',
								'class' => 'line',
								'name' => 'apellidos',
								'value' => '',
								'placeholder' => 'Díaz',
								'before' => '<span>Apellidos</span>',
								'after' => '<br />'
						),
						'3' => array(
								'type' => 'hidden',
								'id' => 'oculto',
								'value' => 'oculto',
						),
						'4' => array(
								'type' => 'search',
								'id' => 'busqueda',
								'value' => 'Buscar',
								'before' => '<span>Buscar</span>',
								'after' => '<br />'
						),
						'5' => array(
								'type' => 'tel',
								'id' => 'telefono',
								'value' => '',
								'placeholder' => 'telefono',
								'before' => '<span>Telefono</span>',
								'after' => '<br />'
						),
						'6' => array(
								'type' => 'radio',
								'name' => 'sex',
								'value' => 'male',
								'before' => '<span>Hombre</span>',
								'after' => '<br />'
						),
						'7' => array(
								'type' => 'radio',
								'name' => 'sex',
								'value' => 'female',
								'before' => '<span>Mujer</span>',
								'after' => '<br />'
						),
						'8' => array(
								'type' => 'checkbox',
								'name' => 'direccion',
								'value' => 'direccion',
								'before' => '<span>Dirección</span>',
								'after' => '<br />'
						),
						'9' => array(
								'type' => 'submit',
								'id' => 'boton',
								'value' => 'Enviar',
						),
				)

		)
);