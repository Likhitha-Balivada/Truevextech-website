<?php
require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        echo "<script>alert('Please enter both username and password'); history.back();</script>";
        exit;
    }

    try {
        $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
        $stmt->execute([$username]);
        $admin = $stmt->fetch();

        // Secure check using password_verify
        if ($admin && password_verify($password, $admin['password'])) {

            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['username'] = $admin['username'];

            header("Location: admin_dashboard.php");
            exit;

        } else {
            echo "<script>alert('Invalid username or password'); history.back();</script>";
            exit;
        }
    } catch (PDOException $e) {
        die("Database error during login: " . $e->getMessage());
    }
} else {
    // If accessed directly via GET, redirect to login page
    header("Location: login.php");
    exit;
}
