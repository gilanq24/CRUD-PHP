<?php 
require 'functions.php'; 

if (isset($_POST['kirim'])) {

	if (tambah($_POST) > 0) {
		# code...
		echo "

			<script>
			alert('Data Berhasil Ditambahkan');
			window.location.href = 'data.php';
			</script>


		";
	}else {

		echo "

			<script>

			alert('Data Gagal Ditambahkan');
			window.location.href = 'index.php';

			</script>


		";

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Siswa</title>
</head>
<body>
	<center>
		<font>Silahkan Inputkan Data Siswa Nya</font>
		<hr>
		<br>
		<form action="" method="POST">
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama">
			<br>
			<br>
			<label for="alamat">Alamat : </label>
			<input type="text" name="alamat" id="alamat">
			<br>
			<br>
			<label for="jurusan">Jurusan : </label>
			<input type="text" name="jurusan" id="jurusan">
			<br>
			<br>
			<button type="submit" name="kirim">Kirim</button>
		</form>
		<hr>
	</center>
</body>
</html>