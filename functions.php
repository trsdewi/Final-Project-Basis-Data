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