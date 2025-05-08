<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $db = new mysqli('195.35.53.20', 'u747325399_bila', 'pKXLu5g9uB3]', 'u747325399_bika');
    if ($db->connect_error) {
        throw new Exception('Database connection failed: ' . $db->connect_error);
    }

    // Fetch user details
    $stmt = $db->prepare("SELECT id, username, password, role FROM users WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $dbUsername, $dbPassword, $role);
        $stmt->fetch();

        if (password_verify($password, $dbPassword)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $dbUsername;
            $_SESSION['role'] = $role;

            header('Location: admin/index.php');
            exit;
        } else {
            $error = 'Invalid password.';
        }
    } else {
        $error = 'User not found.';
    }

    $stmt->close();
    $db->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-container {
            background: #fff;
            color: #333;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 400px;
            width: 100%;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .login-container .form-label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .login-container .form-control {
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }
        .login-container .btn-custom {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .login-container .btn-custom:hover {
            background: #0056b3;
        }
        .login-container .error {
            color: #dc3545;
            font-size: 14px;
            margin-bottom: 15px;
            text-align: center;
        }
        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Welcome Back</h1>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            <button type="submit" class="btn btn-custom">Login</button>
        </form>
    </div>
</body>
</html>
