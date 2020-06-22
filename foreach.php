<!DOCTYPE html>
<html>
<head>
	<title>Seblum Foreach</title>
</head>
<body>
	<h1>Belajar Php</h1>
	<h3>Struktur Looping Foreach</h3>
	<?php
	$nama=array("Ade","Bayu","Candra","Didi","Endang");
	foreach ($nama as $val){

		echo "$val";
		echo "<br/>";
	}
	?>
</body>
</html>