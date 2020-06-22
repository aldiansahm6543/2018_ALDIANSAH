<html>
<head>
<title>.:: Latihan Format String::.</title>
</head>
<body>
<font face=verdana size=2>
<?php
$angka1=78.79;
$angka2=23.31;
$angka=$angka1+$angka2;
echo ($angka);
echo ("<br>");
$format=printf("%01.2f",
$angka);
echo("$format<br>");
$year=1972;
$month=11;
$day=9;
$tanggal=sprintf("%02d-%02d-%04d",$day,$month,
$year);
echo ($tanggal);
?>
</body>
</html>