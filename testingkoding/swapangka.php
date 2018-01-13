<?php
$N1= $_POST['fn'];
$N2= $_POST['sn'];

$a = $N1;
$b = $N2;
echo" Nilai awal: A=10 B=20 <br>"; 
$a = $a+$b;
$b = $a - $b;
$a = $a - $b;
echo" Nilai setelah dibalik: A = $a B = $b "; 
?>