<?php
	$N4= $_POST['fn'];

	function ganjilgenap($n){
  
      for($i=1;$i<=$n;$i++){  //smw angka yg akan di cek
              
            if($i%2!=0){
                   print $i." adalah bilangan ganjil<br/>";
            }

            else{
                   print $i." adalah bilangan genap<br/>";
            }
     }
} 

ganjilgenap($N4); 
		
?>