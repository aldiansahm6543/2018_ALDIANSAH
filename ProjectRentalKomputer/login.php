<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/style7.css">
</head>
<body>
	<form action="" method="post">
		<h2>login</h2>
		<br>
			<input type="text" name="username" placeholder="Username...">
			<input type="password" name="password" placeholder="Password...">
			<br>
			<button type="submit" name="login" class="btn btn-">Login</button>
	</form>

	<?php
	//koneksi
	$conn= new mysqli("localhost","root","","project_aldi")or die(mysqli_errno());

	if (isset($_POST['user'])) {
	//cek database
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = $conn->query("select * from user where username='$username' AND password=md5('$password')");
		$data = mysqli_fetch($query);
		$num = mysqli_num_rows($query);

	if ($data['level']=="admin"){
		header('location: admin.php');
	}else if($data['level']=="user"){
		header('location: user.php');
	}

}
?>


</body>
</html>