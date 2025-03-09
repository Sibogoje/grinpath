<?php
session_start();
// if (!isset($_SESSION['loggedin'])) {
//     header('Location: login.php');
//     exit;
// }

// Fetch partners from the database (assuming a database connection is established)
// $db = new mysqli('host', 'user', 'password', 'database');
// $result = $db->query("SELECT logo, name, contact_number FROM partners");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Partners</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        .dashboard {
            padding: 20px;
            margin-top: 100px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .card img {
            max-width: 100px;
            margin-bottom: 20px;
        }
        .card h3 {
            margin: 0;
            font-size: 1.2em;
        }
        .card p {
            margin: 10px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard">
        <div class="card">
            <img src="../images/eswatini_royal_police.png" alt="Eswatini Royal Police">
            <h3>Eswatini Royal Police</h3>
            <p>Contact: +268 1234 5678</p>
        </div>
        <div class="card">
            <img src="../images/emergency_rescue.png" alt="Emergency Rescue">
            <h3>Emergency Rescue</h3>
            <p>Contact: +268 2345 6789</p>
        </div>
        <div class="card">
            <img src="../images/mtn.png" alt="MTN">
            <h3>MTN</h3>
            <p>Contact: +268 3456 7890</p>
        </div>
        <div class="card">
            <img src="../images/manzini_municipality.png" alt="Manzini Municipality">
            <h3>Manzini Municipality</h3>
            <p>Contact: +268 4567 8901</p>
        </div>
    </div>
</body>
</html>
