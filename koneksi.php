<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "doni_database";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false) {
  echo "Koneksi ke server gagal";
  die();
}
// echo "koneksi berhasil";