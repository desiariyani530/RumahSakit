<!DOCTYPE html>
<html>

<head>
	<title>Cek Dokter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body background="4.jpg">
	<?php
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select * FROM logdok";
	$data = mysqli_query($conn, $sql);

	$cek = 0;

	while ($row = mysqli_fetch_object($data)) {
		if ($username == $row->username && $password == $row->password) {
			$cek = 1;
			$sip = $row->sip;
		}
	}
	if ($cek == 1) {

		echo '<center>Login Berhasil</center>';
		?>
		<center>
			<a class="btn btn-primary" href="data_pasien.php?sip=<?= $sip ?>">Next Page</a>
		</center>

	<?php
	} else {
		echo "Login Gagal";
	}

	?>
</body>

</html>