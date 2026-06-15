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
 <section class="author-section">
    <div class="author-container">

        <div class="author-image">
            <img src="E-book images\Dale Carnegie.png" alt="Dale Carnegie">
        </div>

        <div class="author-content">

            <span class="author-label">About The Author</span>

            <h2>Dale Carnegie</h2>

            <div class="author-divider"></div>

            <p>
                Dale Carnegie was an American writer, lecturer, and pioneer in
                self-improvement, communication skills, leadership training,
                and interpersonal effectiveness.
            </p>

            <p>
                His groundbreaking book,
                <em>How to Win Friends and Influence People</em>,
                has inspired millions of readers worldwide and remains one of
                the most influential personal development books ever written.
            </p>

            <p>
                Through practical principles rooted in human psychology,
                Carnegie helped people develop confidence, improve relationships,
                and become more effective leaders in both business and life.
            </p>

            <div class="author-stats">

                <div class="stat">
                    <span class="number">30M+</span>
                    <span class="text">Books Sold</span>
                </div>

                <div class="stat">
                    <span class="number">80+</span>
                    <span class="text">Countries</span>
                </div>

                <div class="stat">
                    <span class="number">100+</span>
                    <span class="text">Years of Influence</span>
                </div>

            </div>

            <blockquote>
                "Success is getting what you want. Happiness is wanting what you get."
            </blockquote>

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
          <a href="{{route('competitionpage')}}" class="btn btn-dark btn-sm">Submit Essay</a>
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
          <a href="{{route('competitionpage')}}" class="btn btn-red btn-sm">Submit Story</a>
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
          <a href="{{route('competitionpage')}}" class="btn btn-dark btn-sm">Submit Entry</a>
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
 
  
    </body>
</html>

@endsection