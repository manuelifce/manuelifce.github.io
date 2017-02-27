<?php

	$q = $_GET['q'];

	$myfile1 = fopen("permissao.txt", "r") or die("Erro!");
	$permissao =  fgets($myfile1);
	fclose($myfile1);

	$myfile1 = fopen("pastas.txt", "r") or die("Erro!");
	$pastas =  (explode(";",fgets($myfile1)));
	fclose($myfile1);	

	$nome = "c".$q;

	if ($permissao>=$q) {
		echo "<meta http-equiv='refresh' content=3;url='".$pastas[$q-1]."/pdf".$q.".pdf'>";
	}else{
		echo "Você ainda não está habilitado!!!";
	}
?>