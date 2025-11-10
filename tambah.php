<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pasien</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e7f4ff; /* biru langit lembut */
            margin: 0;
            padding: 0;
        }

        .container {
            width: 380px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 12px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #0275d8;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #015c9c;
        }

        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #bcdfff;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 70px;
        }

        button {
            width: 100%;
            background: #009ffd;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0275d8;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 12px;
            color: #0275d8;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            color: #014f86;
        }
    </style>
</head>
<body>

<div class="container">

<h2>Tambah Data Pasien</h2>

<form action="simpan.php" method="post">

    <label>Kode:</label>
    <input type="text" name="kode" required>

    <label>Nama Pasien:</label>
    <input type="text" name="nama_pasien" required>

    <label>Tempat Lahir:</label>
    <input type="text" name="tempat_lahir" required>

    <label>Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required>

    <label>Jenis Kelamin:</label>
    <select name="jenis_kelamin">
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
    </select>

    <label>Telepon:</label>
    <input type="text" name="telepon" required>

    <label>Alamat:</label>
    <textarea name="alamat" required></textarea>

    <button type="submit">Simpan</button>

</form>

<a class="back-link" href="index.php">← Kembali ke Data Pasien</a>

</div>

</body>
</html>
