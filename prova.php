<?php

	$q = $_GET['q'];

	$myfile1 = fopen("permissao.txt", "r") or die("Erro!");
	$permissao =  fgets($myfile1);
	fclose($myfile1);

	if ($permissao>=$q) {
		include 'prova'.$q.'.html';
	}else{
		echo "Você ainda não está preparado!!!";
	}

?>