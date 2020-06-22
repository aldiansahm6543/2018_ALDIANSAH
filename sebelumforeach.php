<!DOCTYPE html>
<html>
<head>
	<title>Seblum Foreach</title>
</head>
<body>
	<h1>Belajar Php</h1>
	<h3>Struktur Looping Foreach</h3>
	<?php
	$nama_biasa="saya biasa, S.pd";//variable bukan array
	$nama=array("Ade","Bayu","Candra","Didi","Endang");//array
	echo "$nama_biasa";
		echo "<br/>";
	for ($i=0; $i<5; $i++){

		echo "$nama[$i]";
		echo "<br/>";
	}
	?>
</body>
</html>