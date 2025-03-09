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
            width: 80%;
            border-collapse: collapse;
            
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
                <tr>
                    <td>John Dlamini</td>
                    <td>+268 76123456</td>
                    <td>john.dlamini@example.com</td>
                </tr>
                <tr>
                    <td>Mary Mamba</td>
                    <td>+268 76234567</td>
                    <td>mary.mamba@example.com</td>
                </tr>
                <tr>
                    <td>Sipho Nkosi</td>
                    <td>+268 76345678</td>
                    <td>sipho.nkosi@example.com</td>
                </tr>
                <tr>
                    <td>Thandiwe Zwane</td>
                    <td>+268 76456789</td>
                    <td>thandiwe.zwane@example.com</td>
                </tr>
                <tr>
                    <td>Mbali Simelane</td>
                    <td>+268 76567890</td>
                    <td>mbali.simelane@example.com</td>
                </tr>
                <tr>
                    <td>Jabulani Dube</td>
                    <td>+268 76678901</td>
                    <td>jabulani.dube@example.com</td>
                </tr>
                <tr>
                    <td>Nokuthula Maseko</td>
                    <td>+268 76789012</td>
                    <td>nokuthula.maseko@example.com</td>
                </tr>
                <tr>
                    <td>Bongani Khumalo</td>
                    <td>+268 76890123</td>
                    <td>bongani.khumalo@example.com</td>
                </tr>
                <tr>
                    <td>Nomsa Dlamini</td>
                    <td>+268 76901234</td>
                    <td>nomsa.dlamini@example.com</td>
                </tr>
                <tr>
                    <td>Sandile Mkhwanazi</td>
                    <td>+268 76012345</td>
                    <td>sandile.mkhwanazi@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
