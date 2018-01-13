<?php
	
	$array=array('2','4','8','5','1','7','6','9','10','3');

	echo "array yang belum di sorting: ";
	echo "<br />";
	foreach($array as $key => $value)
	{
	  echo $value.",";

	}

	echo "<br>";
	echo "<br>";
 
	// Sorting and printing array
	asort($array);
	
	echo "array yang sudah di sorting: ";
	echo "<br>";
	foreach($array as $key => $value)
	{

	  echo $value.",";
	}
    echo "<br>";
	echo "<br>";
 
?>


<?php

$array=array('2','4','8','5','1','7','6','9','10','3');

echo "array yang belum di sorting: ";
echo "<br />";
foreach($array as $key => $value)
	{
	  echo $value.",";

	}
echo "<br>";
echo "<br>";
 

for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i++){

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}

echo "array yang sudah di sorting: ";
echo "<br />";
foreach($array as $key => $value)
	{
	  echo $value.",";

	}
echo "<br>";
echo "<br>";

?>

