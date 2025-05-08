<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        header {
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .hamburger div {
            width: 25px;
            height: 3px;
            background: #333;
            margin: 4px 0;
        }
        @media (max-width: 768px) {
            nav ul {
                display: none;
                flex-direction: column;
                width: 100%;
                background: #fff;
                position: absolute;
                top: 50px;
                left: 0;
                padding: 10px 0;
            }
            nav ul.show {
                display: flex;
            }
            .hamburger {
                display: flex;
            }
        }
        .logo img {
            max-height: 40px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php"><img src="../bika logo.png" alt="Bika Logo"></a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="users.php">Passengers</a></li>
                <li><a href="manage_partners.php">Manage Partners</a></li>
                <li><a href="manage_vehicles.php">Manage Vehicles</a></li>
                <li><a href="customer_reports.php">Customer Reports</a></li>
            </ul>
            <div class="hamburger" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </nav>
    </header>
    <script>
        function toggleMenu() {
            const navUl = document.querySelector('nav ul');
            navUl.classList.toggle('show');
        }
    </script>
</body>
</html>
