<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "rs";
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
  //jika gagal koneksi, proses dimatikan dengan die()
  exit();
  die('Maaf Koneksi Gagal :' . $connect->error);
}
