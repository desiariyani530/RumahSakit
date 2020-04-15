<!DOCTYPE html>
<html>

<head>
	<title>YEY</title>
</head>

<body background="4.jpg">

	<?php  ?>

	<?php

	include 'koneksi.php';
	$id_pasien = $_POST['id_pasien'];
	$sql = "select * FROM pasien";
	$data = mysqli_query($conn, $sql);

	$cek = 0;

	while ($row = mysqli_fetch_object($data)) {
		if ($id_pasien == $row->id_pasien) {
			$cek = 1;
		}
	}
	if ($cek == 1) {
		echo "Login Berhasil";
		?>
		<center>
			<button><a href="resep_pasien.php?id_pasien=<?= $id_pasien ?>">Next Page</a></button>
		</center>
	<?php
	} else {
		echo "Login Gagal";
	}

	?>
</body>

</html>