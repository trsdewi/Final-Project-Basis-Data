<?php
require 'functions.php';

	if( isset($_POST['register'])){
		if(register($_POST) > 0 ){
			echo "<script>
					alert('user baru berhasil ditambahkan!')
			</script>";
		} else {
			echo mysqli_error($connect);
		}
	}

//Tampilan sementara
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Registrasi</title>
</head>
<body>

	<h1>Halaman Registrasi</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username	:</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password	:</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="konfirm">Konfirmasi Password :</label>
				<input type="password" name="konfirm" id="konfirm">
			</li>
			<li>
				<button type="submit" name="register">Register!</button>
			</li>
		</ul>
	</form>

	<br><br> 
	<a href="login.php">Login</a>
</body>
</html>