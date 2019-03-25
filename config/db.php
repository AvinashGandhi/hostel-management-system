<?php
$servername = 'localhost';
$db_name = 'login';
$db_user = 'root';
$db_pass = '';

try {
    $conn = new PDO("mysql:host=localhost;dbname=$db_name", $db_user, $db_pass);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }