<?php
session_start();
// if (!isset($_SESSION['loggedin'])) {
//     header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
//     header('Cache-Control: post-check=0, pre-check=0', false);
//     header('Pragma: no-cache');
//     header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//     header('Location: login.php');
//     session_destroy();
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Cache-Control" content="post-check=0, pre-check=0">
    <meta http-equiv="Pragma" content="no-cache">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard">
        <h1>Admin Dashboard</h1>
        <div class="dashboard-section">
            <h2>User Statistics</h2>
            <p>Total Users: 150</p>
            <p>Active Users: 120</p>
            <p>New Users This Month: 30</p>
        </div>
        <div class="dashboard-section">
            <h2>Recent Activities</h2>
            <ul>
                <li>User JohnDoe logged in</li>
                <li>User JaneSmith updated profile</li>
                <li>New user MikeRoss registered</li>
            </ul>
        </div>
        <div class="dashboard-section">
            <h2>System Status</h2>
            <p>Server Uptime: 99.99%</p>
            <p>Database Status: Connected</p>
            <p>Last Backup: 2023-10-01</p>
        </div>
    </div>
</body>
</html>
