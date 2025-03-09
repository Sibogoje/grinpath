<?php
session_start();
// if (!isset($_SESSION['loggedin'])) {
//     header('Location: login.php');
//     exit;
// }

// Fetch users from the database (assuming a database connection is established)
// $db = new mysqli('host', 'user', 'password', 'database');
// $result = $db->query("SELECT full_name, phone, email FROM users");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passengers</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        .dashboard {
            padding: 20px;
            margin-top: 100px;
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#passengersTable').DataTable();
        });
    </script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard">
        <h1>Passengers</h1>
        <table id="passengersTable" class="display">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // while ($row = $result->fetch_assoc()) {
                //     echo "<tr>";
                //     echo "<td>{$row['full_name']}</td>";
                //     echo "<td>{$row['phone']}</td>";
                //     echo "<td>{$row['email']}</td>";
                //     echo "</tr>";
                // }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
