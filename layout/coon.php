<?php

$host = 'localhost';
$dbname = 'electro_nacer';
$username = 'root';
$password = '';
// mysql:host=$host;dbname=$dbname" data source name
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch(PDOException $e) {
    echo "Error de conexion: " . $e->getMessage();
}


session_start();




?>


<!-- controls how PDO should behave on errors -->