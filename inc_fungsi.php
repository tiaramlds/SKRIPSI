<?php
function url_dasar()
{
  //$_SERVER['SERVER_NAME'] : alamat website
  //$_SERVER['SERVER_NAME'] : directory website --> ...com/blog/ $_SERVER['SERVER_NAME'] : blog
  $url_dasar = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']);
  return $url_dasar;
}
function ambil_gambar($id_tulisan)
{
  global $koneksi;
  $sql1 = " select * from page where id = '$id_tulisan'";
  $q1  = mysqli_query($koneksi, $sql1);
  $r1  = mysqli_fetch_array($q1);
  $text = $r1['Isi'];

  preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
  $gambar = $img[1];
  $gambar = str_replace("../gambar/", url_dasar() . "/gambar/", $gambar);
  return $gambar;
}

function ambil_kutipan($id_tulisan)
{
  global $koneksi;
  $sql1  = "select * from page where id = '$id_tulisan'";
  $q1    = mysqli_query($koneksi, $sql1);
  $r1    = mysqli_fetch_array($q1);
  $text  = $r1['Kutipan'];
  return $text;
}

function ambil_judul($id_tulisan)
{
  global $koneksi;
  $sql1  = "select * from page where id = '$id_tulisan'";
  $q1    = mysqli_query($koneksi, $sql1);
  $r1    = mysqli_fetch_array($q1);
  $text  = $r1['Judul'];
  return $text;
}

function ambil_isi($id_tulisan)
{
  global $koneksi;
  $sql1  = "select * from page where id = '$id_tulisan'";
  $q1    = mysqli_query($koneksi, $sql1);
  $r1    = mysqli_fetch_array($q1);
  $text  = strip_tags($r1['Isi']);
  return $text;
}

function bersihkan_judul($judul)
{
  $judul_baru   = strtolower($judul);
  $judul_baru   = preg_replace("/[^a-zA-Z0-9\s]/", "", $judul_baru);
  $judul_baru   = str_replace(" ", "-", $judul_baru);
  return $judul_baru;
}

function buat_link_halaman($id)
{
  global $koneksi;
  $sql1  = "select * from page where id = '$id'";
  $q1    = mysqli_query($koneksi, $sql1);
  $r1    = mysqli_fetch_array($q1);
  $judul = $r1['Judul'];
  // http://localhost/skripsi/page.php/5/judul
  return url_dasar() . "/page.php/$id/$judul";
}

function dapatkan_id()
{
  $id   = "";
  if (isset($_SERVER['PATH_INFO'])) {
    $id = dirname($_SERVER['PATH_INFO']);
    $id = preg_replace("/[^0-9]/", "", $id);
  }
  return $id;
}

function set_isi($isi)
{
  $isi   = str_replace("../gambar/", url_dasar() . "/gambar/", $isi);
  return $isi;
}

function maximum_kata($Isi, $maximum)
{
  $array_isi = explode(" ", $Isi);
  $array_isi = array_slice($array_isi, 0, $maximum);
  $Isi = implode(" ", $array_isi);
  return $Isi;
}

function brand_foto($id)
{
  global $koneksi;
  $sql1  = "select * from brand where id = 'id'";
  $q1    = mysqli_query($koneksi, $sql1);
  $r1    = mysqli_fetch_array($q1);
  $foto  = $r1['foto'];

  if ($foto) {
    return $foto;
  } else {
    return 'brand_defaultpicture.jpg';
  }
}
