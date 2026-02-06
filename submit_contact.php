<?php
require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $company = $_POST['company'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $service = $_POST['service'] ?? '';
    $message = $_POST['message'] ?? '';

    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO contacts (name, company, email, phone, service, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $company, $email, $phone, $service, $message]);

        echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
    } catch (PDOException $e) {
        $msg = "Error submitting message: " . addslashes($e->getMessage());
        echo "<script>alert('$msg'); window.history.back();</script>";
    }
} else {
    header("Location: contact.php");
    exit;
}
?>
