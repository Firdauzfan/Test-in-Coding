<?php
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
echo "<br>";
?>

<?php
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo $y;
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
echo "<br>";
?>

<?php
for($x=5;$x>=1;$x--)
{
   for ($y=5;$y>=$x;$y--)
    {
	 echo $y;
	    if($y> $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
echo "<br>";
?>

<?php
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
    	if ($x%2==0) {
    		if ($y%2!=0) {
    			echo "0";
    		}
    		else{
    		echo $y;
    	}
    		}
    	else if($x%2!=0){
    		if ($y%2==0) {
    			echo "0";
    		}
    		else{
    		echo $y;
    	}
    	}
    	
    	
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
echo "<br>";
?>

<?php
for($x=5;$x>=1;$x--)
{
   for ($y=5;$y>=$x;$y--)
    {
    	if ($x%2==0) {
    		if ($y%2!=0) {
    			echo "0";
    		}
    		else{
    		echo $y;
    	}
    		}
    	else if($x%2!=0){
    		if ($y%2==0) {
    			echo "0";
    		}
    		else{
    		echo $y;
    	}
    	}
    	
    	
	    if($y> $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
echo "<br>";
?>


<?php
$n = 5; 

$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
    echo "<br>";
   }
   echo "<br>"; 
?>


<?php
$n = 6; 
$count=2;
for ($i = 1; $i <= $n; $i++) 
{
  for ($j = 1; $j <= $n; $j++) 
   {
        if ($i==$count) {
            for ($k=$j; $k<$count ; $k++) { 
                echo "0";
            }
            $count++;

        } 
         else if($j>=$count-1)  {
             echo $j;  
         }
          
      
   } 
    echo "<br>";
   }

?>