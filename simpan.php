<?php
//Menambahkan fitur tambah dan simpan data pasien
include "config.php";

$kode          = $_POST['kode'];
$nama_pasien   = $_POST['nama_pasien'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telepon       = $_POST['telepon'];
$alamat        = $_POST['alamat'];

$query = "INSERT INTO pasien (kode, nama_pasien, tempat_lahir, tanggal_lahir, jenis_kelamin, telepon, alamat)
          VALUES ('$kode', '$nama_pasien', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$telepon', '$alamat')";

mysqli_query($conn, $query);

header("Location: index.php");
exit;
?>
