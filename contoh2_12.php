<html>
<head>
<title> Latihan Membuat Fungsi </title>
</head>
<body>
<font face=tahoma size=2>
<?php

function operasi_jumlah($a,$b)
{
$c=$a+$b;
$c2=$a-$b;
$c3=$a*$b;
$c4=$a/$b;
$c5=$a*$b+$a-$b;
$c6=$a%$b;
echo ("Hasil $a + $b = $c </br>");
echo ("Hasil $a - $b = $c2 </br>");
echo ("Hasil $a x $b = $c3 </br>");
echo ("Hasil $a : $b = $c4 </br>");
echo ("Hasil $a x $b + $a - $b = $c5 </br>");
echo ("Hasil $a mod $b = $c6 </br>");
}

operasi_jumlah(6,3);
?>
</body>
</html>