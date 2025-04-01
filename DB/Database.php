<?php
$host = 'db'; // DDEV database host  
$db = 'portfolio'; 
$user = 'db'; // DDEV user  
$pass = 'db'; // DDEV password  
$charset = 'utf8mb4';  

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";  

try {  
    $pdo = new PDO($dsn, $user, $pass);  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    echo "Connected successfully to the database '$db'";   
} catch (PDOException $e) {  
    echo "Connection failed: " . $e->getMessage();  
}