<!DOCTYPE html>
<html>

<head>
  <title>Pasien</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body background="1.jpg">
  <div class="container my-5">
    <a style="float:right" href="index.php" class="btn btn-primary">Logout</a>
    <center>
      <h1><b> Resep </b></h1><br>
    </center>
    <table class="table table-striped">
      <thead class="table_-primary">
        <tr>
          <th scope="col">ID Resep</th>
          <th scope="col">Nama Pasien</th>
          <th scope="col">Nama Dokter</th>
          <th scope="col">tarif</th>
          <th scope="col">Nama Obat</th>
          <th scope="col">Jenis Obat</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Harga</th>
          <th scope="col">Total</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        $id_pasien = $_GET['id_pasien'];
        $jumlah = 0;
        $query = mysqli_query($conn, "select * from pasien p join dokter d on d.sip=p.sip join rspobat r on r.id_pasien='$id_pasien' join obat o on r.id_obat=o.id_obat where p.id_pasien = '$id_pasien' ");
        while ($data = mysqli_fetch_array($query)) { ?>
          <tr>
            <td> <?= $data['id_resep']; ?></td>
            <td> <?= $data['nama_pasien']; ?></td>
            <td> <?= $data['nama_dokter']; ?></td>
            <td> <?= $data['tarif']; ?></td>
            <td> <?= $data['nama_obat']; ?></td>
            <td> <?= $data['jenis_obat']; ?></td>
            <td> <?= $data['jumlah']; ?></td>
            <td><?= $data['harga']; ?></td>
            <td><?= $data['harga'] * $data['jumlah']; ?></td>
            <?php
              $jumlah = $jumlah + ($data['harga'] * $data['jumlah']);
              ?>
          </tr>
        <?php } ?>
        <tr>
          <th>Total Bayar :</th>
          <td><?= $jumlah + $data['tarif'] ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>