<!DOCTYPE html>
<html>

<head>
  <title>Pasien</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body background="1.jpg">
  <div class="container my-5">
    <a style="float:right" href="login.php" class="btn btn-primary">Logout</a>
    <center>
      <h1><b> Data Pasien</b></h1><br>
    </center>
    <table class="table table-striped">
      <thead class="table_-primary">
        <tr>
          <th scope="col">ID Pasien</th>
          <th scope="col">Nama Pasien</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">Agama</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">No.tlpn</th>
          <th scope="col">Keluhan</th>
          <th scope="col">Dokter</th>
          <th scope="col">Tgl Masuk</th>
          <th scope="col">Opsi</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        $query = mysqli_query($conn, "select * from pasien p join dokter d on d.sip=p.sip");
        while ($data = mysqli_fetch_array($query)) { ?>
          <tr>
            <td> <?= $data['id_pasien']; ?></td>
            <td> <?= $data['nama_pasien']; ?></td>
            <td> <?= $data['jenkel']; ?></td>
            <td> <?= $data['alamat']; ?></td>
            <td> <?= $data['agama']; ?></td>
            <td> <?= $data['tgl_lahir']; ?></td>
            <td> <?= $data['tlpn']; ?></td>
            <td> <?= $data['keluhan']; ?></td>
            <td> <?= $data['nama_dokter']; ?></td>
            <td> <?= $data['tgl_masuk']; ?></td>
            <th><a href="edit_pasien.php?id_pasien=<?php echo $data['id_pasien']; ?>" class="btn btn-info">Edit</a></th>
            <th><a href="hapus_pasien.php?id_pasien=<?php echo $data['id_pasien']; ?>" class="btn btn-danger">Hapus</a></th>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="input_pasien.php" class="btn btn-primary">Add</a>
  </div>
</body>

</html>