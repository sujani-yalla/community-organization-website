<?php
error_reporting(0);
ini_set('display_errors', 0);

include_once __DIR__ . "/config/db.php";
?>
<?php
include "config/db.php";

if (!isset($_GET['id'])) {
    echo "Event not found";
    exit;
}

$id = $_GET['id'];

$query = "SELECT * FROM events WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "Event not found";
    exit;
}

$event = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($event['title']); ?> | JCI POONA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
 <?php include "includes/navbar.php"; ?>

<header class="navbar">
  <div class="nav-wrapper">
    <div class="nav-logo">JCI POONA</div>

    <div class="menu-toggle" id="menuToggle">
        ☰
    </div>

    <nav class="nav-container" id="navMenu">
      <a href="home.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="our-team.php">Our Team</a>
      <a href="news.php">News</a>
      <a href="events.php">Events</a>
      <a href="contact.php">Contact</a>
      <a href="index.php">Membership</a>
      <a href="sponsor.php">Sponsor</a>
      <a href="past-presidents.php">Past Presidents & JCI Officers</a>
    </nav>
  </div>
</header>


<!-- PAGE TITLE -->
<section class="page-title">
  <h1><?php echo htmlspecialchars($event['title']); ?></h1>
</section>

<!-- EVENT DETAILS -->
<section class="event-details-page">

  <div class="event-details-wrapper">

    <div class="event-details-image">
      <img src="images/events/<?php echo htmlspecialchars($event['image']); ?>" alt="">
    </div>

    <div class="event-details-content">
    <p class="event-date">
      <?php echo date("D, d M Y", strtotime($event['event_date'])); ?>
    </p>

    <p>
      <?php echo nl2br(htmlspecialchars($event['description'])); ?>
    </p>
  </div>
 </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div>
    <strong>JCI POONA</strong><br>
    Email: poonajci@gmail.com
  </div>
</footer>
<script>
  const menuToggle = document.getElementById("menuToggle");
  const navMenu = document.getElementById("navMenu");

  menuToggle.addEventListener("click", () => {
    navMenu.classList.toggle("active");
  });
</script>

</body>
</html>
