<?php
/****************************
 * Database Configuration
 ****************************/

/*
 LOCAL (commented for live)
 -------------------------
 $host = 'localhost';
 $dbname = 'truevex_db';
 $username = 'root';
 $password = '';
*/

/*
 HOSTINGER (LIVE)
 ----------------
*/
$host = 'localhost';
$dbname = 'u457057851_truevextech';
$username = 'u457057851_rohitbitra'; // Changed back to correct username
$password = 'Rohitth@123';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    // Show the actual error to help the user diagnose (e.g. wrong password)
    die("Database connection failed: " . $e->getMessage());
}

/****************************
 * Session Handling
 ****************************/
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
