<?php

	$N1= $_POST['fn'];
	$N2= $_POST['sn'];

    for($x=$N1; $x<=$N2; $x++){
        if(is_int($x/9) && is_int($x/5)){
            echo "fiveBuzz";
        }
        elseif(is_int($x/9)){
            echo "buzz";
        }
        elseif(is_int($x/5)){
            echo "five";
        }
       
    echo $x.",";
    }
?>