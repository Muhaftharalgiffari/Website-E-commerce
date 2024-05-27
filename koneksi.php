<?php
$servername = "localhost:8111";
$username = "root";
$password = "";
$db = "Catlo";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("koneksi gagal:".mysqli_connect_error());
}
?>
