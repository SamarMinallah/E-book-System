@extends('User.navbar')
@section('user')

  <link rel="stylesheet" href="/css/contact.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700&family=Lato:wght@300;400;700;900&family=Merriweather:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>


 @if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif
 
<!-- ══════════════════════════ HERO ══════════════════════════ -->
<section class="contact-hero">
  <div class="hero-bg-text">CONTACT</div>
  <div class="container">
    <nav class="breadcrumb">
      <a href="index.html">Home</a>
      <i class="fas fa-chevron-right"></i>
      <span>Contact Us</span>
    </nav>
    <h1 class="hero-title">Get In <em>Touch</em></h1>
    <p class="hero-sub">Have a question about a book, competition, subscription, or your order? Our team is here to help — reach out any time.</p>
  </div>
  <div class="hero-wave">
    <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#f5f0e8"/>
    </svg>
  </div>
</section>
 
<!-- ══════════════════════════ QUICK INFO STRIP ══════════════════════════ -->
<section class="info-strip">
  <div class="container info-strip-grid">
    <div class="info-card">
      <div class="info-icon"><i class="fas fa-envelope"></i></div>
      <div class="info-content">
        <h4>Email Us</h4>
        <a href="mailto:hello@authore.com">hello@authore.com</a>
        <span>Response within 24 hours</span>
      </div>
    </div>
    <div class="info-card">
      <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
      <div class="info-content">
        <h4>Call Us</h4>
        <a href="tel:+18005550266">+1 (800) 555-BOOK</a>
        <span>Mon–Fri, 9am–6pm PKT</span>
      </div>
    </div>
    <div class="info-card">
      <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
      <div class="info-content">
        <h4>Visit Us</h4>
        <span>123 Publisher Ave, Suite 4</span>
        <span>Karachi, Sindh 74200</span>
      </div>
    </div>
    <div class="info-card">
      <div class="info-icon"><i class="fas fa-clock"></i></div>
      <div class="info-content">
        <h4>Office Hours</h4>
        <span>Monday – Friday</span>
        <span>9:00 AM – 6:00 PM PKT</span>
      </div>
    </div>
  </div>
</section>
 
