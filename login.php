<?php
session_start();
require 'db.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, trim($_POST['u_name']));
    $password = mysqli_real_escape_string($conn, trim($_POST['u_password']));

    $query = "SELECT * FROM users WHERE u_name = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        
        if (password_verify($password, $user['u_password'])) {
            $_SESSION['user'] = $username; 
            header("Location: manage.php");
            exit;
        } else {
            echo "<p class='error-message'>Invalid password.</p>";
        }
    } else {
        echo "<p class='error-message'>Invalid username.</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMTSS Football Team Management - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="login-page">
    <div class="form-container">
        <div class="form-box">
            <h2>Login</h2>
            <form method="post" action="">
                <div class="input-box">
                    <label for="username">Username:</label>
                    <input type="text" name="u_name" id="username" required>
                </div>
                <div class="input-box">
                    <label for="password">Password:</label>
                    <input type="password" name="u_password" id="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="login">Login</button>
                </div>
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
</body>
</html>

