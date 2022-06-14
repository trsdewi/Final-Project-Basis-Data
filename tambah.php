<?php
require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
// cek data berhasil ditambah atau tidak
	if (tambah($_POST) > 0){
		echo "
		<script>
		alert('Data berhasil ditambahkan!');
		document.location.href = 'stockbarang.php';
		</script>
		";
	} else {
		echo "<script>
		alert('Gagal!');
		document.location.href = 'stockbarang.php';
		</script>";
	}

} else if(isset($_POST["batal"])){
	header("Location: stockbarang.php");
}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Barang</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="form">
	<div class="wrap">
		<div class="container2">
	<h1>Tambah Data Barang</h1><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>Kode Barang</td>
				<td>:</td>
				<td><input type="text" name="kode_barang" id="kode_barang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" id="nama_barang"></td>
			</tr>
			<tr>
				<td>ID Supplier</td>
				<td>:</td>
				<td><input type="text" name="id_supplier" id="id_supplier"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori" id="kategori"></td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td>:</td>
				<td><input type="text" name="satuan" id="satuan"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="stock" id="stock"></td>
			</tr>
			<tr>
				<td>Harga Satuan</td>
				<td>:</td>
				<td><input type="text" name="harga_satuan" id="harga_satuan"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="submit" name="submit">Tambah</button>
					<button type="submit" name="batal">Batal</button>
				</td>
			</tr>
		</table>
	</form>
	</div>
	</div>

</body>
</html>

<?php  /*
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Barang</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="form">
	<div class="wrap">
		<div class="container2">
	<h1>Tambah Data Barang</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="kode_barang">Kode Barang	: <input type="text" name="kode_barang" id="kode_barang"></label>
			</li>
			<li>
				<label for="nama_barang">Nama Barang	: <input type="text" name="nama_barang" id="kode_barang"></label>
			</li>
			<li>
				<label for="id_supplier">ID Supplier	: <input type="text" name="id_supplier" id="id_supplier"></label>
			</li>
			<li>
				<label for="jenis">Kategori	: <input type="text" name="kategori" id="kategori"></label>
			</li>
			<li>
				<label for="satuan">Satuan	: <input type="text" name="satuan" id="satuan"></label>
			</li>
			<li>
				<label for="stock">Jumlah	: <input type="text" name="stock" id="stock"></label>
			</li>
			<li>
				<label for="harga_satuan">Harga Satuan	: <input type="text" name="harga_satuan" id="harga_satuan"></label>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
		
	</form>
	</div>
	</div>

</body>
</html>
*/ ?>