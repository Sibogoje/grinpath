<?php
session_start();
// if (!isset($_SESSION['loggedin'])) {
//     header('Location: login.php');
//     exit;
// }

// Fetch incidents from the database (assuming a database connection is established)
// $db = new mysqli('host', 'user', 'password', 'database');
// $result = $db->query("SELECT vehicle_registration, trading_name, reporter, route, time_of_report, day_of_report FROM incidents");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reports</title>
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
            $('#reportsTable').DataTable({
                responsive: true
            });
        });
    </script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard">
        <h1>Customer Reports</h1>
        <table id="reportsTable" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Vehicle Registration</th>
                    <th>Trading Name</th>
                    <th>Reporter</th>
                    <th>Route</th>
                    <th>Time of Report</th>
                    <th>Day of Report</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ESW 123 AB</td>
                    <td>Swazi Transport</td>
                    <td>John Dlamini</td>
                    <td>Manzini - Mbabane</td>
                    <td>10:30 AM</td>
                    <td>Monday</td>
                </tr>
                <tr>
                    <td>ESW 456 CD</td>
                    <td>Mbabane Express</td>
                    <td>Mary Mamba</td>
                    <td>Manzini - Matsapha</td>
                    <td>2:00 PM</td>
                    <td>Tuesday</td>
                </tr>
                <tr>
                    <td>ESW 789 EF</td>
                    <td>Manzini Cabs</td>
                    <td>Sipho Nkosi</td>
                    <td>Manzini - Ezulwini</td>
                    <td>8:45 AM</td>
                    <td>Wednesday</td>
                </tr>
                <tr>
                    <td>ESW 321 GH</td>
                    <td>Royal Transport</td>
                    <td>Thandiwe Zwane</td>
                    <td>Manzini - Mbabane</td>
                    <td>11:15 AM</td>
                    <td>Thursday</td>
                </tr>
                <tr>
                    <td>ESW 654 IJ</td>
                    <td>Zulu Transport</td>
                    <td>Mbali Simelane</td>
                    <td>Manzini - Matsapha</td>
                    <td>3:30 PM</td>
                    <td>Friday</td>
                </tr>
                <tr>
                    <td>ESW 987 KL</td>
                    <td>Eswatini Taxis</td>
                    <td>Jabulani Dube</td>
                    <td>Manzini - Ezulwini</td>
                    <td>9:00 AM</td>
                    <td>Saturday</td>
                </tr>
                <tr>
                    <td>ESW 111 MN</td>
                    <td>Kingdom Transport</td>
                    <td>Nokuthula Maseko</td>
                    <td>Manzini - Mbabane</td>
                    <td>12:45 PM</td>
                    <td>Sunday</td>
                </tr>
                <tr>
                    <td>ESW 222 OP</td>
                    <td>Swazi Shuttle</td>
                    <td>Bongani Khumalo</td>
                    <td>Manzini - Matsapha</td>
                    <td>4:00 PM</td>
                    <td>Monday</td>
                </tr>
                <tr>
                    <td>ESW 333 QR</td>
                    <td>Mbabane Taxis</td>
                    <td>Nomsa Dlamini</td>
                    <td>Manzini - Ezulwini</td>
                    <td>7:30 AM</td>
                    <td>Tuesday</td>
                </tr>
                <tr>
                    <td>ESW 444 ST</td>
                    <td>Manzini Transport</td>
                    <td>Sandile Mkhwanazi</td>
                    <td>Manzini - Mbabane</td>
                    <td>1:00 PM</td>
                    <td>Wednesday</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
