<?php
session_start();
$password = "Tutor2026"; // Your Hardcoded Password

if (isset($_POST['login'])) {
    if ($_POST['pass'] == $password) {
        $_SESSION['loggedin'] = true;
        header("Location: landing.php");
        exit;
    } else {
        $error = "Incorrect Password. Access Denied.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | Tutor Portal</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="login-body">
    <div class="login-card">
        <h2>Tutor Portal</h2>
        <form method="POST">
            <input type="password" name="pass" placeholder="Enter Access Password" required>
            <button type="submit" name="login">Enter Dashboard</button>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        </form>
    </div>
</body>

</html>