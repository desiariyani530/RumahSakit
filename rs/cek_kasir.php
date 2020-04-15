<html>
<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * FROM admin_kasir";
$data = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_object($data)) {
  if ($username == $row->username && $password == $row->password) {
    // $result = true;
    // $user = $row->user;
    echo "ber";
    header("location: transp.php");
    // } if ($username == $row->username && $password != $row->password) {
    //   // $result1 = true;
    //   // $user = $row->user;
    //   header("location: login_petugas.php");
    // }
  } else {
    echo "asasasas";
  }
}
?>

</html>