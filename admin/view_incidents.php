<?php
session_start();
// if (!isset($_SESSION['loggedin'])) {
//     header('Location: login.php');
//     exit;
// }

// Fetch incidents from the database (assuming a database connection is established)
// $db = new mysqli('host', 'user', 'password', 'database');
// $result = $db->query("SELECT * FROM incidents ORDER BY reported_at DESC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Incidents</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        .dashboard {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background: #f4f4f4;
        }
        tbody tr:nth-child(even) {
            background: #f9f9f9;
        }
        tbody tr:hover {
            background: #f1f1f1;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard">
        <h1>Reported Incidents</h1>
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Vehicle</th>
                    <th>Location</th>
                    <th>Boarding</th>
                    <th>Drop-off</th>
                    <th>Description</th>
                    <th>Reported By</th>
                    <th>Phone</th>
                    <th>Attachment</th>
                    <th>Reported At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // while ($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //     echo "<td>{$row['incident_type']}</td>";
                //     echo "<td>{$row['vehicle_registration']}</td>";
                //     echo "<td>{$row['location']}</td>";
                //     echo "<td>{$row['boarding_location']}</td>";
                //     echo "<td>{$row['dropoff_location']}</td>";
                //     echo "<td>{$row['description']}</td>";
                //     echo "<td>{$row['name']}</td>";
                //     echo "<td>{$row['phone']}</td>";
                //     echo "<td><a href='{$row['attachment']}'>View</a></td>";
                //     echo "<td>{$row['reported_at']}</td>";
                //     echo "</tr>";
                // }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
