<?php
session_start();
if (!isset($_SESSION['loggedin'])) {cache, must-revalidate, max-age=0');
    header('Cache-Control: no-cache, must-revalidate');e);
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Location: login.php');
    session_destroy();loggedin'])) {
    exit;r('Location: login.php');
}   session_destroy();
?>  exit;
<!DOCTYPE html>
<html lang="en">
<head>YPE html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">ce-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">tle>Admin Dashboard</title>
    <meta http-equiv="Cache-Control" content="post-check=0, pre-check=0">ink rel="stylesheet" href="styles.css">
    <meta http-equiv="Pragma" content="no-cache">
</head>
<body>hp include 'header.php'; ?>
    <?php include 'header.php'; ?></body>



</html></body></html>
