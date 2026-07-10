<?php
session_start();
$host = 'localhost';
$dbname = 'obakeng_crm';
$username = 'root'; // change for production
$password = '';     // change for production

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Site contact info
define('SITE_PHONE', '078 501 1884');
define('SITE_EMAIL', 'obakeng@cynmac.co.za');
define('SITE_NAME', 'Obakeng Matjeke - Cyn Mac Properties');
?>