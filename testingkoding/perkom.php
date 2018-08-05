<?php
$n= $_POST['fn'];
$r= $_POST['sn'];
$s= $_POST['zn'];
$t= $_POST['xn'];
$u= $_POST['cn'];


// $n = 5;
// $r = 3;

#permutasi biasa
$n_fak = faktorial($n);
$r_fak = faktorial($n-$r);

$permutasi = permutasi($n_fak, $r_fak);
echo "PERMUTASI : $permutasi"; 
echo "<br>";

#permutasi anggota sama
$ns_fak = faktorial($n);
$rs_fak = faktorial($r);
$ss_fak = faktorial($s);
$ts_fak = faktorial($t);
$us_fak = faktorial($u);

$permutasisama = permutasisama($ns_fak, $rs_fak, $ss_fak, $ts_fak, $us_fak);
echo "PERMUTASI Sama : $permutasisama"; 
echo "<br>";

$d = $n - $r;
$rk_fak= faktorial($r);
$d_fak = faktorial($d);
$kombinasi = kombinasi($n_fak, $rk_fak, $d_fak);
echo "KOMBINASI : $kombinasi";



function faktorial($f)
{
            $hasil=1;

            for($i=1; $i<$f ; $i++)
                        $hasil *= ($i+1);
            return $hasil;
}

function  permutasi($fakn, $fakd)
{
            return $fakn / $fakd;
}

function  permutasisama($fakn, $fakd, $fakd1, $fakd2, $fakd3)
{
            return $fakn / ($fakd*$fakd1*$fakd2*$fakd3);
}

function kombinasi($fakn, $fakr, $fakd)
{
            return $fakn / ($fakr*$fakd);
}

?>