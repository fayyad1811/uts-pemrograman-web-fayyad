<?php
//Membuat halaman index.php untuk menampilkan data pasien
include "config.php";

$result = mysqli_query($conn, "SELECT * FROM pasien ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e7f4ff; /* biru muda lembut */
            margin: 20px;
        }

        h2 {
            color: #0275d8; /* biru */
        }

        a {
            text-decoration: none;
            font-weight: bold;
            color: #0275d8;
        }

        a:hover {
            color: #014f86;
        }

        /* TABEL */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        th {
            background: #009ffd; /* biru langit */
            color: white;
            padding: 12px;
            font-size: 14px;
        }

        td {
            padding: 10px;
            background: #f8fbff;
        }

        tr:nth-child(even) td {
            background: #e9f6ff; /* baris bergantian lebih biru */
        }

        tr:hover td {
            background: #d0ecff; /* hover lebih biru */
            transition: 0.2s;
        }

        /* Tombol Aksi */
        .btn-edit {
            color: #0d6efd;
            font-weight: bold;
        }

        .btn-edit:hover {
            color: #084298;
        }

        .btn-delete {
            color: #d9534f;
            font-weight: bold;
        }

        .btn-delete:hover {
            color: #b52b27;
        }
    </style>
</head>

<body>

<h2>Data Pasien</h2>
<a href="tambah.php">+ Tambah Data</a>
<br><br>

<table>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Pasien</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['kode']; ?></td>
            <td><?= $row['nama_pasien']; ?></td>
            <td><?= $row['tempat_lahir']; ?></td>
            <td><?= $row['tanggal_lahir']; ?></td>
            <td><?= $row['jenis_kelamin']; ?></td>
            <td><?= $row['telepon']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td>
                <a class="btn-edit" href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                <a class="btn-delete" 
                   href="hapus.php?id=<?= $row['id']; ?>" 
                   onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
