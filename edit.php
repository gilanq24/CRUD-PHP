<?php 
require 'functions.php'; 

if (isset($_POST['edit'])) {

	if (edit($_POST) > 0) {
		# code...
		echo "

			<script>
			alert('Data Berhasil Di ubah');
			window.location.href = 'data.php';
			</script>


		";
	}else {

		echo "

			<script>

			alert('Data Gagal Diubah');
			window.location.href = 'data.php';

			</script>


		";

	}
}
$id = $_GET['id'];
$info = query("SELECT * FROM tb_siswa WHERE nis='$id'")[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Siswa</title>
</head>
<body>
	<center>
		<font>Silahkan Edit Data Siswa Nya</font>
		<hr>
		<br>
		<form action="" method="POST">
			<input type="hidden" name="nis" value="<?= $info['nis'];?>">
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama" value="<?= $info['nama_lengkap'];?>">
			<br>
			<br>
			<label for="alamat">Alamat : </label>
			<input type="text" name="alamat" id="alamat" value="<?= $info['alamat'];?>">
			<br>
			<br>
			<label for="jurusan">Jurusan : </label>
			<input type="text" name="jurusan" id="jurusan" value="<?= $info['jurusan'];?>">
			<br>
			<br>
			<button type="submit" name="edit">Edit</button>
		</form>
		<hr>
	</center>
</body>
</html>