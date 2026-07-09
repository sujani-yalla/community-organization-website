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
    <title>Add Event</title>
</head>
<body>

<h2>Add Event</h2>

<form action="add_event_process.php" method="POST" enctype="multipart/form-data">

    <input type="text" name="title" placeholder="Event Title" required><br><br>

    <input type="date" name="event_date" required><br><br>

    <textarea name="description" placeholder="Event Description" required></textarea><br><br>

    <input type="file" name="image" accept="image/*" required><br><br>

    <button type="submit">Add Event</button>

</form>

</body>
</html>
