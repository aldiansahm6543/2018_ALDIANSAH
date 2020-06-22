<html>
<head>
<title>belajar php</title>
<body>
<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "code1dek";
	$koneksi = new PDO('mysql://host;
		dbname=$db', $user, $password);
	if (koneksi) {
		echo "berhasil";
	}else {
		echo "salah";
	


?>

</body>
</head>
</html>