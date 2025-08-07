<?php
require_once 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SkillSwap</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>SkillSwap</h1>
        <nav>
            <?php if (isLoggedIn()): ?>
                <a href="dashboard.php">Dashboard</a>
                <a href="profile.php">Profile</a>
                <a href="skills.php">Skills</a>
                <a href="requests.php">Requests</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>
    <div class="container">
        <h2>Welcome to SkillSwap</h2>
        <p>Share and learn skills with others!</p>
    </div>
</body>
</html>