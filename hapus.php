<?php  
require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0 ) {
	echo "

			<script>
			alert('Data Berhasil Dihapus');
			window.location.href = 'data.php';
			</script>


		";
}else {
	echo "
			<script>
			alert('Data Gagal Dihapus');
			window.location.href = 'data.php';
			</script>

		";
}


?>