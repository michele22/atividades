<?php

$m1 = 0;
$m2 = 0;
$m3 = 0;
$media = 0;
	
$m1 = $_POST ["m1"];
$m2 = $_POST ["m2"];
$m3 = $_POST ["m3"];
$media = ($m1+$m2+$m3)/3;
$mediaConsumo = $media / 2.50 ;
$contaNova = $mediaConsumo * 3.50;
echo $contaNova;
