<?php
$host = 'localhost';
$dbname = 'shop';
$user = 'root';
$password = '';

try {
    $connection = new PDO("mysql:host=$host; dbname=$dbname", $user, $password, $options);
    
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>