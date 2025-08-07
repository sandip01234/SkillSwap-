# SkillSwap

A skill-sharing platform built with PHP, MySQL, HTML/CSS, and JavaScript.

## Features
- User registration and login with session handling
- CRUD operations for skills
- Skill matching and request workflows (send, accept, decline)
- User authentication with password hashing

## Setup
1. Clone the repository: `git clone https://github.com/sandip01234/SkillSwap.git`
2. Set up a MySQL database named `skillswap`.
3. Import the SQL schema from `database.sql` (create this file with the schema below).
4. Update `includes/config.php` with your database credentials.
5. Host on a PHP-enabled server (e.g., XAMPP, WAMP).
6. Access via `http://localhost/SkillSwap/`.

## Database Schema
```sql
CREATE DATABASE skillswap;
USE skillswap;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    skill_name VARCHAR(100) NOT NULL,
    description TEXT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT,
    receiver_id INT,
    skill_id INT,
    status ENUM('pending', 'accepted', 'declined') DEFAULT 'pending',
    FOREIGN KEY (sender_id) REFERENCES users(id),
    FOREIGN KEY (receiver_id) REFERENCES users(id),
    FOREIGN KEY (skill_id) REFERENCES skills(id)
);