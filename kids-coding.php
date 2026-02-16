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
    <title>Software Development Portal | Tutor Assist</title>
    <script src="https://kit.fontawesome.com/192436698a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Slab:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/kids-coding.css">
    <link rel="icon" href="assets/logo.png" type="image/png">



</head>

<body>

    <header class="header">
        <div class="header-content">


            <h1>KIDS CODING TIERS</h1>
            <p>Select a tier to begin your programming journey. <br /> Each path is designed to build upon the previous one.</p>

            <div class="user-info">

                <a href="./landing.php" class="logout-btn">
                    <i class="fa-solid fa-arrow-up-from-bracket"></i> Catalog
                </a>
                <a href="logout.php" class="logout-btn">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>


            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-container">
        <!-- Tiers Grid -->
        <div class="tier-grid">
            <div class="tier-card" onclick="location.href='kids-coding-tiers/kids-coding-lv1.php'">
                <i class="fa-solid fa-user-ninja tier-icon"></i> <br />
                <span class="tier-badge">BEGINNER</span>
                <h3> Code Ninja Path</h3>
                <p>Master the fundamentals of programming logic, basic algorithms, and problem-solving techniques. Perfect for beginners.</p>
                <span class="btn-tier">Tier one</span>
            </div>

            <div class="tier-card" onclick="location.href='kids-coding-tiers/kids-coding-lv2.php'">
                <i class="fa-solid fa-magnifying-glass tier-icon"></i> <br />
                <span class="tier-badge">INTERMEDIATE</span>
                <h3> Code Inspector Path</h3>
                <p>Dive deeper into debugging, code analysis, and intermediate concepts. Learn to inspect and improve code quality.</p>
                <span class="btn-tier">Tier two</span>
            </div>

            <div class="tier-card" onclick="location.href='kids-coding-tiers/kids-coding-lv3.php'">
                <i class="fa-solid fa-crown tier-icon"></i> <br />
                <span class="tier-badge">ADVANCED</span>
                <h3> Code Master Path</h3>
                <p>Advanced programming concepts, project development, and software architecture. Become a coding master!</p>
                <span class="btn-tier">Tier three</span>
            </div>
        </div>


    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Kids Coding Tiers | Tutor Portal System.</p>
    </footer>

    <script>
        // Add hover effects and click feedback
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.tier-card');

            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });

                card.addEventListener('click', function() {
                    // Add click feedback
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                        window.location = this.getAttribute('onclick').match(/'(.*?)'/)[1];
                    }, 150);
                });
            });


        });
    </script>
</body>

</html>