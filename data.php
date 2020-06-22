<html>
<head>
	<title>Rental komputer</title>
</head>
<body>
<h1>Data Komputer</h1>
<?php
		include 'connect.php';
		$query="SELECT * FROM rental_warnet";
		$result = mysqli_query($conn,$query);
		echo"<table border='0' cellpadding='4' cellspacing='4'>";
		echo "<tr bgcolor='lightblue' align='center'>
				<td><b>Id Komputer</b></td>
				<td><b>Nama Komputer</b></td>
				<td><b>Jenis Komputer</b></td>
				<td><b>Deskripsi</b></td>
				<td><b>Edit </b></td>
				<td><b>Hapus</b></td>
				</tr>";
				while ($data = mysqli_fetch_array($result)) {
					echo "<tr align='center'>
					<td>".$data['id_kom']."</td>
					<td>".$data['nama_kom']."</td>
					<td>".$data['jenis_kom']."</td>
					<td>".$data['deskripsi']."</td>";?>
				<td><i><a href="update.php?id=<?php echo $data['id_kom'];?> ">update</a></i> </td>
				<td><i><a href="delete.php?id=<?php echo $data['id_kom'];?>" >delete</a></i></td>
		</tr>
		<?php
	}
	echo "</table>";
	?>
	<h3><i><a href="insert.php" class="btn-primary">tambah data</a></i></h3>
</body>
</html>
