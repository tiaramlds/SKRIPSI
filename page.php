<?php
include_once("inc/inc-koneksi.php");
include_once("inc/inc_fungsi.php");
//print_r($_SERVER);
$id = dapatkan_id();

$sql1  = "select * from page where id = '$id'";
$q1    = mysqli_query($koneksi, $sql1);
$n1    = mysqli_num_rows($q1);
$r1    = mysqli_fetch_array($q1);

$judul_halaman = $r1['Judul'];
?>
<?php include_once("inc_header.php") ?>

<?php
if ($judul_halaman == '') {
  echo "<div><p>Maaf data yang dimaksud tidak dapat ditemukan</p></div>";
} else {
?>
  <p class="deskripsi"><?php echo $r1['Kutipan'] ?></p>
  <h1><?php echo $r1['Judul'] ?></h1>
  <?php echo set_isi($r1['Isi']) ?>
<?php
}
?>
<?php include_once("inc_header.php") ?>

<?php include_once("inc_footer.php") ?>