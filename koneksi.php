<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "restoran"; 
$koneksi = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
