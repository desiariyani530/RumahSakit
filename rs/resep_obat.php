<!DOCTYPE html>
<html lang="en">

<head>
  <title>Input</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
  <?php
  include "koneksi.php";

  $id_pasien = $_GET['id_pasien'];
  $sip = $_POST['sip'];
  $nama_obat = $_POST['nama_obat'];
  $jumlah = $_POST['jumlah'];

  // var_dump($conn);
  $query = mysqli_query($conn, "insert into rspobat values ('', '$id_pasien', '$sip', '$nama_obat', '$jumlah')");
  // var_dump($query);
  if ($query) {
    ?>
    <div class="container col-5 bg-info my-5 rounded ">
      <h1 class="text-light text-center mb-2">Proses Input Berhasil </h1>
      <br>
      <h1 class="text-light text-center mb-2">Lihat Hasil <a href="view_resep.php?sip=<?= $sip ?>" class="text-danger">Disini</h1>
    </div>
  <?php
  } else {
    ?>
    <h1 class="text-info">Proses Input Gagal </h1>
  <?php
  } ?>
</body>

</html>