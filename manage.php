<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
require 'db.php';


if (isset($_POST['add_player'])) {
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $telephone = $_POST['telephone'];

    $query = "INSERT INTO player (f_name, l_name, age, sex, telephone) VALUES ('$fname', '$lname', '$age', '$sex', '$telephone')";
    if (mysqli_query($conn, $query)) {
        echo "Player added successfully!<br>";
    } else {
        echo "Error adding player: " . mysqli_error($conn);
    }
}


if (isset($_POST['add_meeting'])) {
    $purpose = $_POST['purpose'];
    $location = $_POST['location'];

    $query = "INSERT INTO meetings (purpose, location) VALUES ('$purpose', '$location')";
    if (mysqli_query($conn, $query)) {
        echo "Meeting added successfully!<br>";
    } else {
        echo "Error adding meeting: " . mysqli_error($conn);
    }
}


if (isset($_POST['record_participation'])) {
    $player_id = $_POST['player_id'];
    $meeting_id = $_POST['meeting_id'];
    $fans_id = $_POST['fans_id'];
    $date = $_POST['date'];

    $query = "INSERT INTO participation (p_id, meeting_id, fans_id, date) VALUES ('$player_id', '$meeting_id', '$fans_id', '$date')";
    if (mysqli_query($conn, $query)) {
        echo "Participation recorded successfully!<br>";
    } else {
        echo "Error recording participation: " . mysqli_error($conn);
    }
}


$players = mysqli_query($conn, "SELECT * FROM player");
$meetings = mysqli_query($conn, "SELECT * FROM meetings");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMTSS Football Team Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="manage-page">
    <h1>Manage WMTSS Football Team</h1>
    <p>Welcome, <?php echo $_SESSION['user']; ?>!</p>
    
    
    <div>
        <h3>Add New Player</h3>
        <form method="post" action="">
            <label for="f_name">First Name:</label>
            <input type="text" id="f_name" name="f_name" required>

            <label for="l_name">Last Name:</label>
            <input type="text" id="l_name" name="l_name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="sex">Sex:</label>
            <select id="sex" name="sex" required>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>

            <label for="telephone">Telephone:</label>
            <input type="text" id="telephone" name="telephone" required>

            <button type="submit" name="add_player">Add Player</button>
        </form>
    </div>

   
    <div>
        <h3>Add New Meeting</h3>
        <form method="post" action="">
            <label for="purpose">Purpose:</label>
            <input type="text" id="purpose" name="purpose" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <button type="submit" name="add_meeting">Add Meeting</button>
        </form>
    </div>

    
    <div>
        <h3>Record Participation</h3>
        <form method="post" action="">
            <label for="player_id">Player:</label>
            <select id="player_id" name="player_id" required>
                <?php
                while ($player = mysqli_fetch_assoc($players)) {
                    echo "<option value='" . $player['id'] . "'>" . $player['f_name'] . " " . $player['l_name'] . "</option>";
                }
                ?>
            </select>

            <label for="meeting_id">Meeting:</label>
            <select id="meeting_id" name="meeting_id" required>
                <?php
                while ($meeting = mysqli_fetch_assoc($meetings)) {
                    echo "<option value='" . $meeting['id'] . "'>" . $meeting['purpose'] . "</option>";
                }
                ?>
            </select>

            <label for="fans_id">Fans ID:</label>
            <input type="text" id="fans_id" name="fans_id" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <button type="submit" name="record_participation">Record Participation</button>
        </form>
    </div>

    <a href="logout.php">Logout</a>
</body>
</html>
