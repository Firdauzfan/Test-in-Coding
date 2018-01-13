<?php /* The function for checking characters which appers once in string; */ 
$N4= $_POST['fn'];

function AppearsOnce($input){ 

    if(!ctype_digit($input)){ return "Must be all numbers! "; } 

    $data = str_split($input, 1); 
    $output = []; 

    foreach ($data as $key => $value) {
        if(substr_count($input, $value) == 1){
	   	array_push($output, $value);
	}
     }
   return $output;
}
echo print_r(AppearsOnce($N4));
?>