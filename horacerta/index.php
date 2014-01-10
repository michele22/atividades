<?php

date_default_timezone_set("Brazil/East");
echo '<meta http-equiv ="refresh" content = "1" >';

$diaAtual = getdate();

echo $diaAtual["mday"];
echo "/";
echo $diaAtual["mon"];
echo "/";
echo $diaAtual["year"];

echo "<br/><br/>";

echo $diaAtual["hours"];
echo ":";
echo $diaAtual["minutes"];
echo ":"; 
echo $diaAtual["seconds"];

switch ($diaAtual["wday"]){
	case 0:
	echo  "domingo";
	break;

	case 1:
	echo  "Segunda-Feira";
	break;

	case 2:
	echo "Terça-Feira";
	break;

	case 3:
	echo "Quarta-Feira";
	break;

	case 4:
	echo "Quinta-Feira";
	break;

	case 5:
	echo "Sexta-Feira";
	break;

	case 6:
	echo "Sábado";
	break;
}

?>
