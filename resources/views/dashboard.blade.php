@extends('User.navbar')
@section('user')

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
 
  
    </body>
</html>

@endsection



















































