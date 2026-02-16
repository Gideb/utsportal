<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Catalog | Tutor Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/logo.png" type="image/png">
</head>

<body>

    <!-- <header class="main-header">
        <h1>UTS Academy Tutor Learning Management System</h1>
        <p>Select a course module to begin the tutorial guide</p>
    </header> -->


    <header class="main-header">
        <h1>UTS IT Academy Tutor Learning Management System</h1>
        <p>Select a course module to begin the tutorial guide</p>
        <a href="logout.php" style="color: #ff4d4d; text-decoration: none; font-weight: bold; font-size: 0.9rem;">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </header>


    <div class="landing-container">
        <div class="course-grid">

            <div class="course-card" onclick="location.href='it-foundation.php'">
                <i class="fa-solid fa-microchip"></i>
                <h3>IT Foundation</h3>
                <p>Hardware, OS, Networking, and Office Suite basics.</p>
                <span class="btn-enter">OPEN PORTAL</span>
            </div>

            <div class="course-card" onclick="location.href='kids-coding.php'">
                <i class="fa-solid fa-child-reaching"></i>
                <h3>Kids Coding</h3>
                <p>Block-based programming and logic for young minds.</p>
                <span class="btn-enter">OPEN PORTAL</span>
            </div>

            <div class="course-card" onclick="location.href='web-development.php'">
                <i class="fa-solid fa-code"></i>
                <h3>Web Development</h3>
                <p>HTML5, CSS3, JavaScript, and Responsive Design.</p>
                <span class="btn-enter">OPEN PORTAL</span>
            </div>

            <div class="course-card" onclick="location.href='software-development.php'">
                <i class="fa-solid fa-laptop-code"></i>
                <h3>Software Development</h3>
                <p>Desktop applications, Python, and C# programming.</p>
                <span class="btn-enter">OPEN PORTAL</span>
            </div>

            <div class="course-card" onclick="location.href='database-admin.php'">
                <i class="fa-solid fa-database"></i>
                <h3>Database Admin</h3>
                <p>SQL, Management, and Data Security.</p>
                <span class="btn-enter">OPEN PORTAL</span>
            </div>

            <div class="course-card" onclick="location.href='system-engineering.php'">
                <i class="fa-solid fa-server"></i>
                <h3>System Engineering</h3>
                <p>Server management, Networking, and Infrastructure.</p>
                <span class="btn-enter">OPEN PORTAL</span>
            </div>

            <div class="course-card" onclick="location.href='mobile-app-dev.php'">
                <i class="fa-solid fa-mobile-screen-button"></i>
                <h3>Mobile App Dev</h3>
                <p>React Native, Flutter, and Android/iOS basics.</p>
                <span class="btn-enter">OPEN PORTAL</span>
            </div>

            <div class="course-card" onclick="location.href='graphic-design.php'">
                <i class="fa-solid fa-palette"></i>
                <h3>Graphic Designing</h3>
                <p>Photoshop, Illustrator, and UI/UX Principles.</p>
                <span class="btn-enter">OPEN PORTAL</span>
            </div>

        </div>
    </div>

    <footer>
        <p>&copy; UTS IT Academy | 2026 Tutor Portal </p>
    </footer>

</body>

</html>