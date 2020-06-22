<html>
<head>
	<title>Struktur Kendali Switch</title>
</head>
<body>
	<font face=verdana size=2>
<?php
$dino=date("l");
switch($dino)
{
	case "Monday";
		$hari="Senin";Break;
	case "Tuesday";
		$hari="Selasa";Break;
	case "Wednesday";
		$hari="Rabu";Break;
	case "Thursday";
		$hari="Kamis";Break;
	case "Friday";
		$hari="Juamat";Break;
	case "Saturday";
		$hari="Sabtu";Break;
	default:
		$hari="Minggu";
}
	echo"<h2>Hari ini adalah hari $hari</h3>";
?>
</body>
</html>
	
	