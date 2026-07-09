<?php include 'auth_check.php'; ?>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

include "../config/db.php";

$title = $_POST['title'];
$news_date = $_POST['news_date'];
$description = $_POST['description'];

$image_name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

$folder = "../images/news/";
if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

move_uploaded_file($tmp_name, $folder . $image_name);

$query = "INSERT INTO news (title, news_date, description, image) 
          VALUES ('$title', '$news_date', '$description', '$image_name')";

mysqli_query($conn, $query);

header("Location: dashboard.php");
exit;
