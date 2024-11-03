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
    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
    margin: 0;
    padding: 20px;
}


.container {
    width: 90%;
    margin: 0 auto;
    padding: 20px;
}


header {
    background-color: #2c3e50;
    color: white;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

header h1 {
    margin: 0;
    font-size: 2.5em;
}


h1 {
    text-align: center;
    color: #2980b9;
    margin-bottom: 40px;
}


main {
    display: flex;
    justify-content: space-between;
    padding: 20px 0;
    align-items: flex-start;
}


#left {
    width: 20%;
    background-color: #ecf0f1;
    padding: 20px;
    border-radius: 10px;
}

#left h3 {
    color: #2980b9;
    margin-bottom: 10px;
}

#left ul {
    list-style-type: none;
    padding: 0;
}

#left ul li {
    margin-bottom: 10px;
}

#left ul li a {
    color: #2980b9;
    text-decoration: none;
    font-size: 16px;
}

#left ul li a:hover {
    text-decoration: underline;
}


#middle {
    width: 55%;
    text-align: center;
}

.box {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px 0;
}


#right {
    width: 20%;
    text-align: center;
    background-color: #f39c12;
    color: white;
    padding: 20px;
    border-radius: 10px;
    position: relative;
}

#right h3 {
    margin-bottom: 10px;
}

.announcement {
    background-color: white;
    color: #333;
    padding: 15px;
    margin-top: 20px;
    border-radius: 5px;
}


body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #f0f4f8, #c9d6ff); 
    color: #333;
    line-height: 1.6;
    margin: 0;
    padding: 20px;
}


.form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; 
    background-color: transparent; 
}


.form-box {
    background-color: #ffffff; 
    border-radius: 12px; 
    padding: 40px;
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1); 
    max-width: 450px;
    width: 100%;
}


.form-box h2 {
    color: #4a90e2; 
    text-align: center;
    margin-bottom: 30px;
    font-size: 1.8rem;
}

/* Input fields */
.input-box {
    margin-bottom: 20px;
}

.input-box label {
    display: block;
    font-size: 14px;
    color: #333;
    margin-bottom: 8px;
}

.input-box input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

.input-box input:focus {
    border-color: #4a90e2;
    outline: none;
    box-shadow: 0 0 10px rgba(74, 144, 226, 0.2); 
}


.form-group {
    text-align: center;
}

.form-group button {
    padding: 14px 25px;
    background-color: #4a90e2;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-group button:hover {
    background-color: #3b7dc3;
}


.error-message, .success-message {
    text-align: center;
    margin-top: 10px;
}

.error-message {
    color: red;
}

.success-message {
    color: green;
}


p {
    text-align: center;
    margin-top: 15px;
}

p a {
    color: #4a90e2;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}



p {
    text-align: center;
    margin-top: 15px;
}


footer {
    text-align: center;
    padding: 20px;
    background-color: #2c3e50;
    color: white;
    margin-top: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}


@media screen and (max-width: 768px) {
    main {
        flex-direction: column;
    }

    #left, #middle, #right, div {
        width: 100%; 
    }

    nav {
        flex-direction: column;
    }
}

.login-page {
    background-color: #0968a7; 
}


.register-page {
    background-color: #ffebee; 
}


.manage-page {
    background-color: #e8f5e9; 
}
    </style>
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
