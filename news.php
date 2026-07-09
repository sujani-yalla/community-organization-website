<?php
include "config/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>News | JCI POONA</title>
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
<section class="page-title news-title">
  <h1>JCI VIJAYAWADA IMPACT IN NEWS</h1>
</section>

<!-- NEWS LIST -->
<section class="news-section">
 <div class="news-wrapper">
  <?php
$query = "SELECT * FROM news ORDER BY news_date DESC";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="news-card">
      <div class="news-image">
        <img src="images/news/<?php echo $row['image']; ?>">

      </div>

      <div class="news-content">
        <span class="news-date">
          <?php echo date("M d, Y", strtotime($row['news_date'])); ?>
        </span>

        <h2><?php echo htmlspecialchars($row['title']); ?></h2>

        <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
      </div>
    </div>
<?php
  }
} else {
  echo "<p>No news available.</p>";
}
?>

 </div>
</section>

<!-- CTA -->
<section class="get-involved">
  <h2>Get Involved</h2>
  <a href="index.php" class="cta-btn">Membership</a>
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

</body>
</html>