<!-- ══════════════════════════ MAIN SECTION ══════════════════════════ -->
<section class="contact-main">
  <div class="container contact-grid">
 
    <!-- ── LEFT: Contact Form ── -->
    <div class="contact-form-col">
      <div class="section-label">SEND A MESSAGE</div>
      <h2 class="form-heading">We'd Love to Hear From You</h2>
      <p class="form-subtext">Fill in the form and our team will get back to you within one business day.</p>
 
      <form class="contact-form"  action="{{route('contactinsert')}}" method="post">
        @csrf
 
        <div class="form-row-2">
          <div class="form-group">
            <label for="firstName">First Name <span class="req">*</span></label>
            <div class="input-wrap">
              <i class="fas fa-user input-icon"></i>
              <input type="text"  placeholder="First name" name="first_name"/>
              @error("first_name")
              <p>{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name <span class="req">*</span></label>
            <div class="input-wrap">
              <i class="fas fa-user input-icon"></i>
              <input type="text" placeholder="Last name" name="last_name"/>
              @error("last_name")
              <p>{{$message}}</p>
              @enderror
            </div>
          </div>
        </div>
 
        <div class="form-group">
          <label for="email">Email Address <span class="req">*</span></label>
          <div class="input-wrap">
            <i class="fas fa-envelope input-icon"></i>
            <input type="email"  placeholder="you@example.com" name="email"/>
            @error("email")
              <p>{{$message}}</p>
              @enderror
          </div>
        </div>
 
        <div class="form-group">
          <label for="phone">Phone Number <span class="optional">(optional)</span></label>
          <div class="input-wrap">
            <i class="fas fa-phone input-icon"></i>
            <input type="tel"  placeholder="+92 300 0000000" name="phone"/>
            @error("phone")
              <p>{{$message}}</p>
              @enderror
          </div>
        </div>

        <div class="form-group">
          <label for="subject">Subject <span class="req">*</span></label>
          <div class="input-wrap">
            <i class="fas fa-pen input-icon"></i>
            <input type="text" placeholder="Brief subject of your message" name="subject"/>
            @error("subject")
              <p>{{$message}}</p>
              @enderror
          </div>
        </div>
 
        <div class="form-group">
          <label for="message">Message <span class="req">*</span></label>
          <div class="textarea-wrap">
            <textarea  rows="6" placeholder="Write your message here…" name="message">
            </textarea>
            @error("message")
              <p>{{$message}}</p>
              @enderror
            
          </div>
        </div>

 
        <button type="submit" class="btn btn-red btn-full submit-btn">
          <i class="fas fa-paper-plane"></i> Send Message
        </button>
 
      </form>
    </div>
 
    <!-- ── RIGHT: Info & Map ── -->
    <div class="contact-info-col">
 
      <!-- Department Cards -->
      <div class="dept-section">
        <div class="section-label">DEPARTMENTS</div>
        <h3 class="dept-heading">Contact the Right Team</h3>
        <div class="dept-cards">
          <div class="dept-card">
            <div class="dept-icon orders-icon"><i class="fas fa-box-open"></i></div>
            <div class="dept-info">
              <h4>Orders & Shipping</h4>
              <p>Track orders, report issues, request returns for hard copies & CDs.</p>
              <a href="mailto:orders@authore.com">orders@authore.com</a>
            </div>
          </div>
          <div class="dept-card">
            <div class="dept-icon books-icon"><i class="fas fa-book"></i></div>
            <div class="dept-info">
              <h4>Book Submissions</h4>
              <p>Submit manuscripts, inquire about publishing deals & PDF upload.</p>
              <a href="mailto:submissions@authore.com">submissions@authore.com</a>
            </div>
          </div>
          <div class="dept-card">
            <div class="dept-icon comp-icon"><i class="fas fa-trophy"></i></div>
            <div class="dept-info">
              <h4>Competitions</h4>
              <p>Questions about essay or story competitions, timers, results.</p>
              <a href="mailto:competitions@authore.com">competitions@authore.com</a>
            </div>
          </div>
          <div class="dept-card">
            <div class="dept-icon tech-icon"><i class="fas fa-tools"></i></div>
            <div class="dept-info">
              <h4>Technical Support</h4>
              <p>PDF download issues, account problems, payment failures.</p>
              <a href="mailto:support@authore.com">support@authore.com</a>
            </div>
          </div>
        </div>
      </div>
 
      <!-- Map Placeholder -->
      <div class="map-section">
        <div class="section-label">FIND US</div>
        <h3 class="dept-heading">Our Office Location</h3>
        <div class="map-box">
          <div class="map-placeholder">
            <div class="map-grid-lines"></div>
            <div class="map-pin-wrap">
              <div class="map-pin-pulse"></div>
              <div class="map-pin"><i class="fas fa-map-marker-alt"></i></div>
            </div>
            <div class="map-label-box">
              <strong>Authore Head Office</strong>
              <span>123 Publisher Ave, Karachi</span>
            </div>
          </div>
          <div class="map-address-bar">
            <div class="mab-item"><i class="fas fa-map-marker-alt"></i><span>123 Publisher Ave, Suite 4, Karachi, Sindh 74200</span></div>
            <div class="mab-item"><i class="fas fa-subway"></i><span>Near Karachi Press Club — 5 min walk</span></div>
            <a href="https://maps.google.com" target="_blank" class="btn btn-dark btn-sm mab-btn"><i class="fas fa-directions"></i> Get Directions</a>
          </div>
        </div>
      </div>
 
      <!-- Social Links -->
      <div class="social-section">
        <div class="section-label">FOLLOW US</div>
        <h3 class="dept-heading">Stay Connected</h3>
        <div class="social-cards">
          <a href="#" class="social-card fb-card">
            <i class="fab fa-facebook-f"></i>
            <div><strong>Facebook</strong><span>@AuthoreBooks</span></div>
            <i class="fas fa-arrow-right sc-arrow"></i>
          </a>
          <a href="#" class="social-card tw-card">
            <i class="fab fa-twitter"></i>
            <div><strong>Twitter / X</strong><span>@AuthorePublish</span></div>
            <i class="fas fa-arrow-right sc-arrow"></i>
          </a>
          <a href="#" class="social-card ig-card">
            <i class="fab fa-instagram"></i>
            <div><strong>Instagram</strong><span>@authore.books</span></div>
            <i class="fas fa-arrow-right sc-arrow"></i>
          </a>
          <a href="#" class="social-card li-card">
            <i class="fab fa-linkedin-in"></i>
            <div><strong>LinkedIn</strong><span>Authore Publishing</span></div>
            <i class="fas fa-arrow-right sc-arrow"></i>
          </a>
        </div>
      </div>
 
    </div>
  </div>
</section>
 
<!-- ══════════════════════════ FAQ STRIP ══════════════════════════ -->
<section class="faq-section">
  <div class="container">
    <div class="section-label" style="text-align:center">QUICK ANSWERS</div>
    <h2 class="section-title" style="text-align:center">Frequently Asked Questions</h2>
    <div class="faq-grid">
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          <span>How do I download a purchased eBook?</span>
          <i class="fas fa-plus"></i>
        </button>
        <div class="faq-a">After payment is confirmed, go to your Dashboard → Downloads. Your PDF will be available for instant download. You will also receive a download link by email.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          <span>How long does hard copy delivery take?</span>
          <i class="fas fa-plus"></i>
        </button>
        <div class="faq-a">Hard copies are dispatched within 2 business days. Delivery takes 5–10 working days within Pakistan and 2–4 weeks internationally depending on your location.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          <span>Can I participate in competitions without registering?</span>
          <i class="fas fa-plus"></i>
        </button>
        <div class="faq-a">No — competitions are open to registered users only. Registration is free and takes less than 2 minutes. You can sign up at the top of this page.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          <span>What payment methods do you accept?</span>
          <i class="fas fa-plus"></i>
        </button>
        <div class="faq-a">We accept Credit Card, Demand Draft (DD), Cheque, and VPP (Value Payable Post). Online payments are processed securely through our payment gateway.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          <span>How do subscriptions work?</span>
          <i class="fas fa-plus"></i>
        </button>
        <div class="faq-a">Subscribe for 1, 2, or 3 years to receive updated and revised editions of books you own. Subscribers also get early access to new releases and exclusive discounts.</div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          <span>I can't access my purchased PDF. What do I do?</span>
          <i class="fas fa-plus"></i>
        </button>
        <div class="faq-a">First check that your payment has been confirmed in your Dashboard. If payment is confirmed but the PDF is inaccessible, email support@authore.com with your order ID and we'll resolve it within 4 hours.</div>
      </div>
    </div>
  </div>
</section>
<script>
/* ── FAQ ── */
function toggleFaq(btn) {
  const item = btn.closest('.faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}

/* ── Scroll Reveal ── */
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.info-card, .dept-card, .social-card, .faq-item').forEach((el, i) => {
  el.classList.add('reveal');
  el.style.transitionDelay = (i % 4) * 0.07 + 's';
  obs.observe(el);
});
</script>


@endsection
