<?php
require_once 'db_config.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'] ?? null;
$type = $_GET['type'] ?? null;

if ($id && $type) {
    try {
        if ($type === 'contact') {
            $stmt = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
            $stmt->execute([$id]);
        } elseif ($type === 'app') {
            // Also delete the physical file if it exists
            $stmt = $pdo->prepare("SELECT resume_path FROM applications WHERE id = ?");
            $stmt->execute([$id]);
            $app = $stmt->fetch();
            if ($app && $app['resume_path']) {
                $file_path = 'uploads/' . $app['resume_path'];
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }

            $stmt = $pdo->prepare("DELETE FROM applications WHERE id = ?");
            $stmt->execute([$id]);
        }
    } catch (PDOException $e) {
        // Log error or die
    }
}

header("Location: admin_dashboard.php");
exit;
?>
