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

<section class="about-intro reveal">
    <h1>ABOUT</h1>

    <h3><em>JCI (Junior Chamber International) Poona</em></h3>

    <p>
        JCI Poona was founded in the year 1958 by Rusi Poonawalla. 
        Times when India was newly independent, the city of Pune was 
        experiencing the new winds of freedom and in the hearts of the people.
        While remaining deep, reconstruction of New India is the responsibility
        of the youth. It was built by young people who shared the same ambition.
        <br><br>
        Since then, Junior Chamber International Poona, we have carried out
        various activities and movements under this organisation.
    </p>
</section>

<section class="about-gallery">
    <div class="gallery-left">
        <img src="images/about-1.jpg" alt="JCI Activity">
        <img src="images/about-2.jpeg" alt="JCI Meeting">
    </div>

    <div class="gallery-right">
        <img src="images/about-3.png" alt="JCI Event">
    </div>
</section>

<section class="creed-section reveal">
    <h2>Our Creed</h2>
    <p>We Believe:</p>

    <p class="creed-text reveal">
        That faith in God gives meaning and purpose to human life;<br>
        That the brotherhood of man transcends the sovereignty of nations;<br>
        That economic justice can best be won by free men through free enterprise;<br>
        That government should be of laws rather than of men;<br>
        That earth’s great treasure lies in human personality;<br>
        And that service to humanity is the best work of life.
    </p>
</section>
<section class="mission-section">
    <div class="mission-text reveal reveal-left">
        <h2>Our Mission</h2>
        <p>
            To provide leadership development opportunities that empower young
            people to create positive change in their communities.
        </p>
    </div>

    <div class="mission-image reveal reveal-right">
        <img src="images/mission.jpg" alt="Our Mission">
    </div>
</section>
<section class="vision-section">
    <div class="vision-image reveal reveal-left">
        <img src="images/vision.jpg" alt="Our Vision">
    </div>

    <div class="vision-text reveal reveal-right">
        <h2>Our Vision</h2>
        <p>
            To be the foremost global network of young leaders creating
            positive impact in communities worldwide.
        </p>
    </div>
</section>

<section class="get-involved">
    <h2>Get Involved</h2>
    <p>Become a part of JCI Poona and make a difference.</p>
    <a href="index.html" class="cta-btn">Join Now</a>
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

<script>
  const reveals = document.querySelectorAll(".reveal");

  const revealOnScroll = () => {
    reveals.forEach((el) => {
      const windowHeight = window.innerHeight;
      const elementTop = el.getBoundingClientRect().top;
      const revealPoint = 100;

      if (elementTop < windowHeight - revealPoint) {
        el.classList.add("active");
      }
    });
  };

  window.addEventListener("scroll", revealOnScroll);
</script>


</body>
</html>