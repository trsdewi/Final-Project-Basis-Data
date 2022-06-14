<?php
require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


// cek data berhasil ditambah atau tidak
	if (masuk($_POST) > 0){
		echo "
		<script>
		alert('Data berhasil ditambahkan!');
		document.location.href = 'brg_masuk.php';
		</script>
		";
	} else {
		echo "<script>
		alert('Gagal!');
		document.location.href = 'brg_masuk.php';
		</script>";
	}

}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Barang Masuk</title>
</head>
<body>
	<h1>Input Barang Masuk</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="id_transaksi">ID Transaksi	: <input type="text" name="id_transaksi" id="id_transaksi"></label>
			</li>
			<li>
				<label for="tanggal">Tanggal	: <input type="text" name="tanggal" id="tanggal"></label>
			</li>
			<li>
				<label for="kode_barang">Kode Barang	: <input type="text" name="kode_barang" id="kode_barang"></label>
			</li>
			<li>
				<label for="nama_barang">Nama Barang	: <input type="text" name="nama_barang" id="nama_barang"></label>
			</li>
			<li>
				<label for="supplier">Supplier	: <input type="text" name="supplier" id="supplier"></label>
			</li>
			<li>
				<label for="jumlah">Jumlah	: <input type="text" name="jumlah" id="jumlah"></label>
			</li>
			<li>
				<label for="satuan">Satuan	: <input type="text" name="satuan" id="satuan"></label>
			</li>
			<li>
				<button type="submit" name="submit">Simpan</button>
			</li>
		</ul>
		
	</form>

</body>
</html>