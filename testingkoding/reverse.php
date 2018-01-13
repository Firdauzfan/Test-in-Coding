<?php

	$N1= $_POST['fn'];
	
    echo strrev("$N1");

    echo "<br>";
?>


<?php

function reverse($S){
	$balik = strrev($S);
	$array = explode(' ', $balik);
	$arrev = array_reverse($array);

	$balik = implode(' ', $arrev);

	echo $balik;
}

reverse($N1); 

echo "<br>";

?>

<?php
$text=$N1;
$search_char="a";
$count=0;
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count++;
	 }
  }
echo $count."\n";
?>