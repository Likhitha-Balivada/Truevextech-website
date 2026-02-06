<?php
require_once 'db_config.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

try {
    // Fetch Contact Messages
    $contacts_stmt = $pdo->query("SELECT * FROM contacts ORDER BY created_at DESC");
    $contacts = $contacts_stmt->fetchAll();

    // Fetch Job Applications
    $apps_stmt = $pdo->query("SELECT * FROM applications ORDER BY created_at DESC");
    $applications = $apps_stmt->fetchAll();
} catch (PDOException $e) {
    die("Error fetching data: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Truevex Technologies</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f4f7f6;
            margin: 0;
        }

        .dashboard-container {
            padding: 40px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        .section-box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #1E90FF;
            color: white;
        }

        tr:hover {
            background: #f9f9f9;
        }

        .btn-delete {
            background: #ff4d4d;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 13px;
        }

        .btn-delete:hover {
            background: #cc0000;
        }

        .btn-logout {
            background: #333;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            float: right;
            margin-top: -60px;
        }

        .resume-link {
            color: #1E90FF;
            text-decoration: none;
            font-weight: bold;
        }

        .resume-link:hover {
            text-decoration: underline;
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .text-truncate {
            max-width: 150px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            cursor: pointer;
            position: relative;
        }

        .text-truncate:hover {
            white-space: normal;
            background: #fff;
            position: absolute;
            z-index: 10;
            border: 1px solid #ddd;
            padding: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            word-wrap: break-word;
        }
    </style>
</head>

<body>

    <div class="dashboard-container">
        <h1>Admin Dashboard</h1>
        <a href="logout.php" class="btn-logout">Logout</a>

        <!-- CONTACT MESSAGES SECTION -->
        <div class="section-box">
            <h2><i class="fas fa-envelope"></i> Contact Messages</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Service</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($contacts)): ?>
                    <tr>
                        <td colspan="8" style="text-align: center;">No contact messages found.</td>
                    </tr>
                    <?php else: ?>
                        <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <td><?php echo date('Y-m-d', strtotime($contact['created_at'])); ?></td>
                            <td><?php echo htmlspecialchars($contact['name']); ?></td>
                            <td><?php echo htmlspecialchars($contact['company'] ?: 'N/A'); ?></td>
                            <td><?php echo htmlspecialchars($contact['email']); ?></td>
                            <td><?php echo htmlspecialchars($contact['phone'] ?: 'N/A'); ?></td>
                            <td><?php echo htmlspecialchars($contact['service']); ?></td>
                            <td><?php echo htmlspecialchars($contact['message']); ?></td>
                            <td>
                                <a href="delete_entry.php?type=contact&id=<?php echo $contact['id']; ?>" class="btn-delete"
                                    onclick="return confirm('Delete this message?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- JOB APPLICATIONS SECTION -->
        <div class="section-box">
            <h2><i class="fas fa-briefcase"></i> Job Applications</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Position</th>
                        <th>Location</th>
                        <th>Qualification</th>
                        <th>Year</th>
                        <th>Experience</th>
                        <th>Cover Letter</th>
                        <th>Resume</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($applications)): ?>
                    <tr>
                        <td colspan="15" style="text-align: center;">No job applications found.</td>
                    </tr>
                    <?php else: ?>
                        <?php foreach ($applications as $app): ?>
                        <tr>
                            <td><?php echo date('Y-m-d', strtotime($app['created_at'])); ?></td>
                            <td><?php echo htmlspecialchars($app['fullname']); ?></td>
                            <td><?php echo htmlspecialchars($app['email']); ?></td>
                            <td><?php echo htmlspecialchars($app['phone']); ?></td>
                            <td><?php echo htmlspecialchars($app['dob'] ?: 'N/A'); ?></td>
                            <td><?php echo htmlspecialchars($app['gender'] ?: 'N/A'); ?></td>
                            <td>
                                <div class="text-truncate"><?php echo htmlspecialchars($app['address'] ?: 'N/A'); ?></div>
                            </td>
                            <td><?php echo htmlspecialchars($app['position']); ?></td>
                            <td><?php echo htmlspecialchars($app['location'] ?: 'N/A'); ?></td>
                            <td><?php echo htmlspecialchars($app['qualification'] ?: 'N/A'); ?></td>
                            <td><?php echo htmlspecialchars($app['passout'] ?: 'N/A'); ?></td>
                            <td><?php echo htmlspecialchars($app['experience'] ?: 'N/A'); ?></td>
                            <td>
                                <div class="text-truncate"><?php echo htmlspecialchars($app['cover_letter'] ?: 'N/A'); ?></div>
                            </td>
                            <td>
                            <?php if (!empty($app['resume_path'])): ?>
                                <a href="uploads/<?php echo htmlspecialchars($app['resume_path']); ?>" 
                                download 
                                target="_blank">
                                    Download Resume
                                </a>
                            <?php else: ?>
                                No Resume
                            <?php endif; ?>

                            </td>
                            <td>
                                <a href="delete_entry.php?type=app&id=<?php echo $app['id']; ?>" class="btn-delete"
                                    onclick="return confirm('Delete this application?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- PROFILE SETTINGS SECTION -->
        <div class="section-box" style="max-width: 500px;">
            <h2><i class="fas fa-user-cog"></i> Profile Settings</h2>
            <p style="font-size: 14px; color: #666; margin-bottom: 20px;">Change your login username or password here.</p>
            <form action="update_profile.php" method="POST">
                <div style="margin-bottom: 15px;">
                    <label style="display: block; margin-bottom: 5px; font-weight: bold;">Username</label>
                    <input type="text" name="new_username" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" required>
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 5px; font-weight: bold;">New Password</label>
                    <input type="password" name="new_password" placeholder="Enter new password" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;" required>
                </div>
                <button type="submit" style="background: #1E90FF; color: white; padding: 12px 20px; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; width: 100%;">Update Profile</button>
            </form>
        </div>
    </div>

</body>

</html>
