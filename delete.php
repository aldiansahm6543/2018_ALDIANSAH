<?php

include 'connect.php';

$conn->query("DELETE FROM rental_warnet WHERE id_kom='$_GET[id]'");

echo "<script>alert('Data telah terhapus');</script>";
echo "<script>location='data.php';</script>";

?>