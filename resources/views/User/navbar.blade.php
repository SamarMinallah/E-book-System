<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Authore — Publisher Portal</title>
  <link rel="stylesheet" href="/css/style1.css" />
  <link rel="stylesheet" href="/css/comp1.css" />
  <link rel="stylesheet" href="/css/shop1.css" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700&family=Lato:wght@300;400;700&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
 
  <!-- ═══════════════════════════════════════════ NAVBAR ═══ -->
<header class="navbar" id="navbar">
  <div class="nav-inner">
    <a href="index.html" class="brand">
      <span class="brand-icon"><i class="fas fa-book-open"></i></span>
      <span class="brand-name">Authore<span class="brand-dot">.</span></span>
    </a>
    <nav class="nav-links" id="navLinks">
      <a href="index.html">Home</a>
      <a href="{{route('shop')}}">Shop</a>
      <a href="{{route('contact')}}">Contact</a>
      <a href="{{route('competitions')}}">Competitions</a>
      <a href="#">Events</a>
    </nav>
    <div class="nav-actions">
      <a href="#" class="btn btn-outline-nav">Sign In</a>
      <a href="#" class="btn btn-primary-nav">Register</a>
      <button class="hamburger" id="hamburger"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

  @yield('user')

 
  <!-- ═══════════════════════════════════════ FOOTER ═══ -->
  <footer class="footer">
    <div class="container footer-grid">
      <div class="footer-brand">
        <a href="#" class="brand">
          <span class="brand-icon"><i class="fas fa-book-open"></i></span>
          <span class="brand-name">Authore<span class="brand-dot">.</span></span>
        </a>
        <p>Digitizing the publishing world — books, competitions, subscriptions, and author management in one portal.</p>
        <div class="footer-socials">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#shop">Shop Books</a></li>
          <li><a href="#competitions">Competitions</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#blog">Blog</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Services</h5>
        <ul>
          <li><a href="#">Download eBooks (PDF)</a></li>
          <li><a href="#">Order Hard Copies</a></li>
          <li><a href="#">Order CDs & Media</a></li>
          <li><a href="#">Subscriptions</a></li>
          <li><a href="#">Submit Manuscript</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Contact</h5>
        <ul class="contact-list">
          <li><i class="fas fa-envelope"></i> hello@authore.com</li>
          <li><i class="fas fa-phone"></i> +1 (800) 555-BOOK</li>
          <li><i class="fas fa-map-marker-alt"></i> 123 Publisher Ave, NY 10001</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container footer-bottom-inner">
        <p>© 2026 Authore Publishing Portal. All rights reserved.</p>
        <div class="footer-bottom-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Cookie Policy</a>
        </div>
      </div>
    </div>
  </footer>
 
  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', () => {
      document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 60);
    });
 
    // Hamburger toggle
    document.getElementById('hamburger').addEventListener('click', () => {
      document.getElementById('navLinks').classList.toggle('open');
      document.getElementById('hamburger').classList.toggle('active');
    });
 
    // Dots interaction
    document.querySelectorAll('.dot').forEach((dot, i, all) => {
      dot.addEventListener('click', () => {
        all.forEach(d => d.classList.remove('active'));
        dot.classList.add('active');
      });
    });
 
    // Scroll reveal
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('visible');
      });
    }, { threshold: 0.12 });
 
    document.querySelectorAll(
      '.discover-card, .shop-card, .comp-card, .event-card, .blog-card, .service-item, .toc-item, .step, .perk'
    ).forEach(el => {
      el.classList.add('reveal');
      observer.observe(el);
    });
  </script>
</body>
</html>
 
