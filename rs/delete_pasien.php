<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hapus</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
  <?php
  include "koneksi.php";
  $id_pasien = $_GET['id_pasien'];
  $query = mysqli_query($conn, "DELETE FROM pasien where id_pasien=$id_pasien");

  if ($query) {
    ?>
    <div class="container col-5 bg-info my-5 rounded ">
      <h1 class="text-light text-center mb-2">Proses Hapus Berhasil </h1>
      <br>
      <h1 class="text-light text-center mb-2">Lihat Hasil <a href="view_pasien.php" class="text-danger">Disini</h1>
    </div>
  <?php
  } else {
    ?>
    <h1 class="text-info">Proses Hapus Gagal </h1>
  <?php
  }
  ?>
</body>

</html>