<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "reg_test";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "da ket noi roi đấy";
?>