<?php
// Definisikan konstanta untuk koneksi database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_web_smai');

// Lakukan koneksi ke database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi database mysql berhasil!";
}

?>
