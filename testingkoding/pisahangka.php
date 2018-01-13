<?php

$N1= $_POST['fn'];

echo $N1;

echo "<br>";
echo "<br>";

$total= strlen($N1);
$strrepet=$total;

for ($i=0; $i < $total ; $i++) { 
	echo substr($N1, $i, 1);
	$strrepet--;
	echo str_repeat("0", $strrepet);
	echo "<br>";
}

?>