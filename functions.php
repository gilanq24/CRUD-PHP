<?php  
// koneksi ke database
$connect = mysqli_connect("localhost","root","","db_siswa");

// Nama Table Sama Databasenya Sesuaikan Sendiri We.

// fungsi tambah data

function tambah($data){

	global $connect;
	$nama = $data['nama'];
	$alamat = $data['alamat'];
	$jurusan = $data['jurusan'];

	$query = "INSERT INTO tb_siswa(nama_lengkap,alamat,jurusan) VALUES('$nama','$alamat','$jurusan')";

	mysqli_query($connect, $query);

	return mysqli_affected_rows($connect);
}

// fungsi query (mengambil data dari database)

function query($query){

	global $connect;
	$result = mysqli_query($connect, $query);
	$row = [];
	while ($rows = mysqli_fetch_assoc($result)) {
		$row[] = $rows;
	}

	return $row;

}

// fungsi hapus
function hapus($id) {

	global $connect;
	mysqli_query($connect, "DELETE FROM tb_siswa WHERE nis=$id");
	return mysqli_affected_rows($connect);

}

// fungsi edit data

function edit($data){

	global $connect;
	$id = $data['nis'];
	$nama = $data['nama'];
	$alamat = $data['alamat'];
	$jurusan = $data['jurusan'];

	$query = "UPDATE tb_siswa SET 

		nama_lengkap = '$nama',
		alamat = '$alamat',
		jurusan = '$jurusan'

		WHERE nis=$id
	";

	mysqli_query($connect, $query);

	return mysqli_affected_rows($connect);
}

// fungsi mencari data
function cari($keyword){

	$query = "SELECT * FROM tb_siswa WHERE 
	
	nama_lengkap LIKE '%$keyword%' OR
	alamat LIKE '%$keyword%' OR
	jurusan LIKE '%$keyword%'
	";

	return query($query);

}

?>
