<html>

<head>
  <title>Rumah Sakit Mata</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body background="1.jpg">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">RS Mata</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php">Input Data Pasien<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="view_pasien.php">View Data</a>

        <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
      </div>
    </div>
  </nav>
  <!-- navbar end -->
  <form action="pasien.php" method="POST">
    <!-- form -->

    <div class="form-group">
      <label>Nama Pasien</label>
      <input type="text" class="form-control" placeholder="Masukkan Nama Pasien" name="nama_pasien" required>
    </div>
    <label>Jenis Kelamin</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="jenkel" value="Perempuan" required>
      <label class="form-check-label">Perempuan</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="jenkel" value="Laki-laki">
      <label class="form-check-label">Laki-laki</label>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" required>
    </div>
    <div class="form-group">
      <label>Agama</label>
      <select class="form-control" placeholder="Pilih" name="agama">
        <option>Pilih</option>
        <option>Islam</option>
        <option>Kristen</option>
        <option>Katolik</option>
        <option>Hindu</option>
        <option>Budha</option>
      </select>
    </div>
    <div class="form-group">
      <label for="namapasien">Tanggal Lahir</label>\
      <input type="date" name="TTL" id="datepicker" width="276" />
      <script>
        $('#datepicker').datepicker({
          uiLibrary: 'bootstrap4'
        });
      </script>
    </div>
    <div class="form-group">
      <label>No.Tlpn</label>
      <input type="text" class="form-control" placeholder="Masukkan No.tlpn" name="tlpn">
    </div>
    <div class="form-group">
      <label>Keluhan</label>
      <input type="text" class="form-control" placeholder="Masukkan Keluhan" name="keluhan">
    </div>
    <div class="form-group">
      <?php
      include "koneksi.php";
      $query = mysqli_query($conn, "SELECT * FROM dokter");
      ?>
      <label>Pilih Dokter</label>
      <select name="dokter">
        <?php
        while ($data = mysqli_fetch_array($query)) {
          ?>
          <option value="<?= $data['sip'] ?>"><?= $data['nama_dokter']; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="namapasien">Tanggal Masuk Pasien</label>
      <input type="date" name="tgl_masuk" id="datepicker" width="276" />
      <script>
        $('#datepicker').datepicker({
          uiLibrary: 'bootstrap4'
        });
      </script>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <!-- form end -->
</body>

</html>