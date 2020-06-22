<html>
<head>
<title>.:: Latihan membuat input Output::.</title>
</head>
<body>
<font face=verdana size=4>
<?php
$sisi=5;
$volumekubus=$sisi*$sisi*$sisi;
$luaspermukaankubus=6*$sisi*$sisi;
echo "sisi = $sisi <br>";
echo "Volume Kubus Adalah = $volumekubus<br>";
echo "Luas permukaan kubus Adalah = $luaspermukaankubus<br>";


$panjang=10;
$lebar=10;
$tinggi=10;
$volumebalok=$panjang*$lebar*$tinggi;
$luasbalok=2*(($panjang*$lebar)+($panjang*$tinggi)+($lebar*$tinggi));
echo "Panjang = $panjang <br>";
echo "Lebar = $lebar <br>";
echo "Tinggi = $tinggi <br>";
echo "Volume Balok = $volumebalok <br>";
echo "Luas Balok = $luasbalok <br>";
?>
</body>
</html>