<?php

include_once 'libraryCreateForm/LinkCreateForm.php';

if(!$createForm->isAddForm('form1')) $createForm->addForm("form1");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
	<div id="wrapper">
		<?php $createForm->printForm('form1'); ?>
	</div>
</body>
</html>
