<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "sistempendukungkeputusan";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  die("Gagal terkoneksi");
}
