<?php
require_once 'includes/auth.php';
require_once 'includes/functions.php';
requireLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $receiver_id = $_POST['receiver_id'];
    $skill_id = $_POST['skill_id'];
    sendRequest($_SESSION['user_id'], $receiver_id, $skill_id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Requests</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>SkillSwap</h1>
        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="profile.php">Profile</a>
            <a href="skills.php">Skills</a>
            <a href="requests.php">Requests</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div class="container">
        <h2>Send Skill Request</h2>
        <form method="post">
            <input type="number" name="receiver_id" placeholder="Receiver ID" required>
            <input type="number" name="skill_id" placeholder="Skill ID" required>
            <button type="submit">Send Request</button>
        </form>
    </div>
</body>
</html>