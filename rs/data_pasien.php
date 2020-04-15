<!DOCTYPE html>
<html>

<head>
	<title>Data Pasien</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body background="1.jpg">

	<?php
	include 'koneksi.php';
	$sip = $_GET['sip'];
	$sql = "select *, p.alamat from pasien p join dokter d on d.sip=p.sip where d.sip='$sip'";
	$data = mysqli_query($conn, $sql);
	?>
	<div class="container my-5">
		<a style="float:right" href="login.php" class="btn btn-primary">Logout</a>
		<center>
			<h1><b> Data Pasien </b></h1><br>
		</center>
		<table class="table table-striped">
			<thead class="table_-primary">
				<th scope="col">ID Pasien</th>
				<th scope="col">Nama Pasien</th>
				<th scope="col">Jenis Kelamin</th>
				<th scope="col">Alamat</th>
				<th scope="col">Agama</th>
				<th scope="col">Tanggal Lahir</th>
				<th scope="col">No.tlpn</th>
				<th scope="col">Keluhan</th>
				<th scope="col">Tgl Masuk</th>
				<th scope="col">Dokter</th>
				<th scope="col">Opsi</th>
			</thead>

			<?php
			while ($row = mysqli_fetch_object($data)) {
				?>

				<tr>
					<td> <?= $row->id_pasien ?> </td>
					<td> <?= $row->nama_pasien ?> </td>
					<td> <?= $row->jenkel ?> </td>
					<td> <?= $row->alamat ?> </td>
					<td> <?= $row->agama ?> </td>
					<td> <?= $row->tgl_lahir ?> </td>
					<td> <?= $row->tlpn ?> </td>
					<td> <?= $row->keluhan ?> </td>
					<td> <?= $row->tgl_masuk ?> </td>
					<td> <?= $row->nama_dokter ?> </td>
					<td> <a class="btn btn-primary" href="input_resep.php?sip=<?= $sip ?>&id_pasien=<?= $row->id_pasien ?>">Input Resep</a> </td>
				</tr>

			<?php
			}
			?>

		</table>
	</div>
</body>

</html>