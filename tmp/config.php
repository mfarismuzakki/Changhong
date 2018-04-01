<?php
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'akun';

  $conn = mysqli_connect($server, $user, $pass);

  if (mysqli_connect_errno()) {
    echo "Koneksi ke basis data gagal: ".mysqli_connect_error();
  }
?>
