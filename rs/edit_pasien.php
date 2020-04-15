<!DOCTYPE html>
<html>

<head>
	<title>Edit</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-info">
	<?php
	include "koneksi.php";
	$id_pasien = $_GET['id_pasien'];
	$query = mysqli_query($conn, "SELECT * FROM pasien where id_pasien = $id_pasien");
	$data = mysqli_fetch_array($query);
	?>

	<div class="container bg-light p-3 my-5 rounded col-lg-8">
		<center>
			<h1><b>Edit Data pasien</b></h1><br>
		</center>
		<form method="POST" action="update_pasien.php">
			<input type="hidden" class="form-control" name="id_pasien" value="<?= $data['id_pasien']; ?>"> </br>
			<div class="form-group">
				<label> ID Pasien </label>
				<input type="text" class="form-control" name="id_pasien" placeholder="Masukkan id_pasien" value="<?= $data['id_pasien']; ?>"></br>
			</div>
			<div class="form-group">
				<label> Nama Pasien </label>
				<input type="text" class="form-control" name="nama pasien" placeholder="Masukkan Nama Pasien" value="<?= $data['nama_pasien']; ?>"></br>
			</div>
			<label> Jenis Kelamin </label><br>
			<div class="form-check form-check-inline" value="<?= $data['jenkel']; ?>">
				<input type="radio" class="form-check-input" name="jenkel" value="Perempuan" required>Perempuan
				<input type="radio" class="form-check-input" name="jenkel" value="Laki-laki">Laki-laki</br>
			</div>
			<div class="form-group"><br>
				<label> Alamat </label>
				<input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="<?= $data['alamat']; ?>"></br>
			</div>
			<div class="form-group">
				<label> Agama </label>
				<select name="agama" class="form-control" value="<?= $data['agama']; ?>">
					<option type="text" class="form-control" name="agama" placeholder="Agama" value="Islam">Islam</option>
					<option type="text" class="form-control" name="agama" placeholder="Agama" value="Kristen">Kristen</option>
					<option type="text" class="form-control" name="agama" placeholder="Agama" value="Katolik">Katolik</option>
					<option type="text" class="form-control" name="agama" placeholder="Agama" value="Budha">Buddha</option>
					<option type="text" class="form-control" name="agama" placeholder="Agama" value="Hindu">Hindu</option>
				</select>
			</div>
			<div class="form-group">
				<label for="namapasien">Tanggal Lahir</label><br>
				<input id="datepicker" width=" 276" type="date" class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" value="<?= $data['tgl_lahir']; ?>">
				<script>
					$('#datepicker').datepicker({
						uiLibrary: 'bootstrap4'
					});
				</script>
			</div>
			<div class="form-group">
				<label> No.tlpn </label>
				<input type="text" class="form-control" name="tlpn" placeholder="Masukkan No.tlpn" value="<?= $data['tlpn']; ?>"></br>
			</div>
			<div class="form-group">
				<label> Keluhan </label>
				<input type="text" class="form-control" name="keluhan" placeholder="Masukkan Keluhan" value="<?= $data['keluhan']; ?>"></br>
			</div>
				<div class="form-group">
	      <?php
	        include "koneksi.php";
	        $query=mysqli_query($conn, "SELECT * FROM dokter");
	      ?>
	      <label>Pilih Dokter</label>
	        <select name="dokter">
	        <?php 
	        while ($data=mysqli_fetch_array($query)) {
	          ?>
	            <option value="<?=$data['nama_dokter']?>"><?= $data['nama_dokter']; ?></option>
	        <?php
	          }
	         ?>
	      </select>
	    </div>
			<div class="form-group">
				<label for="namapasien">Tanggal Masuk Pasien</label>
				<input id="datepicker" width=" 276" type="date" class="form-control" name="tgl_masuk" placeholder="Masukkan Tanggal Masuk" value="<?= $data['tgl_masuk']; ?>">
				<script>
					$('#datepicker').datepicker({
						uiLibrary: 'bootstrap4'
					});
				</script>
			</div>
			<br>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

</body>

</html>