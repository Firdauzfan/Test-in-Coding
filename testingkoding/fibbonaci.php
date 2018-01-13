<?php

$CN= $_POST['jn'];

$no1=0;
$no2=1;

echo $no1.", ";
echo $no2.",";

$counter= 0;

while ($counter<=$CN) {
	$no_baru= $no1+$no2;
	echo $no_baru.",";

	$no1=$no2;
	$no2=$no_baru;

	$counter++;
}

?>