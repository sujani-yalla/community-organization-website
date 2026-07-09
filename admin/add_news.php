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
    <title>Add News</title>
</head>
<body>

<h2>Add News</h2>

<form action="save_news.php" method="POST" enctype="multipart/form-data">

    <label>Title</label><br>
    <input type="text" name="title" required><br><br>

    <label>Date</label><br>
    <input type="date" name="news_date" required><br><br>

    <label>Description</label><br>
    <textarea name="description" rows="5" required></textarea><br><br>

    <label>Image</label><br>
    <input type="file" name="image" required><br><br>

    <button type="submit">Add News</button>

</form>

</body>
</html>
