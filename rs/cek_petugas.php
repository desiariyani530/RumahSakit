<?php
	include 'koneksi.php';
	$username = $_POST['user'];
	$password = $_POST['password'];
	$sql = "select * FROM admin";
	$data = mysqli_query($conn, $sql);

	// $result = false;
	// $result1 = false;
	while ($row = mysqli_fetch_object($data)) {
	  if ($username == $row->username && $password == $row->password) {
	    // $result = true;
	    // $user = $row->user;
	    header("location: input_pasien.php");
	  } if ($username == $row->username && $password != $row->password) {
	    // $result1 = true;
	    // $user = $row->user;
	    header("location: login_petugas.php");
	  }
	}
?>