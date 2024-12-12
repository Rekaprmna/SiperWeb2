<?php
$host       = "localhost";
$database   = "webproject";
$username   = "root";
$password   = "";

// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connection successful!<br>";
}
?>
