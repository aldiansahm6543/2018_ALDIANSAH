<html>
<head>
	<title>Contoh Selesai Kondisi</title>
</head>
<body>
<font face=verdana size=2>
<?php
$nilai= $_POST['nilai'];
	echo "Nilai Ujian anda : $nilai<br>";
if($nilai >70)
{
	echo"Anda Kompeten<br>";
}
elseif($nilai <70)
{
	echo"Nilai Anda Kurang<br>";
}
	
?>
</body>
</html>
