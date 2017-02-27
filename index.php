<html>

<head>
	<title> Leonardo </title>
</head>

<body>


<?php
	
	// Abre links das provas
	$myfile1 = fopen("permissao.txt", "r") or die("Erro!");
	$permissao =  fgets($myfile1);
	fclose($myfile1);

	for ($i=1; $i <= 6; $i++) { 
		if($permissao >= $i){
			echo "<h3> <a href='capitulo.php?q=".$i."'>Capítulo ".$i."</a> - <a href='prova.php?q=".$i."' >Prova </a> </h3>";
		}else{
			echo "<h3> Capítulo ".$i." - Prova  </h3>";
		}
	}

?>
</body>




</html>