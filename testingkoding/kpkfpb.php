<?php
$a= $_POST['fn'];
$b= $_POST['sn'];

#KPK
$max= $a*$b;

if ($a>$b) {
	$min=$a;
}else{
	$min=$b;
}

for ($i=$min; $i<=$max ; $i++) { 
	if ($i%$a==0 && $i%$b==0) {
		echo "KPK=".$i."<br>";
		break;
	}
}

#FPB
if ($a<$b) {
	$min=$a;
}else{
	$min=$b;
}

$fpb=0;
$count=1;
while ( $count<= $min) {
	if ($a%$count==0 && $b%$count==0) {
		$fpb=$count;
	}
	$count++;
}

echo "FPB=".$fpb."";
?>