<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>welcome page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<!-- <div class="container bg-light my-5 col-5 p-3 rounded">
  <?php
  if ($result == true) {
    ?>
    <div>
      <center>
        <h2 class="text-info">Selamat <b><?php echo ($user); ?></b>, anda <b>berhasil login</b></h2>
        <ion-icon name="checkmark-circle" size="large" class="text-info"></ion-icon>
      </center>
    </div>
  <?php
  } elseif ($result1 == true) {
    ?>
    <div>
      <center>
        <h2 class="text-info">Maaf <b><?php echo ($user); ?></b>, password anda <b>salah</b></h2>
        <ion-icon name="close-circle" size="large" class="text-info"></ion-icon><br>
      </center>
    </div>
  <?php
  } else {
    ?>
    <div>
      <center>
        <h2 class="text-info">Maaf, anda <b>gagal login</b></h2>
        <ion-icon name="close-circle" size="large" class="text-info"></ion-icon>
      </center>
    </div>
  <?php
  }
  ?>
</div>
<center>
  <a href="login.php">
    <button type="button" class="btn btn-outline-light">Back</button>
  </a>
</center>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->

<body background="4.jpg">
  <center>
    <h1>Login Petugas</h1>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <form method="POST" action="cek_kasir.php">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter user">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    </div>
    </div>
  </center>
</body>

</html>