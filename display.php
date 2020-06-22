<?php
$link = mysqli_connect("localhost","root","","codewandek")or die(mysqli_error());
$query="SELECT * FROM rental_warnet";
$hasil=mysqli_query($link,$query);
 while ($row=mysqli_fetch_array($hasil)) {
	echo $row['nama_kom']; echo"&nbsp";
	echo $row['jenis_kom'];
	echo $row['deskripsi'];
	echo "<br/>";
}
?>