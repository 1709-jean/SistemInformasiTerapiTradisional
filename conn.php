<?php //MySQLi Object-Oreinted 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sisteminformasiterapi";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
// Memeriksi koneksi
if ($conn->connect_error) {
    die("Koneksi gagal, karena : " . $conn->connect_error);
}
#echo "Sukses";
