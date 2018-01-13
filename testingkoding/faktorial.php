<?php

$N1=$_POST['fn'];
$x=1;

for ($i=1; $i<$N1 ; $i++) { 
	$x*=($i+1);
}
echo $x;
?>