<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
require 'db.php';


$successMessage = '';
$errorMessage = '';


if (isset($_POST['add_player'])) {
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $telephone = $_POST['telephone'];

    $query = "INSERT INTO player (f_name, l_name, age, sex, telephone) VALUES ('$fname', '$lname', '$age', '$sex', '$telephone')";
    if (mysqli_query($conn, $query)) {
        $successMessage = "Player added successfully!";
    } else {
        $errorMessage = "Error adding player: " . mysqli_error($conn);
    }
}


if (isset($_POST['add_meeting'])) {
    $purpose = $_POST['purpose'];
    $location = $_POST['location'];

    $query = "INSERT INTO meetings (purpose, location) VALUES ('$purpose', '$location')";
    if (mysqli_query($conn, $query)) {
        $successMessage = "Meeting added successfully!";
    } else {
        $errorMessage = "Error adding meeting: " . mysqli_error($conn);
    }
}


if (isset($_POST['record_participation'])) {
    $player_id = $_POST['player_id'];
    $meeting_id = $_POST['meeting_id'];
    $fans_id = $_POST['fans_id'];
    $date = $_POST['date'];

    $query = "INSERT INTO participation (p_id, meeting_id, fans_id, date) VALUES ('$player_id', '$meeting_id', '$fans_id', '$date')";
    if (mysqli_query($conn, $query)) {
        $successMessage = "Participation recorded successfully!";
    } else {
        $errorMessage = "Error recording participation: " . mysqli_error($conn);
    }
}


$players = mysqli_query($conn, "SELECT * FROM player");
$meetings = mysqli_query($conn, "SELECT * FROM meetings");
$participations = mysqli_query($conn, "
    SELECT p.f_name AS player_name, m.purpose AS meeting_purpose, part.date, part.fans_id 
    FROM participation part
    JOIN player p ON part.p_id = p.id
    JOIN meetings m ON part.meeting_id = m.id
");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMTSS Football Team Management</title>
    <style>
      
        body { font-family: Arial, sans-serif; background-color: #f0f4f8; color: #333; }
        .container { max-width: 800px; margin: auto; background-color: #fff; border-radius: 10px; padding: 20px; }
        .navbar { display: flex; justify-content: space-around; background-color: #4a90e2; padding: 10px; color: #fff; }
        .navbar a { color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 5px; }
        .navbar a:hover { background-color: #3b7dc3; }
        .form-section, .view-section { display: none; padding: 20px; margin-top: 20px; }
        .form-section.active, .view-section.active { display: block; }
        h2, h3 { color: #4a90e2; }
        label, input, select, button { display: block; width: 100%; padding: 10px; margin-top: 10px; }
        button { background-color: #4a90e2; color: #fff; border: none; border-radius: 5px; }
        .message { text-align: center; color: green; font-weight: bold; }
        .error { text-align: center; color: red; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #4a90e2; color: white; }
    </style>
</head>
<body>
<div class="container">
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    <div class="navbar">
        <a href="#addPlayer" onclick="showSection('addPlayer')">Add Player</a>
        <a href="#addMeeting" onclick="showSection('addMeeting')">Add Meeting</a>
        <a href="#recordParticipation" onclick="showSection('recordParticipation')">Record Participation</a>
        <a href="#viewAll" onclick="showSection('viewAll')">View All</a>
        <a href="logout.php">Logout</a>
    </div>

    
    <?php if ($successMessage) echo "<p class='message'>$successMessage</p>"; ?>
    <?php if ($errorMessage) echo "<p class='error'>$errorMessage</p>"; ?>

    <div id="addPlayer" class="form-section active">
        <h3>Add New Player</h3>
        <form method="post">
            <label for="f_name">First Name:</label><input type="text" id="f_name" name="f_name" required>
            <label for="l_name">Last Name:</label><input type="text" id="l_name" name="l_name" required>
            <label for="age">Age:</label><input type="number" id="age" name="age" required>
            <label for="sex">Sex:</label><select id="sex" name="sex"><option>M</option><option>F</option></select>
            <label for="telephone">Telephone:</label><input type="text" id="telephone" name="telephone" required>
            <button type="submit" name="add_player">Add Player</button>
        </form>
    </div>

   
    <div id="addMeeting" class="form-section">
        <h3>Add New Meeting</h3>
        <form method="post">
            <label for="purpose">Purpose:</label><input type="text" id="purpose" name="purpose" required>
            <label for="location">Location:</label><input type="text" id="location" name="location" required>
            <button type="submit" name="add_meeting">Add Meeting</button>
        </form>
    </div>

   
    <div id="recordParticipation" class="form-section">
        <h3>Record Participation</h3>
        <form method="post">
            <label for="player_id">Player:</label><select id="player_id" name="player_id"><?php while ($player = mysqli_fetch_assoc($players)) { echo "<option value='{$player['id']}'>{$player['f_name']} {$player['l_name']}</option>"; } ?></select>
            <label for="meeting_id">Meeting:</label><select id="meeting_id" name="meeting_id"><?php while ($meeting = mysqli_fetch_assoc($meetings)) { echo "<option value='{$meeting['id']}'>{$meeting['purpose']}</option>"; } ?></select>
            <label for="fans_id">Fans ID:</label><input type="text" id="fans_id" name="fans_id" required>
            <label for="date">Date:</label><input type="date" id="date" name="date" required>
            <button type="submit" name="record_participation">Record Participation</button>
        </form>
    </div>

    
    <div id="viewAll" class="view-section">
        <h3>All Players</h3>
        <table><tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Sex</th><th>Telephone</th></tr>
        <?php while ($player = mysqli_fetch_assoc($players)) { echo "<tr><td>{$player['f_name']}</td><td>{$player['l_name']}</td><td>{$player['age']}</td><td>{$player['sex']}</td><td>{$player['telephone']}</td></tr>"; } ?>
        </table>

        <h3>All Meetings</h3>
        <table><tr><th>Purpose</th><th>Location</th></tr>
        <?php while ($meeting = mysqli_fetch_assoc($meetings)) { echo "<tr><td>{$meeting['purpose']}</td><td>{$meeting['location']}</td></tr>"; } ?>
        </table>

        <h3>All Participation Records</h3>
        <table><tr><th>Player</th><th>Meeting</th><th>Date</th><th>Fans ID</th></tr>
        <?php while ($participation = mysqli_fetch_assoc($participations)) { echo "<tr><td>{$participation['player_name']}</td><td>{$participation['meeting_purpose']}</td><td>{$participation['date']}</td><td>{$participation['fans_id']}</td></tr>"; } ?>
        </table>
    </div>
</div>

<script>
    function showSection(sectionId) {
        document.querySelectorAll('.form-section, .view-section').forEach(section => {
            section.classList.remove('active');
        });
        document.getElementById(sectionId).classList.add('active');
    }
</script>
</body>
</html>
