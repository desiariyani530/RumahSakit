<!DOCTYPE html>
<html lang="en">

<head>
  <title>Update </title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
  <?php
  include 'koneksi.php';
  $id_pasien = $_POST['id_pasien'];
  $nama_pasien = $_POST['nama_pasien'];
  $jenkel = $_POST['jenkel'];
  $alamat = $_POST['alamat'];
  $agama = $_POST['agama'];
  $TTL = $_POST['tgl_lahir'];
  $tlpn = $_POST['tlpn'];
  $keluhan = $_POST['keluhan'];
  $dokter = $_POST['dokter'];
  $tgl_masuk = $_POST['tgl_masuk'];

  $query = mysqli_query($conn, "update pasien set id_pasien= '$id_pasien', nama_pasien= '$nama_pasien', jenkel = '$jenkel', 
  alamat = '$alamat',  agama = '$agama', tgl_lahir = '$TTL', tlpn = '$tlpn',  keluhan = '$keluhan',  tgl_masuk = '$tgl_masuk' where id_pasien = '$id_pasien'") or die(mysqli_error($conn));
  if ($query) {
    ?>
    <div class="container col-5 bg-info my-5 rounded ">
      <h1 class="text-light text-center mb-2">Proses Update Berhasil </h1>
      <br>
      <h1 class="text-light text-center mb-2">Lihat Hasil <a href="view_pasien.php" class="text-danger">Disini</h1>
    </div>
  <?php
  } else {
    ?>
    <h1 class="text-info">Proses Update Gagal </h1>
  <?php
  }
  ?>
</body>

</html>