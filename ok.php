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
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        /* Navigation Menu */
        .menu {
            background-color: #0b0d17;
            padding: 10px 10px;
            text-align: center;
        }

        .menu ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
        }

        .menu ul li {
            display: inline-block;
            margin: 0 15px;
        }

        .menu ul li a {
            color: #f4f4f9;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 50px;
            transition: background-color 0.3s ease;
            background: linear-gradient(90deg, #0073e6, #00b4e6);
        }

        .menu ul li a:hover {
            background-color: #0073e6;
            transform: translateY(-3px);
        }

        /* Header */
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0b0d17, #1b1f34);
            color: white;
            padding: 20px 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            position: relative;
        }

        .header img {
            position: absolute;
            left: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .header h1 {
            font-size: 4em;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .header h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
            font-weight: 400;
        }

        /* Login and Register Buttons */
        .auth-buttons {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .auth-buttons a {
            background-color: #f4f4f9;
            color: #0073e6;
            padding: 12px 30px;
            border-radius: 50px;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .auth-buttons a:hover {
            background-color: #0073e6;
            color: white;
        }

        /* Main Layout */
        .main {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Sidebar */
        .sidebar {
            width: 25%;
            background-color: #1b1f34;
            padding: 20px;
            border-radius: 12px;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            color: #00b4e6;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        /* Content Area */
        .content {
            width: 50%;
            padding: 20px;
        }

        .football-img {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        }

        /* Staff and Teacher Info */
        .staff-info, .teachers-info {
            background-color: #f4f4f9;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .staff-list, .teachers-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .staff-item, .teacher-item {
            text-align: center;
            border-radius: 12px;
            background-color: #1b1f34;
            padding: 20px;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .staff-img, .teacher-img {
            width: 100px;
            height: 100px;
            margin-top: 10px;
            border-radius: 50%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Announcements */
        .rightbar {
            width: 25%;
            background-color: #1b1f34;
            padding: 20px;
            border-radius: 12px;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .rightbar h2 {
            margin-bottom: 15px;
            font-size: 1.5em;
            color: #f4f4f9;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 30px;
            background-color: #0b0d17;
            color: white;
            margin-top: 40px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
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
                        <img src="DM.jpg" alt="Honest" class="staff-img">
                    </div>
                </div>
            </div>

            <div class="teachers-info">
                <h2>Our Teachers</h2>
                <div class="teachers-list">
                    <div class="teacher-item">
                        <p>Patience Ayaabare - English Teacher</p>
                        <img src="Patience.jpg" alt="Patience Ayaabare" class="teacher-img">
                    </div>
                    <div class="teacher-item">
                        <p>Sammy - Database Teacher</p>
                        <img src="Samuel.jpg" alt="Sammy" class="teacher-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="rightbar">
        <div class="rightbar">
        <div class="rightbar">
    <h2>Announcements</h2>
    <div class="announcements">
        <div class="announcement-item">1. WMTSS will invite all parents to be in a meeting on 26 January 2023.</div>
        <div class="announcement-item">2. There will be a football meeting on Saturday.</div>
        <div class="announcement-item">3. All students are expected to attend the game on Sunday.</div>
        <div class="announcement-item">4. A training session is scheduled for Wednesday afternoon.</div>
    </div>
</div>

  
</div>

        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 WMTSS Football Team. All Rights Reserved.</p>
    </footer>
</body>

</html>
