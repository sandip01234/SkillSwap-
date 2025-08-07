<?php
require_once 'db_connect.php';

function registerUser($username, $email, $password) {
    global $pdo;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    return $stmt->execute([$username, $email, $hashed_password]);
}

function loginUser($email, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        return true;
    }
    return false;
}

function addSkill($user_id, $skill_name, $description) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO skills (user_id, skill_name, description) VALUES (?, ?, ?)");
    return $stmt->execute([$user_id, $skill_name, $description]);
}

function sendRequest($sender_id, $receiver_id, $skill_id) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO requests (sender_id, receiver_id, skill_id, status) VALUES (?, ?, ?, 'pending')");
    return $stmt->execute([$sender_id, $receiver_id, $skill_id]);
}