<?php
// db.php
$host = 'localhost';
$user = 'root';
$pass = '';          
$db_name = 'resonancia360';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}
$conn->set_charset('utf8mb4');
?>
