<?php 
// koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "finalproject");
 
 // fungsi registrasi
function register($data){
	global $connect;

	$username = strtolower(stripslashes($data["username"]));
	$password = $data["password"];
	$konfirm = $data["konfirm"];

	// cek username udh ada apa blum
	/*$result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
					alert('username sudah terdaftar!')
			</script>";
		return false;
	}*/

	// cek konfirmasi pass
	if ($password !== $konfirm) {
		echo "<script>
			alert('Konfirmasi password tidak sesuai!');
		</script>";
		return false;
	}

	// enkripsi pass
	$password = password_hash($password, PASSWORD_DEFAULT);

	// Kalo regis berhasil
	// Tambah user baru di database
	mysqli_query($connect, "INSERT INTO tb_user VALUES('', '$username', '$password' )");

	return mysqli_affected_rows($connect);
}

function query($query){
	global $connect;
	$result = mysqli_query($connect, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
 }

 function tambah($data){
 	global $connect;

 	$kode_barang = htmlspecialchars($data["kode_barang"]);
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$id_supplier = htmlspecialchars($data["id_supplier"]);
	$jenis = htmlspecialchars($data["jenis"]);
	$satuan = htmlspecialchars($data["satuan"]);
	$stock = $data["stock"];


	$query = "INSERT INTO barang VALUES
	('', '$kode_barang', '$nama_barang', '$id_supplier', '$jenis', '$satuan', '$stock')";
	mysqli_query($connect, $query);

	return mysqli_affected_rows($connect);
 }

 function delete($id){
 	global $connect;
 	mysqli_query($connect, "DELETE FROM barang WHERE id = $id");

 	return mysqli_affected_rows($connect);
 }

 function cari($key){
 	$query = "SELECT * FROM barang WHERE kode_barang LIKE '%$key%' OR nama_barang LIKE '%$key%' OR id_supplier LIKE '%$key%' OR jenis LIKE '%$key%' OR satuan LIKE '%$key%' OR stock LIKE '%$key%'
 	";

 	return query($query);
 }

 function update($data){
 	global $connect;

 	$id = $data["id"];
 	$kode_barang = htmlspecialchars($data["kode_barang"]);
	$nama_barang = htmlspecialchars($data["nama_barang"]);
	$id_supplier = htmlspecialchars($data["id_supplier"]);
	$jenis = htmlspecialchars($data["jenis"]);
	$satuan = htmlspecialchars($data["satuan"]);
	$stock = $data["stock"];

	$query = "UPDATE barang SET 
				kode_barang = '$kode_barang',
				nama_barang = '$nama_barang',
				id_supplier = '$id_supplier',
				jenis = '$jenis',
				satuan = '$satuan',
				stock = '$stock'
				WHERE id = $id
				";
	mysqli_query($connect, $query);

	return mysqli_affected_rows($connect);
 }
 ?>
