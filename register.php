<?php
require 'db.php';

if (isset($_POST['register'])) {
   
    $username = mysqli_real_escape_string($conn, trim($_POST['u_name']));
    $password = password_hash(trim($_POST['u_password']), PASSWORD_BCRYPT); 

    $checkQuery = "SELECT * FROM users WHERE u_name = ?";
    $stmt = mysqli_prepare($conn, $checkQuery);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "<p class='error-message'>Username already exists. Please choose another one.</p>";
    } else {
        $query = "INSERT INTO users (u_name, u_password) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);

        if (mysqli_stmt_execute($stmt)) {
            echo "<p class='success-message'>User registered successfully!</p>";
        } else {
            echo "<p class='error-message'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMTSS Football Team Management - Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="register-page">
    <div class="form-container">
        <div class="form-box">
            <h2>Register</h2>
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
                    <button type="submit" name="register">Register</button>
                </div>
            </form>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
