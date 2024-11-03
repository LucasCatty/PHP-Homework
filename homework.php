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
            background-color: #f4f5f7;
            color: #333;
            line-height: 1.6;
        }
        .menu {
            background-color: #2d4059;
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
            color: #f4f5f7;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .menu ul li a:hover {
            background-color: #576574;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #2d4059, #11999e);
            color: white;
            padding: 30px 10px;
            margin-bottom: 30px;
            position: relative;
            text-align: center;
        }
        .header img {
            position: absolute;
            left: 20px;
            width: 120px;
            height: 120px;
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
            background-color: #38ada9;
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
            background-color: #2d4059;
        }
        .main {
            display: flex;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .sidebar {
            width: 25%;
            background-color: #576574;
            padding: 20px;
            border-radius: 12px;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: left;
        }
        .sidebar h3, .sidebar p {
            color: #ffffff;
            margin-bottom: 15px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar .values-list li {
            padding: 10px;
            font-weight: bold;
            text-align: center;
            background-color: #2d4059;
            color: #fff;
            border-radius: 5px;
            margin: 5px 0;
            transition: transform 0.3s, background-color 0.3s;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        }
        .sidebar .values-list li:hover {
            transform: scale(1.05);
            background-color: #38ada9;
        }
        .sidebar ul li a {
    display: block;
    padding: 10px;
    margin: 5px 0;
    text-align: center;
    background-color: #2d4059;
    color: #ffffff;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: transform 0.3s, background-color 0.3s;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
}

.sidebar ul li a:hover {
    transform: scale(1.05);
    background-color: #38ada9;
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
            background-color: #2d4059;
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
            background-color: #576574;
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
            background-color: #11999e;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }
        .advertisement {
    margin-top: 20px;
}

.ad-content {
    background-color: #2e86de; 
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    font-weight: bold;
    text-align: center;
    animation: bounceFade 5s infinite ease-in-out;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    font-size: 1.2em;
}

@keyframes colorChange {
    0% { background-color: #2e86de; color: #fff; }
    50% { background-color: #38ada9; color: #fff; }
    100% { background-color: #2e86de; color: #fff; }
}


@keyframes bounceFade {
    0%, 100% { transform: translateY(0); opacity: 0; }
    25% { transform: translateY(-10px); opacity: 1; }
    50% { transform: translateY(5px); }
    75% { transform: translateY(-5px); }
}


@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

.promo-img {
    width: 90%;
    max-width: 250px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
    animation: blink 1.5s infinite; 
}


.ad-content {
    background-color: #2e86de;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    font-weight: bold;
    text-align: center;
    animation: bounceFade 5s infinite ease-in-out, colorChange 5s infinite ease-in-out;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    font-size: 1.2em;
}

.promo-section p {
    font-size: 1.5em;
    font-weight: bold;
    color: #11999e;
    animation: blink 1.5s infinite;
}


@keyframes bounceFade {
    0%, 100% {
        transform: translateY(0);
        opacity: 0;
    }
    25% {
        transform: translateY(-10px);
        opacity: 1;
    }
    50% {
        transform: translateY(5px);
    }
    75% {
        transform: translateY(-5px);
    }
}
        @keyframes moveLeftRight {
            0%, 100% { transform: translateX(-10px); }
            50% { transform: translateX(10px); }
        }
        .promo-section {
            margin-top: 20px;
            text-align: center;
        }
        .promo-img {
            width: 90%;
            max-width: 250px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }
        .promo-img:hover {
            transform: scale(1.05);
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
        <img src="logob.PNG" alt="School Logo">
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
            </ul><br>
            <h3>Core Values</h3>
            <ul class="values-list">
                <li>1.Trust in God</li>
                <li>2.Love each other</li>
                <li>3.Visionary</li>
                <li>4.Honesty</li>
                <li>5.Responsibility</li>
                <li>6.Diligence</li>
                <li>7.Smartness</li>
                <li>8.Excellence</li>
                
            </ul>
        </div>

        <div class="content">
            <img src="football.jpg" alt="Football Team" class="football-img">
            <div class="staff-info">
                <h2>Staff Members</h2>
                <div class="staff-list">
                    <div class="staff-item">
                        <p>Rukundo Innocent - Head Master</p>
                        <img src="master.jpg" alt="Rukondo Innocent" class="staff-img">
                    </div>
                    <div class="staff-item">
                        <p>Theophile - Accountant</p>
                        <img src="Theophile.jpg" alt="Theophile" class="staff-img">
                    </div>
                    <div class="staff-item">
                        <p>Victor Mucyo Kalima - Dean of study</p>
                        <img src="Dos.jpg" alt="Victor Karema" class="staff-img">
                    </div>
                    <div class="staff-item">
                        <p>Honest - Displine Master</p>
                        <img src="DM.jpg" alt="Nsabimana Paul" class="staff-img">
                    </div>
                    <div class="staff-item">
                        <p>Linda Munhee-Missionary</p>
                        <img src="Images/linda.PNG" alt="Nsabimana Paul" class="staff-img">
                    </div>
                    <div class="staff-item">
                        <p>HAPPY Rebero-Secretary</p>
                        <img src="Happy.jpg" alt="Nsabimana Paul" class="staff-img">
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
                    <div class="teacher-item">
                        <p>Octave KAGABO- Bussines Teacher</p>
                        <img src="Octave.jpg" alt="Mukuru" class="teacher-img">
                    </div>
                    <div class="teacher-item">
                        <p>HARERIMANA Love - Project Analyse Teacher</p>
                        <img src="Love.jpg" alt="Mukuru" class="teacher-img">
                    </div>
                    <div class="teacher-item">
                        <p>Furaha-Maths Teacher</p>
                        <img src="Furaha.jpg" alt="Mukuru" class="teacher-img">
                    </div>
                    <div class="teacher-item">
                        <p>Urban-Window Server Teacher</p>
                        <img src="Urbain.jpg" alt="Mukuru" class="teacher-img">
                    </div>
                    <div class="teacher-item">
                        <p>IGIHOZO-PHYSICS Teacher</p>
                        <img src="Images/physics teacher.JPG" alt="Mukuru" class="teacher-img">
                    </div>
                    <div class="teacher-item">
                        <p>Eraste-PHP & Website Teacher</p>
                        <img src="Images/Eraste.JPG" alt="Mukuru" class="teacher-img">
                    </div>
                </div>
            </div>
        </div>



        <div class="rightbar">
    <h2>Announcements</h2>
    <div class="announcements">
        <div class="announcement-item">
            <p>WMTSS invites all parents to a meeting on <strong>26 January 2023</strong></p>
        </div>
        <div class="announcement-item">
            <p>Annual Football Tournament - November 10</p>
        </div>
        <div class="announcement-item">
            <p>Team Photoshoot - December 1</p>
        </div>
        <div class="advertisement">
            <div class="ad-content">
                <h2>Advertisement</h2>
                Visit our School SHOP to get the best product at the best price with the best quality!
            </div>
        </div>
        <div class="promo-section">
            <p>The Best School that never disappoints!</p><br>
            <img src="Images/promotion.PNG" alt="ad" class="promo-img">
        </div>
    </div>
</div>
</div>
<footer style="background-color: #2d4059; color: white; text-align: center; padding: 20px 0; margin-top: 30px;">
        <p>&copy; 2024 WMTSS Football Team. All rights reserved.</p>
        <div>
            <a href="https://www.facebook.com/worldmissiontvetschool/" style="color: white; text-decoration: none; margin: 0 10px;">Facebook</a>
            <a href="https://www.youtube.com/@wmtss" style="color: white; text-decoration: none; margin: 0 10px;">YouTube</a>
            <a href="https://www.instagram.com/worldmissionhighschool/" style="color: white; text-decoration: none; margin: 0 10px;">Instagram</a>
        </div>
    </footer>
</body>

</html>
