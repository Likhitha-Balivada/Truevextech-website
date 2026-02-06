<?php
require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $address = $_POST['address'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $position = $_POST['position'] ?? '';
    $location = $_POST['location'] ?? '';
    $qualification = $_POST['qualification'] ?? '';
    $passout = $_POST['passout'] ?? '';
    $experience = $_POST['experience'] ?? '';
    $cover_letter = $_POST['cover_letter'] ?? '';

    // Handle File Upload
    $resume_path = null;
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $filename = time() . '_' . basename($_FILES['resume']['name']);
        $target_file = $upload_dir . $filename;
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Security: Allow only certain file types
        $allowed_types = ['pdf', 'doc', 'docx'];
        if (in_array($file_type, $allowed_types)) {
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file)) {
                $resume_path = $filename;
            } else {
                echo "<script>alert('Failed to upload resume.'); window.history.back();</script>";
                exit;
            }
        } else {
            echo "<script>alert('Only PDF, DOC, and DOCX files are allowed.'); window.history.back();</script>";
            exit;
        }
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO applications (fullname, email, phone, dob, address, gender, position, location, qualification, passout, experience, resume_path, cover_letter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $fullname, $email, $phone, $dob, $address, $gender, $position, $location, $qualification, $passout, $experience, $resume_path, $cover_letter
        ]);

        echo "<script>alert('Application submitted successfully!'); window.location.href='career.php';</script>";
    } catch (PDOException $e) {
        $msg = "Error submitting application: " . addslashes($e->getMessage());
        echo "<script>alert('$msg'); window.history.back();</script>";
    }
} else {
    header("Location: career.php");
    exit;
}
?>
