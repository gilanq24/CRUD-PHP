<?php 

require 'functions.php';

$siswa = query("SELECT * FROM tb_siswa ORDER BY nis DESC");

// jika tombol cari ditekan maka timpa query kita.

if (isset($_POST["cari"])) {
	$siswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>

	<center>
		<a href="index.php">Tambah Data</a>
		<br>
		<br>
		<form action="" method="post">
			<input type="text" name="keyword" placeholder="Cari Berdasarkan Nama...">
			<button type="submit" name="cari">Cari!</button>
		</form>
		<br><br>
		<table cellpadding="10" cellspacing="0" border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Lengkap</th>
					<th>Alamat</th>
					<th>Jurusan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $iter = 1; ?>
				<?php foreach ($siswa as $data) : ?>
				<tr>
					<td><?= $iter; ?></td>
					<td><?= $data['nama_lengkap']; ?></td>
					<td><?= $data['alamat']; ?></td>
					<td><?= $data['jurusan'] ?></td>
					<td>
						<a href="edit.php?id=<?= $data['nis']; ?>">Edit |</a>
						<a href="hapus.php?id=<?= $data['nis']; ?>" onclick="return confirm('Apakah Anda Yakin?');">Hapus</a>
					</td>
				</tr>
				<?php $iter++; ?>
			<?php endforeach; ?>
			</tbody>
		</table>
	</center>

</body>
</html>