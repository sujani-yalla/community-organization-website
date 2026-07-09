<?php include 'auth_check.php'; ?>
<?php
session_start();
include "../config/db.php";

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

$title = $_POST['title'];
$event_date = $_POST['event_date'];
$description = $_POST['description'];

$imageName = time() . "_" . $_FILES['image']['name'];
$imageTmp = $_FILES['image']['tmp_name'];

$targetPath = "../images/events/" . $imageName;

if (move_uploaded_file($imageTmp, $targetPath)) {

    $query = "INSERT INTO events (title, event_date, description, image)
              VALUES ('$title', '$event_date', '$description', '$imageName')";

    mysqli_query($conn, $query);

    header("Location: dashboard.php");
} else {
    echo "Image upload failed";
}
