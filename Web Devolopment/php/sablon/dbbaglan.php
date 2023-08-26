<?php
SESSION_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sablon";

// Bağlantı yarat
$conn = new mysqli($servername, $username, $password, $dbname);
$_SESSION["conn"]=$conn;

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı Hatası: " . $conn->connect_error);
}
else 
	//echo "Connected successfully";
?>