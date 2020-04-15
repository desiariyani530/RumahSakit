<html>

<head>
  <title>Rumah Sakit Mata</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body background="1.jpg">
  <div class="container my-5">
    <center>
      <h1><b> Input Resep Obat </b></h1><br>
    </center>
    <form action="resep_obat.php?id_pasien=<?= $_GET['id_pasien'] ?>" method="POST">
      <!-- form -->
      <div class="form-group">
        <?php
        include "koneksi.php";
        $sip = $_GET['sip'];
        $query = mysqli_query($conn, "SELECT * FROM dokter where sip='$sip'");
        ?>
        <label>SIP</label>
        <?php
        $data = mysqli_fetch_array($query);
        ?>
        <br>
        <input readonly value="<?= $data['sip'] ?>" name="sip">
      </div>

      <div class=" form-group">
        <label>Nama Obat</label>
        <select name="nama_obat">
          <?php
          $query = mysqli_query($conn, "SELECT * FROM obat");
          while ($dataobat = mysqli_fetch_array($query)) {
            ?>

            <option value="<?= $dataobat['id_obat'] ?>"><?= $dataobat['nama_obat'] ?></option>
          <?php } ?>
        </select>
        <!-- <input type="text" class="form-control" placeholder="Masukkan Nama Obat" name="nama_obat" required> -->
      </div>
      <label>jumlah</label>
      <input type="text" class="form-control" placeholder="Masukkan jumlah" name="jumlah" required>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <!-- form end -->
  </div>
</body>

</html>