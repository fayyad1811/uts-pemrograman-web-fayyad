-- Membuat database baru
CREATE DATABASE IF NOT EXISTS pasien;
USE pasien;

-- Membuat tabel pasien sesuai gambar
CREATE TABLE pasien (
    id INT(11) NOT NULL AUTO_INCREMENT,
    kode VARCHAR(13) NOT NULL,
    nama_pasien VARCHAR(100) NOT NULL,
    tempat_lahir VARCHAR(60) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    jenis_kelamin ENUM('Pria', 'Wanita') NOT NULL,
    telepon VARCHAR(13) NOT NULL,
    alamat TEXT NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
