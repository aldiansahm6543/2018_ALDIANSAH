<html>
<head>
<title>Variabel dalam PHP</title>
<body>
<?php
//variabel bertipe integer
$a="5";
//variabel bertipe real
$b="2.5";
//variabel bertipe string
$komentar="Selamat Datang di PHP";
echo ("Nilai variabel a adalah = $a <br>"); //variabel bertipe integer
echo ("Nilai variabel b adalah = $b <br>"); //variabel bertipe real
echo ("Nilai variabel komentar adalah = $komentar<br>"); //variabel bertipe string
$hasil=$a.$b;
echo ("Hasil jumlah a dan b adalah = $hasil <br>"); //variabel bertipe double
$tgl = date("d F Y"); //variabel bertipe tanggal
$nama = "SMK PGRI 3 Malang";
$garis= "=====================================";
echo "<p>";
echo $garis."<br>";
echo $komentar. " Di Lab ". $nama. "<br>Belajar dengan giat ya.... <br>";
echo $garis."<br>";
echo "Tanggal".$tgl;
?>