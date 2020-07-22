<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "kepangkatan");
?>
<?php 


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$email = mysqli_real_escape_string($conn, $data["email"]);
	$nama = mysqli_real_escape_string($conn, $data["nama"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM daftar WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}

	// if ($username == 0){
	// 	echo "<script>
	// 			alert('Silahkan Lengkapi Data !')
	// 	      </script>";
	// 	return false;
	// }
	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO daftar VALUES('', '$username','$email','$nama','$password')");

	return mysqli_affected_rows($conn);

}



function cari($keyword){
	$query = "SELECT * FROM kejati_sumsel
				WHERE
			  tahun_ke LIKE '%$keyword%' OR
			  nrp LIKE '%$keyword%' OR
			  nama LIKE '%$keyword%' 
			";
	return query($query);
}




?>