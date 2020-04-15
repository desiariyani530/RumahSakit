<!DOCTYPE html>
<html>

<head>
  <title>transaksi</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body background="1.jpg">
  <div class="container my-5">
    <a style="float:right" href="index.php" class="btn btn-primary">Logout</a>
    <div>
      <!-- <form action="transaksi.php?id_pasien=1260" method="post">
        <input type="text" name="id_pasien">
        <input type="submit" value="cek">
      </form> -->

    </div>
    <center>
      <h1><b> TRANSAKSI </b></h1><br>
    </center>
    <table class="table table-striped">
      <thead class="table_-primary">
        <tr>

          <th scope="col">ID Resep</th>
          <th scope="col">Nama</th>
          <th scope="col">ID Obat</th>
          <th scope="col">Harga</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';

        $id_pasien = $_POST['id_pasien'];

        $jumlah = 0;
        $query = mysqli_query($conn, "select * from pasien p join dokter d on d.sip=p.sip join rspobat r on r.id_pasien='$id_pasien' join obat o on r.id_obat=o.id_obat where p.id_pasien = '$id_pasien' ");
        while ($data = mysqli_fetch_array($query)) { ?>
          <tr>
            <?php $sip = $data['sip']; ?>
            <!-- <td> <?= $data['id_transaksi']; ?></td> -->
            <td> <?= $data['id_resep']; ?></td>
            <td> <?= $data['nama_dokter']; ?></td>
            <td> <?= $data['id_obat']; ?></td>
            <!-- <td> <?= $data['nama_kasir']; ?></td> -->
            <!-- <td> <?= $data['total_bayar']; ?></td> -->
            <!-- <td> <?= $data['kembalian']; ?></td> -->
            <td><?= $data['harga'] * $data['jumlah']; ?></td>
            <?php
              $jumlah = $jumlah + ($data['harga'] * $data['jumlah']);
              ?>
          </tr>
        <?php } ?>
        <tr>
          <th>Total Bayar :</th><br>
          <?php
          $total = $jumlah + $data['tarif'];
          ?>
          <td><?= $total ?></td>
        </tr>
        <tr>

          <th>
            <form action="transaksi.php" method="post">
              <input type="hidden" name='id_pasien' value="<?= $id_pasien ?>">
              <input type="text" name="bayar" value="<?= isset($_POST['bayar']) ? $_POST['bayar'] : '' ?>">
              <input type="submit">
            </form>
          </th>
        </tr>
        <tr>
          <th>Kembalian :</th>
          <?php
          if (isset($_POST['bayar'])) {
            $bayar = $_POST['bayar'];
            $kembalian = $bayar - $total;
             $query = mysqli_query($conn, "insert into kasir values('','$sip','$id_pasien','$total','$bayar','$kembalian')");
              ?>
            <td><?= $_POST['bayar'] - $total ?></td>

          <?php
          }
          ?>
        </tr>
        <?php
       
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>