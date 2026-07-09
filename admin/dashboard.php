<?php include 'auth_check.php'; ?>
<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h2>Welcome Admin 👋</h2>

<ul>
    <li><a href="add_news.php">Add News</a></li>
    <li><a href="add_event.php">Add Event</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
