<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Past Presidents & JCI Officers | JCI POONA</title>
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

<!-- INTRO TEXT -->
<section class="pp-intro">
  <h2>JCI Poona representing at the world stage.</h2>
</section>

<!-- TOP REPRESENTATIVES -->
<section class="pp-wrapper">

  <div class="pp-card">
    <img src="images/pp1.png" alt="Mr. Kumar Gera">
    <h3>Mr. Kumar Gera</h3>
    <p>
      National President – JCI India : 1975<br>
      World President – JCI : 1979<br>
      JCI Senator : #17392<br>
      Chairman – Gera Developments Pvt. Ltd
    </p>
    <a href="https://www.gera.in" target="_blank">www.gera.in</a>
  </div>

  <div class="pp-card">
    <img src="images/pp2.png" alt="Mr. Mohan Sathe">
    <h3>Mr. Mohan Sathe</h3>
    <p>
      Zone President – JCI India Zone II<br>
      Represented JCI India at UN – 2017<br>
      Director – Sakon
    </p>
    <a href="https://www.sakon.com" target="_blank">www.sakon.com</a>
  </div>

  <div class="pp-card">
    <img src="images/pp3.png" alt="Adv. Harshad Rathod">
    <h3>Adv. Harshad Rathod</h3>
    <p>
      Director – JCI India Zone II<br>
      Asia Pacific Development Council – JCI 2019<br>
      JCI Senator : #83712<br>
      Partner – HNR Legal
    </p>
    <a href="https://www.hnrlegalconsulting.com" target="_blank">
      www.hnrlegalconsulting.com
    </a>
  </div>

</section>

<!-- LIST SECTION -->
<section class="pp-list">
  <h2>List Past Presidents Of JCI Poona</h2>
  <h1>Coming Soon</h1>
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
