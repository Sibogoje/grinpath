<?php
session_start();
header('Cache-Control: no-cache, must-revalidate');alidate, max-age=0');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');, false);
header('Pragma: no-cache');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];POST') {
    $password = $_POST['password'];
    $password = $_POST['password'];
    // Dummy check for username and password
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['loggedin'] = true;word == 'password') {
        header('Location: index.php');
        exit;r('Location: index.php');
    } else {;
        $error = "Invalid username or password";
    }   $error = "Invalid username or password";
}   }
?>
<!DOCTYPE html>
<html lang="en">
<head>lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>ent="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">nk rel="stylesheet" href="styles.css">
    <meta http-equiv="Cache-Control" content="post-check=0, pre-check=0">>
    <meta http-equiv="Pragma" content="no-cache">
</head>>
<body>
    <div class="login-container">mg src="../bika logo.png" alt="Bika Logo">
        <div class="login-logo">
            <img src="../bika logo.png" alt="Bika Logo">
        </div>
        <div class="login-form">
            <h1>Admin Login</h1>rror"><?php echo $error; ?></p>
            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="post" action="">username" required>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required> name="password" required>
                <label for="password">Password:</label>tton type="submit">Login</button>
                <input type="password" id="password" name="password" required>form>
                <button type="submit">Login</button>div>
            </form>iv>
        </div>
    </div></html>



</html></body>