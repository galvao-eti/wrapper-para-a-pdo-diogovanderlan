<?php

require  " ../autoload.php ";
use Turma3\Wrapper;


$categoria =  new Wrapper();

	if($_POST){
		
		$categoria = $_POST['categoria'];
		$wrapper->include($categoria);
		
	}
?>


<form method="post">
	<input type="text" name="categoria">
	<button type="submit" title="enviar"></button>
</form>