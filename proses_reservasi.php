<?php
include 'koneksi.php';
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    $tanggal = $_POST["tanggal"];
    $waktu = $_POST["waktu"];
    $jumlah_orang = $_POST["jumlah_orang"];
    $catatan = $_POST["catatan"];

    $sql = "INSERT INTO reservasi (nama, email, telepon, tanggal, waktu, jumlah_orang, catatan)
            VALUES ('$nama', '$email', '$telepon', '$tanggal', '$waktu', '$jumlah_orang', '$catatan')";

    if ($koneksi->query($sql) === TRUE) {
        echo "<div style='font-family: sans-serif; background-color: #f0f8f0; padding: 20px; border-radius: 8px; border: 1px solid #e0eee0; margin: 20px auto; max-width: 500px; text-align: center;'>";
        echo "<h2 style='color: #2e8b57;'>Reservasi Berhasil!</h2>";
        echo "<p>Terima kasih atas reservasi Anda.</p>";
        echo "<p>Detail Reservasi:</p>";
        echo "<ul>";
        echo "<li>Nama: " . htmlspecialchars($nama) . "</li>";
        echo "<li>Email: " . htmlspecialchars($email) . "</li>";
        echo "<li>Telepon: " . htmlspecialchars($telepon) . "</li>";
        echo "<li>Tanggal: " . htmlspecialchars($tanggal) . "</li>";
        echo "<li>Waktu: " . htmlspecialchars($waktu) . "</li>";
        echo "<li>Jumlah Orang: " . htmlspecialchars($jumlah_orang) . "</li>";
        if (!empty($catatan)) {
            echo "<li>Catatan: " . htmlspecialchars($catatan) . "</li>";
        }
        echo "</ul>";
        echo "</div>";
    } else {
        echo "<div style='font-family: sans-serif; background-color:rgb(11, 150, 113); padding: 20px; border-radius: 8px; border: 1px solid #ffc0cb; margin: 20px auto; max-width: 500px; text-align: center;'>";
        echo "<h2 style='color: #dc143c;'>Terjadi Kesalahan!</h2>";
        echo "<p>Maaf, terjadi kesalahan saat menyimpan data reservasi: " . $conn->error . "</p>";
        echo "</div>";
    }

    $koneksi->close();
}
?>
