<?php
session_start();
// if (!isset($_SESSION['loggedin'])) {
//     header('Location: login.php');
//     exit;
// }

// Fetch vehicles from the database (assuming a database connection is established)
// $db = new mysqli('host', 'user', 'password', 'database');
// $result = $db->query("SELECT registration_number, type, trading_name FROM vehicles");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Vehicles</title>
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
        .floating-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border: none;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .modal-content form {
            display: flex;
            flex-direction: column;
        }
        .modal-content form label {
            margin-top: 10px;
        }
        .modal-content form input,
        .modal-content form select,
        .modal-content form button {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .modal-content form button {
            background: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        .modal-content form button:hover {
            background: #0056b3;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#vehiclesTable').DataTable({
                responsive: true
            });

            // Modal functionality
            var modal = document.getElementById("addVehicleModal");
            var btn = document.getElementById("addVehicleBtn");
            var span = document.getElementsByClassName("close")[0];

            btn.onclick = function() {
                modal.style.display = "flex";
            }

            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard">
        <h1>Manage Vehicles</h1>
        <table id="vehiclesTable" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Registration Number</th>
                    <th>Type</th>
                    <th>Trading Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ESW 123 AB</td>
                    <td>Bus</td>
                    <td>Swazi Transport</td>
                </tr>
                <tr>
                    <td>ESW 456 CD</td>
                    <td>Kombi</td>
                    <td>Mbabane Express</td>
                </tr>
                <tr>
                    <td>ESW 789 EF</td>
                    <td>Taxi</td>
                    <td>Manzini Cabs</td>
                </tr>
                <tr>
                    <td>ESW 321 GH</td>
                    <td>Bus</td>
                    <td>Royal Transport</td>
                </tr>
                <tr>
                    <td>ESW 654 IJ</td>
                    <td>Kombi</td>
                    <td>Zulu Transport</td>
                </tr>
                <tr>
                    <td>ESW 987 KL</td>
                    <td>Taxi</td>
                    <td>Eswatini Taxis</td>
                </tr>
                <tr>
                    <td>ESW 111 MN</td>
                    <td>Bus</td>
                    <td>Kingdom Transport</td>
                </tr>
                <tr>
                    <td>ESW 222 OP</td>
                    <td>Kombi</td>
                    <td>Swazi Shuttle</td>
                </tr>
                <tr>
                    <td>ESW 333 QR</td>
                    <td>Taxi</td>
                    <td>Mbabane Taxis</td>
                </tr>
                <tr>
                    <td>ESW 444 ST</td>
                    <td>Bus</td>
                    <td>Manzini Transport</td>
                </tr>
            </tbody>
        </table>
        <button id="addVehicleBtn" class="floating-button">+</button>
    </div>

    <!-- Modal -->
    <div id="addVehicleModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add New Vehicle</h2>
            <form action="submit_vehicle.php" method="post">
                <label for="registration_number">Registration Number:</label>
                <input type="text" id="registration_number" name="registration_number" required>
                <label for="type">Type:</label>
                <select id="type" name="type">
                    <option value="bus">Bus</option>
                    <option value="kombi">Kombi</option>
                    <option value="taxi">Taxi</option>
                </select>
                <label for="trading_name">Trading Name:</label>
                <input type="text" id="trading_name" name="trading_name" required>
                <button type="submit">Add Vehicle</button>
            </form>
        </div>
    </div>
</body>
</html>
