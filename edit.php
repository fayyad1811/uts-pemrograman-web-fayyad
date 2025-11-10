<?php
include "config.php";

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pasien WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pasien</title>
</head>
<body>

<h2>Edit Data Pasien</h2>

<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    Kode:<br>
    <input type="text" name="kode" value="<?= $data['kode']; ?>" required><br><br>

    Nama Pasien:<br>
    <input type="text" name="nama_pasien" value="<?= $data['nama_pasien']; ?>" required><br><br>

    Tempat Lahir:<br>
    <input type="text" name="tempat_lahir" value="<?= $data['tempat_lahir']; ?>" required><br><br>

    Tanggal Lahir:<br>
    <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>" required><br><br>

    Jenis Kelamin:<br>
    <select name="jenis_kelamin">
        <option value="Pria" <?= ($data['jenis_kelamin'] == 'Pria') ? 'selected' : ''; ?>>Pria</option>
        <option value="Wanita" <?= ($data['jenis_kelamin'] == 'Wanita') ? 'selected' : ''; ?>>Wanita</option>
    </select><br><br>

    Telepon:<br>
    <input type="text" name="telepon" value="<?= $data['telepon']; ?>" required><br><br>

    Alamat:<br>
    <textarea name="alamat" required><?= $data['alamat']; ?></textarea><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
