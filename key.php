<!DOCTYPE html>
<html>
<head>
	<title>Seblum Foreach</title>
</head>
<body>
	<h1>Belajar Php</h1>
	<h3>Struktur Looping Foreach</h3>
	<?php
	$nama = array(
		1=>"Ade",
		6=>"Bayu",
		12=>"Chandra",
		45=>"Didi",
		55=>"Endang"
		);
	foreach ($nama as $kunci=>$isi){

		echo "Urutan ke-$kunci adalah $isi";
		echo "<br/>";
	}
	?>
</body>
</html>