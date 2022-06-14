<?php
require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


// cek data berhasil ditambah atau tidak
	if (tambahsupp($_POST) > 0){
		echo "
		<script>
		alert('Data berhasil ditambahkan!');
		document.location.href = 'supplier.php';
		</script>
		";
	} else {
		echo "<script>
		alert('Gagal!');
		document.location.href = 'supplier.php';
		</script>";
	}

}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Supplier</title>
</head>
<body>
	<h1>Input Data Supplier</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama_supplier">Nama Supplier	: <input type="text" name="nama_supplier" id="nama_supplier"></label>
			</li>
			<li>
				<label for="alamat">Alamat	: <input type="text" name="alamat" id="alamat"></label>
			</li>
			<li>
				<label for="telepon">Telepon	: <input type="text" name="telepon" id="telepon"></label>
			</li>
			<li>
				<button type="submit" name="submit">Simpan</button>
			</li>
		</ul>
		
	</form>

</body>
</html>
