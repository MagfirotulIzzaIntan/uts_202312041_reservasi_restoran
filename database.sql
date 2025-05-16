CREATE DATABASE restoran;

USE restoran;

CREATE TABLE reservasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    tanggal DATE NOT NULL,
    waktu TIME NOT NULL,
    jumlah_orang INT NOT NULL,
    catatan TEXT,
    tanggal_reservasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
