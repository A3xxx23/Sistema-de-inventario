<?php
$conn = new mysqli('localhost', 'root', '231601', 'inventory_system');

if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
} else {
    echo 'Conexión exitosa a la base de datos';
}
?>
