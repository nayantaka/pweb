<?php
$koneksi = mysqli_connect("localhost","root","","dbMhs");

// Check connection
if (mysqli_connect_errno()) {
  echo "Gagal Terhubung ke MySQL: " . mysqli_connect_error();
  exit();
}
?>