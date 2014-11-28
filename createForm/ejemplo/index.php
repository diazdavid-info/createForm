<?php

namespace createForm\form;
include '../ActionForm.php';

$forma = new ActionForm();

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
						'name' => 'nombre',
						'value' => '',
						'placeholder' => 'David'
						
				),
				'2' => array(
						'type' => 'text',
						'id' => 'apellidos',
						'name' => 'apellidos',
						'value' => '',
						'placeholder' => 'Díaz'
			
				)
					
			)
				
		)
);
$forma->addForm($option);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
	<div id="wrapper">
		<?php $forma->printForm(); ?>
	</div>
</body>
</html>
