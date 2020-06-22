<?php
$conn = new mysqli("localhost","root","","codewandek")or die(mysqli_error());

$mysql = "INSERT INTO rental_warnet (nama_kom,jenis_kom,deskripsi)
		VALUES('$_POST[nama]','$_POST[jenis]','$_POST[spesifikasi]')";
if(mysqli_query($conn,$mysql)){
echo "<script>alert('Data Telah Ditambahkan');</script>";
	echo "<script>location='data.php';</script>";
}
?>