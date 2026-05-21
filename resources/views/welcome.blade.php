<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Authore — Publisher Portal</title>
  <link rel="stylesheet" href="/css/style1.css" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700&family=Lato:wght@300;400;700&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>
 
  <!-- ═══════════════════════════════════════════ NAVBAR ═══ -->
  <header class="navbar" id="navbar">
    <div class="nav-inner">
      <a href="#" class="brand">
        <span class="brand-icon"><i class="fas fa-book-open"></i></span>
        <span class="brand-name">Authore<span class="brand-dot">.</span></span>
      </a>
      <nav class="nav-links" id="navLinks">
        <a href="#home">Home</a>
        <a href="#shop">Shop</a>
        <a href="#blog">Blog</a>
        <a href="#competitions">Competitions</a>
        <a href="#pages">Pages</a>
        <a href="#events">Events</a>
      </nav>
      <div class="nav-actions">
        <a href="#register" class="btn btn-outline-nav">Register</a>
        <a href="#shop" class="btn btn-primary-nav">Buy Now</a>
        <button class="hamburger" id="hamburger" aria-label="Menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>
 
  <!-- ═══════════════════════════════════════════ HERO ═══ -->
  <section class="hero" id="home">
    <div class="hero-bg-text">BOOKS</div>
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="hero-byline">by Steve Krug <span class="stars">★★★★★</span></p>
        <h1 class="hero-headline">Keep it simple,<br>so you'll keep<br>doing it.</h1>
        <div class="hero-awards">
          <span class="award"><i class="fas fa-trophy"></i> Best UX Book</span>
          <span class="award"><i class="fas fa-medal"></i> Editor's Pick</span>
          <span class="award"><i class="fas fa-star"></i> #1 Bestseller</span>
        </div>
        <div class="hero-btns">
          <a href="#shop" class="btn btn-dark">Buy Now</a>
          <a href="#about" class="btn btn-ghost">Read More</a>
        </div>
      </div>
      <div class="hero-book">
        <div class="book-wrapper">
          <div class="book-badge">Bestseller</div>
          <div class="book-3d">
            <div class="book-cover">
              <div class="book-cover-inner">
                <p class="book-author">Steve Krug</p>
                <h2 class="book-title">DON'T<br>MAKE<br>ME<br>THINK</h2>
                <p class="book-sub"><em>Revisited</em></p>
                <p class="book-desc">A Common Sense Approach to Web Usability</p>
              </div>
            </div>
            <div class="book-spine"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-scroll-hint">
      <span>Scroll</span>
      <div class="scroll-line"></div>
    </div>
  </section>
 
  <!-- ════════════════════════════════════ DISCOVER BOOKS ═══ -->
  <section class="discover" id="shop">
    <div class="container">
      <div class="section-label">THE AUDIO</div>
      <h2 class="section-title">Discover Book</h2>
      <div class="discover-grid">
        <div class="discover-card red-card">
          <div class="card-icon"><i class="fas fa-microphone"></i></div>
          <p>Your primary role should be to share what you know, not to tell people how things should be done.</p>
        </div>
        <div class="discover-card light-card">
          <div class="card-icon"><i class="fas fa-scissors"></i></div>
          <p>Get rid of half the words on each page, then get rid of half of what's left.</p>
        </div>
        <div class="discover-card dark-card">
          <div class="card-icon"><i class="fas fa-forward"></i></div>
          <p>If you can't make something self-evident, you at least need to make it self-explanatory.</p>
        </div>
        <div class="discover-card mid-card">
          <div class="card-icon"><i class="fas fa-arrow-up"></i></div>
          <p>Usability testing one user early is better than testing fifty at the end. Technology can replace many things.</p>
        </div>
      </div>
      <div class="dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
  </section>
 
  <!-- ═══════════════════════════════════ SERVICES STRIP ═══ -->
  <section class="services-strip">
    <div class="container services-grid">
      <div class="service-item">
        <i class="fas fa-download"></i>
        <div>
          <h4>Download eBooks</h4>
          <p>Instant PDF delivery after purchase</p>
        </div>
      </div>
      <div class="service-item">
        <i class="fas fa-box"></i>
        <div>
          <h4>Order Hard Copies</h4>
          <p>Physical books shipped worldwide</p>
        </div>
      </div>
      <div class="service-item">
        <i class="fas fa-compact-disc"></i>
        <div>
          <h4>Order CDs / Media</h4>
          <p>Audio books & multimedia editions</p>
        </div>
      </div>
      <div class="service-item">
        <i class="fas fa-bell"></i>
        <div>
          <h4>Subscriptions</h4>
          <p>Weekly updates & new releases</p>
        </div>
      </div>
    </div>
  </section>
 
  <!-- ═══════════════════════════════════════ AUTHOR ═══ -->
  <section class="author-section" id="about">
    <div class="container author-grid">
      <div class="author-image-wrap">
        <div class="author-image-bg"></div>
        <div class="author-img-placeholder">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="author-stat-badge">
          <span class="stat-num">4.8</span>
          <span class="stat-stars">★★★★★</span>
          <span class="stat-label">4,682 Ratings</span>
        </div>
      </div>
      <div class="author-content">
        <div class="section-label">ABOUT AUTHOR</div>
        <h2 class="author-name">Steve Krug</h2>
        <div class="author-rating">
          <span class="stars-red">★★★★★</span>
          <span class="rating-count">4,682 ratings</span>
        </div>
        <blockquote class="author-quote">
          "Your guess [about the future of technology] is as good as mine. The only thing I'm sure of is that most of the predictions I hear are almost certainly wrong, and the things that will turn out to be important will come as a surprise, even though in hindsight they'll seem perfectly obvious."
        </blockquote>
        <div class="author-signature">Steve Krug</div>
        <p class="author-role">Author</p>
        <a href="#about" class="btn btn-dark mt-2">Learn More</a>
      </div>
    </div>
  </section>
 
  <!-- ═══════════════════════════════════ TABLE OF CONTENTS ═══ -->
  <section class="toc-section" id="pages">
    <div class="container">
      <div class="section-label">BOOK TOPICS</div>
      <h2 class="section-title">Table of Contents</h2>
      <div class="toc-grid">
        <div class="toc-book-cover">
          <div class="toc-cover-inner">
            <p class="book-author-sm">Steve Krug</p>
            <h3 class="book-title-sm">DON'T<br>MAKE<br>ME<br>THINK</h3>
            <p class="book-sub-sm"><em>Revisited</em></p>
          </div>
        </div>
        <div class="toc-list">
          <div class="toc-item">
            <span class="toc-num">01</span>
            <span class="toc-text">Don't Make Me Think</span>
            <span class="toc-num">02</span>
            <span class="toc-text">How We Use the Web</span>
          </div>
          <div class="toc-item">
            <span class="toc-num">03</span>
            <span class="toc-text">Billboard Design 101</span>
            <span class="toc-num">04</span>
            <span class="toc-text">Omit Needless Words</span>
          </div>
          <div class="toc-item">
            <span class="toc-num">05</span>
            <span class="toc-text">Accessibility And You</span>
            <span class="toc-num">06</span>
            <span class="toc-text">Street Signs & Breadcrumbs</span>
          </div>
          <div class="toc-item">
            <span class="toc-num">07</span>
            <span class="toc-text">The Big Bang Theory</span>
            <span class="toc-num">08</span>
            <span class="toc-text">Usability Testing</span>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- ═══════════════════════════════════════════ SHOP ═══ -->
  <section class="shop-section">
    <div class="container">
      <div class="section-label">OUR COLLECTION</div>
      <h2 class="section-title">Featured Books</h2>
      <div class="shop-grid">
        <div class="shop-card">
          <div class="shop-book-cover red-cover">
            <span>UX<br>Design</span>
          </div>
          <div class="shop-card-info">
            <h4>Don't Make Me Think</h4>
            <p>Steve Krug</p>
            <div class="shop-card-footer">
              <span class="price">$24.99</span>
              <div class="shop-actions">
                <button class="btn-icon" title="Download PDF"><i class="fas fa-download"></i></button>
                <button class="btn-icon" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="shop-card">
          <div class="shop-book-cover dark-cover">
            <span>Web<br>Usability</span>
          </div>
          <div class="shop-card-info">
            <h4>Rocket Surgery Made Easy</h4>
            <p>Steve Krug</p>
            <div class="shop-card-footer">
              <span class="price">$19.99</span>
              <div class="shop-actions">
                <button class="btn-icon" title="Download PDF"><i class="fas fa-download"></i></button>
                <button class="btn-icon" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="shop-card">
          <div class="shop-book-cover navy-cover">
            <span>Design<br>Think</span>
          </div>
          <div class="shop-card-info">
            <h4>The Design of Everyday Things</h4>
            <p>Don Norman</p>
            <div class="shop-card-footer">
              <span class="price">$22.99</span>
              <div class="shop-actions">
                <button class="btn-icon" title="Download PDF"><i class="fas fa-download"></i></button>
                <button class="btn-icon" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="shop-card">
          <div class="shop-book-cover olive-cover">
            <span>Story<br>Writing</span>
          </div>
          <div class="shop-card-info">
            <h4>On Writing: A Memoir of the Craft</h4>
            <p>Stephen King</p>
            <div class="shop-card-footer">
              <span class="price">$18.99</span>
              <div class="shop-actions">
                <button class="btn-icon" title="Download PDF"><i class="fas fa-download"></i></button>
                <button class="btn-icon" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shop-cta">
        <a href="#shop" class="btn btn-dark">View All Books</a>
      </div>
    </div>
  </section>
 
  <!-- ═══════════════════════════════════ COMPETITIONS ═══ -->
  <section class="competitions-section" id="competitions">
    <div class="container">
      <div class="section-label">PARTICIPATE</div>
      <h2 class="section-title">Competitions & Submissions</h2>
      <div class="comp-grid">
        <div class="comp-card">
          <div class="comp-icon"><i class="fas fa-pen-nib"></i></div>
          <h3>Essay Writing Contest</h3>
          <p>Submit your essay on literature, society, or technology. Top entries win cash prizes and publication.</p>
          <ul class="comp-details">
            <li><i class="fas fa-calendar"></i> Deadline: June 30, 2026</li>
            <li><i class="fas fa-trophy"></i> Prize: $500 + Publication</li>
            <li><i class="fas fa-file-word"></i> Max 3,000 words</li>
          </ul>
          <a href="#" class="btn btn-dark btn-sm">Submit Essay</a>
        </div>
        <div class="comp-card comp-card-featured">
          <div class="comp-badge-featured">Featured</div>
          <div class="comp-icon"><i class="fas fa-book-open"></i></div>
          <h3>Short Story Competition</h3>
          <p>Write a compelling short story. Genre open — fiction, thriller, romance, sci-fi all welcome.</p>
          <ul class="comp-details">
            <li><i class="fas fa-calendar"></i> Deadline: July 15, 2026</li>
            <li><i class="fas fa-trophy"></i> Prize: $1,000 + Book Deal</li>
            <li><i class="fas fa-file-word"></i> 1,000–5,000 words</li>
          </ul>
          <a href="#" class="btn btn-red btn-sm">Submit Story</a>
        </div>
        <div class="comp-card">
          <div class="comp-icon"><i class="fas fa-camera"></i></div>
          <h3>Photography & Caption</h3>
          <p>Capture a moment that tells a story. Pair it with a 100-word caption for the full impact.</p>
          <ul class="comp-details">
            <li><i class="fas fa-calendar"></i> Deadline: Aug 1, 2026</li>
            <li><i class="fas fa-trophy"></i> Prize: $300 + Feature</li>
            <li><i class="fas fa-image"></i> High-res JPEG/PNG</li>
          </ul>
          <a href="#" class="btn btn-dark btn-sm">Submit Entry</a>
        </div>
      </div>
    </div>
  </section>
 
  <!-- ═══════════════════════════════════ SUBMIT WORK ═══ -->
  <section class="submit-section">
    <div class="container submit-grid">
      <div class="submit-content">
        <div class="section-label">WRITE FOR US</div>
        <h2 class="section-title left">Submit Your Essay or Story Online</h2>
        <p>We welcome writers of all backgrounds. Submit your manuscript and get reviewed by our editorial team. Published authors receive royalties, global distribution, and full marketing support.</p>
        <div class="submit-steps">
          <div class="step"><span class="step-num">01</span><span>Create your free account</span></div>
          <div class="step"><span class="step-num">02</span><span>Upload your manuscript (PDF/DOC)</span></div>
          <div class="step"><span class="step-num">03</span><span>Our editors review within 7 days</span></div>
          <div class="step"><span class="step-num">04</span><span>Get published & earn royalties</span></div>
        </div>
        <a href="#register" class="btn btn-dark">Start Submitting</a>
      </div>
      <div class="submit-form-wrap">
        <form class="submit-form" onsubmit="return false;">
          <h3>Quick Submission</h3>
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" placeholder="Your full name" />
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="you@example.com" />
          </div>
          <div class="form-group">
            <label>Submission Type</label>
            <select>
              <option>Select type</option>
              <option>Essay</option>
              <option>Short Story</option>
              <option>Novel Manuscript</option>
              <option>Competition Entry</option>
            </select>
          </div>
          <div class="form-group">
            <label>Title of Work</label>
            <input type="text" placeholder="Title of your submission" />
          </div>
          <div class="form-group">
            <label>Brief Description</label>
            <textarea rows="3" placeholder="Brief synopsis or description..."></textarea>
          </div>
          <div class="form-group file-upload">
            <label>Upload File (PDF/DOC)</label>
            <div class="file-drop">
              <i class="fas fa-cloud-upload-alt"></i>
              <p>Drag & drop or click to upload</p>
              <input type="file" accept=".pdf,.doc,.docx" />
            </div>
          </div>
          <button type="submit" class="btn btn-red btn-full">Submit Now</button>
        </form>
      </div>
    </div>
  </section>
 
  <!-- ══════════════════════════════ REGISTER / ACCOUNT ═══ -->
  <section class="register-section" id="register">
    <div class="container register-grid">
      <div class="register-left">
        <div class="section-label light">JOIN US</div>
        <h2 class="register-title">Create Your<br>Free Account</h2>
        <p>Access exclusive titles, manage orders, download eBooks, track subscriptions, and participate in competitions — all from one dashboard.</p>
        <div class="register-perks">
          <div class="perk"><i class="fas fa-check-circle"></i> Free account forever</div>
          <div class="perk"><i class="fas fa-check-circle"></i> Instant ebook downloads</div>
          <div class="perk"><i class="fas fa-check-circle"></i> Order history & tracking</div>
          <div class="perk"><i class="fas fa-check-circle"></i> Competition access</div>
          <div class="perk"><i class="fas fa-check-circle"></i> Monthly newsletter</div>
        </div>
      </div>
      <div class="register-right">
        <form class="register-form" onsubmit="return false;">
          <h3>Register Now</h3>
          <div class="form-row">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" placeholder="First name" />
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" placeholder="Last name" />
            </div>
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="you@example.com" />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Create a strong password" />
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" placeholder="Repeat password" />
          </div>
          <div class="form-check">
            <input type="checkbox" id="terms" />
            <label for="terms">I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></label>
          </div>
          <div class="form-check">
            <input type="checkbox" id="newsletter" checked />
            <label for="newsletter">Subscribe to weekly newsletter & new releases</label>
          </div>
          <button type="submit" class="btn btn-red btn-full">Create Account</button>
          <p class="login-link">Already have an account? <a href="#">Sign in</a></p>
        </form>
      </div>
    </div>
  </section>
 
  <!-- ═══════════════════════════════════════ EVENTS ═══ -->
  <section class="events-section" id="events">
    <div class="container">
      <div class="section-label">UPCOMING</div>
      <h2 class="section-title">Events & Workshops</h2>
      <div class="events-grid">
        <div class="event-card">
          <div class="event-date-box"><span class="ev-day">12</span><span class="ev-month">JUN</span></div>
          <div class="event-info">
            <span class="event-tag">Workshop</span>
            <h4>UX Writing Bootcamp</h4>
            <p>Learn how to write for the web — clarity, brevity, and user-centred content strategy.</p>
            <span class="event-location"><i class="fas fa-map-marker-alt"></i> Virtual — Zoom</span>
          </div>
          <a href="#" class="btn btn-ghost btn-sm">Register</a>
        </div>
        <div class="event-card event-featured">
          <div class="event-date-box red-box"><span class="ev-day">28</span><span class="ev-month">JUN</span></div>
          <div class="event-info">
            <span class="event-tag red-tag">Book Launch</span>
            <h4>Don't Make Me Think — Author Talk</h4>
            <p>Exclusive Q&A with Steve Krug on usability, design thinking, and his new edition.</p>
            <span class="event-location"><i class="fas fa-map-marker-alt"></i> New York, USA + Live Stream</span>
          </div>
          <a href="#" class="btn btn-red btn-sm">Reserve Seat</a>
        </div>
        <div class="event-card">
          <div class="event-date-box"><span class="ev-day">10</span><span class="ev-month">JUL</span></div>
          <div class="event-info">
            <span class="event-tag">Seminar</span>
            <h4>Self-Publishing Masterclass</h4>
            <p>From manuscript to market — a complete guide for first-time authors and indie publishers.</p>
            <span class="event-location"><i class="fas fa-map-marker-alt"></i> Virtual — Zoom</span>
          </div>
          <a href="#" class="btn btn-ghost btn-sm">Register</a>
        </div>
      </div>
    </div>
  </section>
 
  <!-- ══════════════════════════════════════ SUBSCRIBE ═══ -->
  <section class="subscribe-section">
    <div class="subscribe-inner container">
      <div class="subscribe-content">
        <div class="section-label light">STAY UPDATED</div>
        <h2>Get New Releases & Updates</h2>
        <p>Subscribe to our newsletter and be the first to know about new books, competition results, and exclusive offers.</p>
      </div>
      <form class="subscribe-form" onsubmit="return false;">
        <input type="email" placeholder="Enter your email address" />
        <button type="submit" class="btn btn-red">Subscribe</button>
      </form>
    </div>
  </section>
 
  <!-- ══════════════════════════════════════════ BLOG ═══ -->
  <section class="blog-section" id="blog">
    <div class="container">
      <div class="section-label">FROM THE BLOG</div>
      <h2 class="section-title">Latest Articles</h2>
      <div class="blog-grid">
        <div class="blog-card blog-card-large">
          <div class="blog-img blog-img-1">
            <span class="blog-category">Design</span>
          </div>
          <div class="blog-content">
            <p class="blog-date">May 15, 2026</p>
            <h3>Why Simplicity in Web Design Still Wins in 2026</h3>
            <p>Fifteen years after "Don't Make Me Think" was published, its core lessons are more relevant than ever. Here's why...</p>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img blog-img-2">
            <span class="blog-category">Writing</span>
          </div>
          <div class="blog-content">
            <p class="blog-date">May 8, 2026</p>
            <h3>10 Tips for First-Time Authors Before You Self-Publish</h3>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img blog-img-3">
            <span class="blog-category">Competitions</span>
          </div>
          <div class="blog-content">
            <p class="blog-date">April 28, 2026</p>
            <h3>Winners of Our Spring Essay Contest Announced</h3>
            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- ══════════════════════════════════════ AVAILABLE ═══ -->
  <section class="available-section">
    <div class="container available-inner">
      <div class="section-label">AVAILABLE NOW ON</div>
      <div class="store-buttons">
        <a href="#" class="store-btn">
          <i class="fab fa-apple"></i>
          <div><span>Download on the</span><strong>App Store</strong></div>
        </a>
        <a href="#" class="store-btn">
          <i class="fab fa-google-play"></i>
          <div><span>Get it on</span><strong>Google Play</strong></div>
        </a>
        <a href="#" class="store-btn">
          <i class="fab fa-amazon"></i>
          <div><span>Available on</span><strong>Amazon Kindle</strong></div>
        </a>
      </div>
    </div>
  </section>
 
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
 
