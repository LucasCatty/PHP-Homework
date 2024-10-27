<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMTSS Football Team</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e8f5e9; 
            color: #333;
            line-height: 1.6;
        }

       
        .menu {
            background-color: #0288d1; 
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .menu ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
        }

        .menu ul li {
            margin: 0 15px;
        }

        .menu ul li a {
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .menu ul li a:hover {
            background-color: #0277bd;
        }

        
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0288d1, #81c784); 
            color: white;
            padding: 30px 10px;
            margin-bottom: 30px;
            position: relative;
            text-align: center;
        }

        .header img {
            position: absolute;
            left: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .header h1 {
            font-size: 3em;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .header h2 {
            font-size: 1.6em;
            font-weight: 400;
        }

       
        .auth-buttons {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .auth-buttons a {
            background-color: #4caf50; 
            color: #ffffff;
            padding: 10px 25px;
            border-radius: 5px;
            margin: 0 10px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .auth-buttons a:hover {
            background-color: #388e3c;
        }

       
        .main {
            display: flex;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

       
        .sidebar {
            width: 25%;
            background-color: #4caf50;
            padding: 20px;
            border-radius: 12px;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .sidebar h3 {
            margin-bottom: 15px;
            color: #ffffff;
        }

        .sidebar ul {
            list-style-type: none;
        }

        .sidebar ul li a {
            color: #ffffff;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .sidebar ul li a:hover {
            color: #0288d1;
        }

   
        .content {
            width: 50%;
            padding: 20px;
        }

        .football-img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

       
        .staff-info, .teachers-info {
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .staff-list, .teachers-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .staff-item, .teacher-item {
            text-align: center;
            border-radius: 10px;
            background-color: #0288d1;
            padding: 20px;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .staff-img, .teacher-img {
            width: 80px;
            height: 80px;
            margin-top: 10px;
            border-radius: 50%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

      
        .rightbar {
            width: 25%;
            background-color: #4caf50;
            padding: 20px;
            border-radius: 12px;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .rightbar h2 {
            margin-bottom: 15px;
            font-size: 1.5em;
        }

        .announcements {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .announcement-item {
            background-color: #0288d1;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }

       
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #0288d1;
            color: white;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <nav class="menu">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="player.html">Players</a></li>
            <li><a href="meetings.html">Meetings</a></li>
            <li><a href="contact.html">Contacts</a></li>
        </ul>
    </nav>

    <div class="header">
        <img src="logo.png" alt="School Logo">
        <div>
            <h1>WMTS Football Team</h1>
            <h2>Welcome to the Official Website</h2>
        </div>
    </div>

    <div class="auth-buttons">
        <p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>
    </div>

    <div class="main">
        <div class="sidebar">
            <h3>External Links</h3>
            <ul>
                <li><a href="https://www.ferwafa.rw" target="_blank">FERWAFA</a></li>
                <li><a href="https://fifa.com" target="_blank">FIFA</a></li>
                <li><a href="https://www.mon.gov.rw" target="_blank">MINISANTE</a></li>
            </ul>
        </div>

        <div class="content">
            <img src="image.png" alt="WMTSS Football Team" class="football-img">

            <div class="staff-info">
                <h2>Staff Members</h2>
                <div class="staff-list">
                    <div class="staff-item">
                        <p>Rukondo Innocent - Head Master</p>
                        <img src="master.jpg" alt="Rukondo Innocent" class="staff-img">
                    </div>
                    <div class="staff-item">
                        <p>Theophile - Accountant</p>
                        <img src="Theophile.jpg" alt="Theophile" class="staff-img">
                    </div>
                    <div class="staff-item">
                        <p>Victor Karema - Dos</p>
                        <img src="Dos.jpg" alt="Victor Karema" class="staff-img">
                    </div>
                    <div class="staff-item">
                        <p>Honest - DM</p>
                        <img src="DM.jpg" alt="Nsabimana Paul" class="staff-img">
                    </div>
                </div>
            </div>

            <div class="teachers-info">
                <h2>Teachers</h2>
                <div class="teachers-list">
                    <div class="teacher-item">
                        <p>Patience Ayaabare - English Teacher </p>
                        <img src="Patience.jpg" alt="Izayasi" class="teacher-img">
                    </div>
                    <div class="teacher-item">
                        <p>Sammy - Database Teacher</p>
                        <img src="Samuel.jpg" alt="Mukuru" class="teacher-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="rightbar">
            <h2>Announcements</h2>
            <div class="announcements">
                <div class="announcement-item">
                    <p>  WMTSS invites all parents to a meeting on <strong>26 January 2023</strong></p>
                </div>
                <div class="announcement-item">
                    <p>Annual Football Tournament - November 10</p>
                </div>
                <div class="announcement-item">
                    <p>Team Photoshoot - December 1</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 WMTSS Football Team. All Rights Reserved.</p>
    </footer>
</body>

</html>
