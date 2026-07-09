<?php
include "config/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Events | JCI POONA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">
    <div class="nav-wrapper">
        <div class="nav-logo">JCI POONA</div>

        <div class="menu-toggle" id="menuToggle">
            ☰
        </div>

        <nav class="nav-container"id="navMenu">
          <a href="home.php">Home</a>
          <a href="about.php">About Us</a>
          <a href="our-team.phpl">Our Team</a>
          <a href="news.phpl">News</a>
          <a href="events.php">Events</a>
          <a href="contact.php">Contact</a>
          <a href="index.php">Membership</a>
          <a href="sponsor.php">Sponsor</a>
          <a href="past-presidents.php">Past Presidents & JCI Officers</a>
        </nav>
    </div>
</header>
<!-- PAGE TITLE -->
<section class="page-title events-title">
  <h1>EVENTS</h1>
</section>
<section class="events-section">

<?php
$query = "SELECT * FROM events ORDER BY event_date DESC";
$result = mysqli_query($conn, $query);

$reverse = false;

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $rowClass = $reverse ? "event-row reverse" : "event-row";
        $reverse = !$reverse;
?>
    <div class="<?php echo $rowClass; ?>">

        <div class="event-image scroll-zoom">
            <img src="images/events/<?php echo htmlspecialchars($row['image']); ?>" alt="">
        </div>

        <div class="event-details">
            <h3><?php echo htmlspecialchars($row['title']); ?></h3>
            <p><?php echo date("D, d M Y", strtotime($row['event_date'])); ?></p>
            <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>

            <a href="event-details.php?id=<?php echo $row['id']; ?>" class="event-btn">
  Details
</a>

        </div>

    </div>
<?php
    }
} else {
    echo "<p style='text-align:center;'>No events available.</p>";
}
?>

</section>



<!-- FOOTER -->
<footer class="footer">
  <div>
    <strong>JCI POONA</strong><br>
    Email: poonajci@gmail.com
  </div>

  <div>
    <strong>Quick Links</strong><br>
    About<br>
    Membership<br>
    News<br>
    Events
  </div>
</footer>

<div class="copyright">
  © Proudly created by Team JCI POONA | Terms of Use | Privacy Policy
</div>

<script>
  const zoomItems = document.querySelectorAll('.scroll-zoom');

  const zoomOnScroll = () => {
    zoomItems.forEach(item => {
      const rect = item.getBoundingClientRect();
      if (!item.classList.contains('active') && rect.top < window.innerHeight - 120) {
        item.classList.add('active');

      }
    });
  };

  window.addEventListener('scroll', zoomOnScroll);
  window.addEventListener('load', zoomOnScroll);
</script>


</body>
</html>
