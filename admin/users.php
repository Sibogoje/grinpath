<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}

// Database connection
$db = new mysqli('195.35.53.20', 'u747325399_bila', 'pKXLu5g9uB3]', 'u747325399_bika');
if ($db->connect_error) {
    die('Database connection failed: ' . $db->connect_error);
}

// Fetch unique passengers by phone number
$query = "SELECT DISTINCT phone_number, reporter_name, boarding_location, dropoff_location FROM incidents";
$result = $db->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passengers</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
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
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#passengersTable').DataTable({
                responsive: true
            });
        });
    </script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard">
        <h1>Passengers</h1>
        <table id="passengersTable" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Phone Number</th>
                    <th>Name</th>
                    <th>Boarding Location</th>
                    <th>Drop-off Location</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['phone_number']); ?></td>
                        <td><?php echo htmlspecialchars($row['reporter_name'] ?? 'N/A'); ?></td>
                        <td><?php echo htmlspecialchars($row['boarding_location']); ?></td>
                        <td><?php echo htmlspecialchars($row['dropoff_location']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
