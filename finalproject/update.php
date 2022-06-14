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
</head>
<body>
	<h1>Update Data Barang</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $brg["id"]; ?>">
		<ul>
			<li>
				<label for="kode_barang">Kode Barang	: </label>
					<input type="text" name="kode_barang" id="kode_barang" value="<?php echo $brg["kode_barang"];  ?>">
			</li>
			<li>
				<label for="nama_barang">Nama Barang	: </label>
					<input type="text" name="nama_barang" id="nama_barang" value="<?php echo $brg["nama_barang"]; ?>">
			</li>
			<li>
				<label for="id_supplier">ID Supplier	: </label>
					<input type="text" name="id_supplier" id="id_supplier" value="<?php echo $brg["id_supplier"] ?>">
			</li>
			<li>
				<label for="kategori">Kategori	: </label>
					<input type="text" name="kategori" id="kategori" value="<?php echo $brg["kategori"] ?>">
			</li>
			<li>
				<label for="satuan">Satuan	: </label>
					<input type="text" name="satuan" id="satuan" value="<?php echo $brg["satuan"] ?>">
			</li>
			<li>
				<label for="stock">Stock	: </label>
					<input type="text" name="stock" id="stock" value="<?php echo $brg["stock"] ?>">
			</li>
			<li>
				<label for="harga_satuan">Harga Satuan	: </label>
					<input type="text" name="harga_satuan" id="harga_satuan" value="<?php echo $brg["harga_satuan"] ?>">
			</li>
			<li>
				<button type="submit" name="submit">Update Data</button>
			</li>
		</ul>
		
	</form>

</body>
</html>
