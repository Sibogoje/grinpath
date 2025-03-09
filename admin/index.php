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
    <style>
        .dashboard {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .dashboard-section {
            flex: 1 1 300px;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .dashboard-section h2 {
            margin-top: 0;
        }
        .dashboard-section ul {
            list-style: none;
            padding: 0;
        }
        .dashboard-section ul li {
            background: #fff;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .dashboard-section a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .dashboard-section a:hover {
            background: #0056b3;
        }
    </style>
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
        <div class="dashboard-section">
            <h2>Incident Reports</h2>
            <a href="view_incidents.php">View Reported Incidents</a>
        </div>
    </div>
</body>
</html>
