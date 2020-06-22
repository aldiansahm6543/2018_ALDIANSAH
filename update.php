<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
<?php
include 'connect.php';
$id=$_GET['id'];
$query="SELECT*FROM rental_warnet WHERE id_kom=$id";
$hasil=mysqli_query($conn,$query);
$data=mysqli_fetch_array($hasil);
?>
<from method="post" >
	<table width="400">
		<tr bgcolor="#f5f5f5">
			<td colspan="3">
				<h2>UPDATE PRODUK</h2>
			</td>
		</tr>
		<tr>
			<td>Id Komputer</td>
			<td>:</td>
			<td><?php echo $data['id_kom'];?></td>
		</tr>
		<tr>
			<td>Nama Komputer</td>
			<td>:</td>
			<td><input type="text"  name="nama"  value="<?php echo $data['nama_kom'];?>"></td>
		</tr>
		<tr>
			<td>Jenis Komputer</td>
			<td>:</td>
			<td><input type="text"  name="jenis"  value="<?php echo $data['jenis_kom'];?>"></td>
		</tr>
		<tr>
			<td>Deskripsi Komputer</td>
			<td>:</td>
			<td><textarea type="text"  name="deskripsi" rows="10"  value="<?php echo $data['deskripsi'];?>"></textarea></td>
		</tr>
		<tr>
		<td><button name="ubah">Update</button></td></tr>
	</table>
</body>
</html>
<?php
include 'connect.php';
if (isset($_POST['ubah']))
{	
	$conn->query("UPDATE produk SET nama_kom='$_POST[nama]',jenis_kom='$_POST[jenis]',deskripsi='$_POST[deskripsi]' WHERE id_kom='$_GET[id]'");
	echo "<script>alert('Data Telah Diubah');</script>";
	echo "<script>location='data.php';</script>";

}
?>