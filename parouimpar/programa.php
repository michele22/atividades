<?php
$numero = 0;

$numero = $_POST["numero"];

if ($numero % 2== 0){
	echo "O numero é par";
}

if ($numero % 2== 1){
	echo "O numero é impar";
}
?>
