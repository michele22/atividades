<?php

$m1 = 0;
$m2 = 0;
$m3 = 0;
$media = 0;

$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST["m3"];

$media = ($m1+$m2+$m3)/3;
echo "Sua média da conta é " .$media . "<br/>";

$mediaConsumo = $media / 2.50 ;
echo "Sua média de consumo é " . $mediaConsumo . "m³ <br/>";

echo " A previsão de sua próxima conta com o aumento da tarifa  è de R$ "  . ($mediaConsumo * 3.50);

?>
