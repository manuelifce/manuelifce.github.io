<?php
$soma = 0;

// Identifica a prova e busca as respostas

$myfile1 = fopen("respostas.txt", "r") or die("Unable to open file!");
for ($i=0; $i < $_POST['p']; $i++) { 
	$a = (explode(";",fgets($myfile1)));
}
fclose($myfile1);

var_dump($a);
echo "<br>";

if (@$_POST['q1'] == $a[1]) {
	echo "Acertou a 1<br>";
	$soma++;
}

if (@$_POST['q2'] == $a[2]) {
	echo "Acertou a 2 <br>";
	$soma++;
}
if (@$_POST['q3'] == $a[3]) {
	echo "Acertou a 3<br>";
	$soma++;
}
if (@$_POST['q4'] == $a[4]) {
	echo "Acertou a 4<br>";
	$soma++;
}

echo "Voce acertou ". $soma . " questoes<br>";

if ($soma == 4) {
	echo "libera proximo capitulo";

$myfile = fopen("permissao.txt", "r") or die("Unable to open file!");
$cap = fgets($myfile);
fclose($myfile);
if ($cap < $_POST['p']+1) {
	$myfile = fopen("permissao.txt", "w") or die("Unable to open file!");
	++$cap;
	fwrite($myfile, $cap);
	fclose($myfile);
}
	
	//Quando passa para o proximo capitulo e criado uma pasta e copiado um pdf para a mesma

	date_default_timezone_set('America/Fortaleza');
	$Npasta = "Arthur-".dechex(date("d")).".".dechex(date("m")).".".dechex(date("Y"))."-".dechex(date("G")).".".dechex(date("i")).".".dechex(date("s"));
	echo "<br>";
	echo $Npasta;

	//cria pasta com nome do dia,mes,ano,hora,minuto e segundos em hexadecimal
	mkdir($Npasta, 0777);

	//copia o pdf para a nova pasta

	$valor = $_POST['p'] + 1;
	$srcfile = 'cap1/pdf'.$valor.'.pdf';
	$dstfile = $Npasta.'/pdf'.$valor.'.pdf';


	mkdir(dirname($dstfile), 0777, true);
	copy($srcfile, $dstfile);

	$myfile1 = fopen("pastas.txt", "r") or die("Unable to open file!");
	$pasta = fgets($myfile1);
	var_dump($pasta);
	fclose($myfile1);

	$myfile1 = fopen("pastas.txt", "w") or die("Unable to open file!");
	$pasta .= $Npasta.";";
	fwrite($myfile1, $pasta);
	var_dump($pasta);
	fclose($myfile1);

	echo "<br><br><br><br><br><br><br><br><br><br><br><br>";

 	echo "<meta http-equiv='refresh' content=3;url='index.php'>";

}else{
	echo "<meta http-equiv='refresh' content=5;url='index.php'>";
}

?>