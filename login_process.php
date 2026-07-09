<?php
session_start();
include __DIR__ . "/config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Example check (adjust to your DB logic)
$query = "SELECT * FROM admin_users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) === 1) {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = $username;

    header("Location: admin/dashboard.php");
    exit;
} else {
    header("Location: login.php?error=1");
    exit;
}
