<?php
// 1 
// 1 1 
// 1 2 1 
// 1 3 3 1 
// 1 4 6 4 1 
// 1 5 10 10 5 1 
// 1 6 15 20 15 6 1 
// 1 7 21 35 35 21 7 1 
// 1 8 28 56 70 56 28 8 1 
// 1 9 36 84 126 126 84 36 9 1 
// 1 10 45 120 210 252 210 120 45 10 1 
// 1 11 55 165 330 462 462 330 165 55 11 1 
// 1 12 66 220 495 792 924 792 495 220 66 12 1 

$a= $_POST['fn'];
$segitiga="";

$jml_baris = $a; //definisikan banyaknya baris
for($i=1;$i<=$jml_baris;$i++) { // looping baris segitiga
 for($j=1;$j<=$i;$j++){ // looping untuk isi segitiga per-barisnya
  if($j==1 || $j==$i){
   $value[$i][$j] = 1; // jika baris pertama definisikan 1
  }else{
   $value[$i][$j] = $value[$i-1][$j] + $value[$i-1][$j-1]; // rumus penjumlahan baris ke-2 dst
  }
  $segitiga .= $value[$i][$j]." "; 
 }
 $segitiga.= "<br>";
}
echo "<center>".$segitiga."</center>";
?>
