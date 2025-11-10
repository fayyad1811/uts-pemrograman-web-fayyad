<?php
include "config.php";

$id            = $_POST['id'];
$kode          = $_POST['kode'];
$nama_pasien   = $_POST['nama_pasien'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telepon       = $_POST['telepon'];
$alamat        = $_POST['alamat'];

$query = "UPDATE pasien SET 
            kode='$kode',
            nama_pasien='$nama_pasien',
            tempat_lahir='$tempat_lahir',
            tanggal_lahir='$tanggal_lahir',
            jenis_kelamin='$jenis_kelamin',
            telepon='$telepon',
            alamat='$alamat'
          WHERE id='$id'";

mysqli_query($conn, $query);

header("Location: index.php");
exit;
?>
