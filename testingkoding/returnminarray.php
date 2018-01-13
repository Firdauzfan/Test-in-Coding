<?php
	
	$A=array('1','3','2','1');
	$B=array('4','5','3','2');

function returnarray($A,$B){

	if (array_intersect($A,$B) != null){
		$min= min(array_intersect($A,$B));
		echo $min;
	}
	else{
		echo "-1";
	}
}

returnarray($A,$B);
 
?>