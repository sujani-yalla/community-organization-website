<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership | JCI POONA</title>
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

        <nav class="nav-container" id="navMenu">
            <a href="home.html">Home</a>
            <a href="about.html">About Us</a>
            <a href="our-team.html">Our Team</a>
            <a href="news.html">News</a>
            <a href="events.html">Events</a>
            <a href="contact.html">Contact</a>
            <a href="index.html">Membership</a>
            <a href="sponsor.html">Sponsor</a>
            <a href="past-presidents.html">Past Presidents & JCI Officers</a>
        </nav>
    </div>
</header>

<!-- LOGO SECTION -->
<section class="logo-section">
    <img src="images/jci-logo.png" alt="JCI Logo">
    <h2>Junior Chamber International, Poona</h2>
    <p>(Since 1958)</p>
</section>
<section class="video-section">
    <iframe 
        src="https://www.youtube.com/embed/VIDEO_ID_HERE"
        title="What is JCI"
        frameborder="0"
        allowfullscreen>
    </iframe>
</section>

<section class="info-cards">
    <div class="card about">
        <h2>About Us</h2>
        <p>Our Goal, Vision & Commitment</p>
    </div>

    <div class="card events">
        <h2>Our Events</h2>
        <p>Register to Attend</p>
    </div>

    <div class="card involved">
        <h2>Get Involved</h2>
        <p>Volunteer, Participate, or Sponsor</p>
    </div>
</section>

<section class="home-hero">
    <div class="hero-left">
        <h1>Join Us</h1>
        <p>Empower Yourself!</p>
        <a href="index.html" class="hero-btn">Memberships</a>
    </div>

    <div class="hero-right">
        <img src="images/home-hero.jpg" alt="JCI Community">
    </div>
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
    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");

    menuToggle.addEventListener("click", () => {
        navMenu.classList.toggle("show");
    });
</script>

</body>
</html>
