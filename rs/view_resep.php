<!DOCTYPE html>
<html>

<head>
  <title>Pasien</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <a style="float:right" href="login.php" class="btn btn-primary">Logout</a>
    <center>
      <h1><b> Resep </b></h1><br>
    </center>
    <table class="table table-striped">
      <thead class="table_-primary">
        <tr>
          <th scope="col">ID Resep</th>
          <th scope="col">ID Pasien</th>
          <th scope="col">SIP</th>
          <th scope="col">Nama Obat</th>
          <th scope="col">Jenis Obat</th>
          <th scope="col">Jumlah</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        $sip = $_GET['sip'];
        $query = mysqli_query($conn, "select * from rspobat ro join obat o on ro.id_obat=o.id_obat where sip='$sip'");
        while ($data = mysqli_fetch_array($query)) { ?>
          <tr>
            <td> <?= $data['id_resep']; ?></td>
            <td> <?= $data['id_pasien']; ?></td>
            <td> <?= $data['sip']; ?></td>
            <td> <?= $data['nama_obat']; ?></td>
            <td> <?= $data['jenis_obat']; ?></td>
            <td> <?= $data['jumlah']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>