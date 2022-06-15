<?php
require "functions.php";

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$brg = query ("SELECT * FROM barang WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


// cek data berhasil diubah atau tidak
	if (update($_POST) > 0){
		echo "
		<script>
		alert('Data berhasil diubah!');
		document.location.href = 'stockbarang.php';
		</script>
		";
	} else {
		echo "<script>
		alert('Data gagal diubah!');
		document.location.href = 'stockbarang.php';
		</script>";
	}

}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Data Barang</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head class="form">
	<div class="wrap">
		<div class="container2">
<body>
	<h1>Update Data Barang</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $brg["id"]; ?>">
		<table>
			<tr>
				<td>Kode Barang</td>
				<td>:</td>
				<td><input type="text" name="kode_barang" id="kode_barang" ></td>
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

</body>
</html>
