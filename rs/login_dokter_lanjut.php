<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Login Dokter</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

<body background="4.jpg">
  <center>
    <h1><b> Login Dokter </b></h1><br>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <form method="POST" action="cek_dokter.php">
          <div class="form-group">
            <label for="user">Username</label>
            <input type="text" class="form-control" id="user" name="username" aria-describedby="emailHelp" placeholder="Enter user">
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