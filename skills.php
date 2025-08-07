<?php
require_once 'includes/auth.php';
require_once 'includes/functions.php';
requireLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $skill_name = $_POST['skill_name'];
    $description = $_POST['description'];
    addSkill($_SESSION['user_id'], $skill_name, $description);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skills</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
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
        <h2>Add Skill</h2>
        <form id="skill-form" method="post">
            <input type="text" name="skill_name" placeholder="Skill Name" required>
            <textarea name="description" placeholder="Description" required></textarea>
            <button type="submit">Add Skill</button>
        </form>
    </div>
</body>
</html>