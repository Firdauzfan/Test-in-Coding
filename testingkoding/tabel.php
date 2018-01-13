<table align="left" border="1" cellpadding="3" cellspacing="0">

<?php
$N1= $_POST['fn'];
$N2= $_POST['sn'];


for ($i=1; $i <= $N1 ; $i++) { 
	echo "<tr>";
	for ($j=1; $j <=$N2 ; $j++) { 
	echo "<td>$i*$j = ".$i*$j. "</td>";	
	}
	echo "</tr>";
}

?>

</table>

<div style="clear:both;">
	<br>
</div>

<table align="left" border="1" cellpadding="3" cellspacing="0">

<?php
$N1= $_POST['fn'];
$N2= $_POST['sn'];


for ($i=1; $i <= $N1 ; $i++) { 
	echo "<tr>";
	for ($j=1; $j <=$N2 ; $j++) { 
	echo "<td>".$i*$j. "</td>";	
	}
	echo "</tr>";
}

?>

</table>
<br>

<div style="clear:both;">
	<br>
</div>

<table width="270px" align="left" border="1" cellpadding="0" cellspacing="0">

<?php
$N1= $_POST['fn'];
$N2= $_POST['sn'];


for ($i=1; $i <= $N1 ; $i++) { 
	echo "<tr>";
	for ($j=1; $j <=$N2 ; $j++) { 
	$total=$i+$j;
	if ($total%2==0) {
		echo "<td height=30px width=30px style=background:#000000></td>";	
	}
	else{
		echo "<td height=30px width=30px style=background:#ffffff></td>";	
	}
	}
	echo "</tr>";
}

?>

</table>
<br>
