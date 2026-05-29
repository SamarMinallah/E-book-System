@extends('User.navbar');
@section('user');


<h1>contact</h1><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us — Authore Publisher Portal</title>
  <link rel="stylesheet" href="/css/contact.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700&family=Lato:wght@300;400;700;900&family=Merriweather:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>
 
 
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
 
      <!-- Topic Selector -->
      <div class="topic-selector">
        <p class="topic-label">What is your inquiry about?</p>
        <div class="topic-chips">
          <button class="tchip active" data-topic="general" onclick="selectTopic(this)"><i class="fas fa-comment"></i> General</button>
          <button class="tchip" data-topic="order" onclick="selectTopic(this)"><i class="fas fa-box"></i> My Order</button>
          <button class="tchip" data-topic="book" onclick="selectTopic(this)"><i class="fas fa-book"></i> Books</button>
          <button class="tchip" data-topic="competition" onclick="selectTopic(this)"><i class="fas fa-trophy"></i> Competition</button>
          <button class="tchip" data-topic="subscription" onclick="selectTopic(this)"><i class="fas fa-bell"></i> Subscription</button>
          <button class="tchip" data-topic="technical" onclick="selectTopic(this)"><i class="fas fa-wrench"></i> Technical</button>
        </div>
      </div>
 
      <form class="contact-form" id="contactForm" onsubmit="return submitContact(event)">
 
        <div class="form-row-2">
          <div class="form-group">
            <label for="firstName">First Name <span class="req">*</span></label>
            <div class="input-wrap">
              <i class="fas fa-user input-icon"></i>
              <input type="text" id="firstName" placeholder="First name" required/>
            </div>
          </div>
          <div class="form-group">
            <label for="lastName">Last Name <span class="req">*</span></label>
            <div class="input-wrap">
              <i class="fas fa-user input-icon"></i>
              <input type="text" id="lastName" placeholder="Last name" required/>
            </div>
          </div>
        </div>
 
        <div class="form-group">
          <label for="email">Email Address <span class="req">*</span></label>
          <div class="input-wrap">
            <i class="fas fa-envelope input-icon"></i>
            <input type="email" id="email" placeholder="you@example.com" required/>
          </div>
        </div>
 
        <div class="form-group">
          <label for="phone">Phone Number <span class="optional">(optional)</span></label>
          <div class="input-wrap">
            <i class="fas fa-phone input-icon"></i>
            <input type="tel" id="phone" placeholder="+92 300 0000000"/>
          </div>
        </div>
 
        <div class="form-group" id="orderFieldWrap" style="display:none">
          <label for="orderId">Order / Reference ID</label>
          <div class="input-wrap">
            <i class="fas fa-hashtag input-icon"></i>
            <input type="text" id="orderId" placeholder="e.g. ORD-2026-00123"/>
          </div>
        </div>
 
        <div class="form-group">
          <label for="subject">Subject <span class="req">*</span></label>
          <div class="input-wrap">
            <i class="fas fa-pen input-icon"></i>
            <input type="text" id="subject" placeholder="Brief subject of your message" required/>
          </div>
        </div>
 
        <div class="form-group">
          <label for="message">Message <span class="req">*</span></label>
          <div class="textarea-wrap">
            <textarea id="message" rows="6" placeholder="Write your message here…" required oninput="countChars(this)"></textarea>
            <span class="char-count" id="charCount">0 / 1000</span>
          </div>
        </div>
 
        <div class="form-group">
          <label>Attach a File <span class="optional">(optional)</span></label>
          <div class="attach-zone" id="attachZone" onclick="document.getElementById('attachInput').click()"
               ondragover="attachDragOver(event)" ondragleave="attachDragLeave(event)" ondrop="attachDrop(event)">
            <i class="fas fa-paperclip"></i>
            <p>Attach a file — screenshot, PDF, or document</p>
            <span>Max 5MB</span>
            <input type="file" id="attachInput" style="display:none" onchange="showAttach(this)"/>
          </div>
          <div class="attached-file" id="attachedFile" style="display:none">
            <i class="fas fa-file-alt"></i>
            <span id="attachFileName"></span>
            <button type="button" onclick="removeAttach()"><i class="fas fa-times"></i></button>
          </div>
        </div>
 
        <div class="form-check-row">
          <input type="checkbox" id="consent" required/>
          <label for="consent">I agree to Authore's <a href="#">Privacy Policy</a> and consent to being contacted about my inquiry.</label>
        </div>
 
        <div class="form-check-row">
          <input type="checkbox" id="newsletter"/>
          <label for="newsletter">Subscribe me to Authore's newsletter for new books and competitions.</label>
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
 
<!-- ══════════════════════════ SUCCESS MODAL ══════════════════════════ -->
<div class="modal-bg" id="successBg" style="display:none" onclick="closeSuccess()"></div>
<div class="success-modal" id="successModal" style="display:none">
  <div class="success-icon-wrap"><i class="fas fa-check-circle"></i></div>
  <h3>Message Sent!</h3>
  <p>Thank you for reaching out. Our team will respond to your inquiry within 24 hours.</p>
  <div class="success-ref">Your Reference: <strong id="contactRef"></strong></div>
  <div class="success-actions">
    <button class="btn btn-red" onclick="closeSuccess()">Done</button>
    <a href="index.html" class="btn btn-ghost btn-sm">Go to Homepage</a>
  </div>
</div>
 
<!-- ══════════════════════════ FOOTER ══════════════════════════ -->
<footer class="footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a href="index.html" class="brand">
        <span class="brand-icon"><i class="fas fa-book-open"></i></span>
        <span class="brand-name">Authore<span class="brand-dot">.</span></span>
      </a>
      <p>Digitizing the publishing world — books, competitions, subscriptions, and customer management in one portal.</p>
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
        <li><a href="index.html">Home</a></li>
        <li><a href="shop.html">Shop Books</a></li>
        <li><a href="competition.html">Competitions</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Services</h5>
      <ul>
        <li><a href="#">Download eBooks</a></li>
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
        <li><i class="fas fa-map-marker-alt"></i> 123 Publisher Ave, Karachi</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>© 2026 Authore Publishing Portal. All rights reserved.</p>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Cookie Policy</a>
      </div>
    </div>
  </div>
</footer>
 
<!-- Toast -->
<div class="toast" id="toast"><i class="fas fa-check-circle"></i><span id="toastMsg"></span></div>
 
<script>
/* ── Navbar scroll ── */
window.addEventListener('scroll', () => {
  document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 60);
});
 
/* ── Hamburger ── */
document.getElementById('hamburger').addEventListener('click', () => {
  document.getElementById('navLinks').classList.toggle('open');
  document.getElementById('hamburger').classList.toggle('active');
});
 
/* ── Topic Selector ── */
function selectTopic(btn) {
  document.querySelectorAll('.tchip').forEach(c => c.classList.remove('active'));
  btn.classList.add('active');
  const topic = btn.dataset.topic;
  document.getElementById('orderFieldWrap').style.display = topic === 'order' ? 'block' : 'none';
  const subjectInput = document.getElementById('subject');
  const placeholders = {
    general: 'Brief subject of your message',
    order: 'Issue with my order #',
    book: 'Question about a book',
    competition: 'Competition inquiry',
    subscription: 'Subscription question',
    technical: 'Technical support needed'
  };
  subjectInput.placeholder = placeholders[topic] || 'Brief subject of your message';
}
 
/* ── Char Counter ── */
function countChars(ta) {
  const len = ta.value.length;
  const el = document.getElementById('charCount');
  el.textContent = len + ' / 1000';
  el.style.color = len > 900 ? 'var(--red)' : len > 700 ? '#e8a020' : 'var(--gray)';
  if (ta.value.length > 1000) ta.value = ta.value.substring(0, 1000);
}
 
/* ── File Attach ── */
function attachDragOver(e) { e.preventDefault(); document.getElementById('attachZone').classList.add('drag-over'); }
function attachDragLeave(e) { document.getElementById('attachZone').classList.remove('drag-over'); }
function attachDrop(e) {
  e.preventDefault();
  document.getElementById('attachZone').classList.remove('drag-over');
  const file = e.dataTransfer.files[0];
  if (file) displayAttach(file.name);
}
function showAttach(input) { if (input.files[0]) displayAttach(input.files[0].name); }
function displayAttach(name) {
  document.getElementById('attachFileName').textContent = name;
  document.getElementById('attachedFile').style.display = 'flex';
  document.getElementById('attachZone').style.display = 'none';
}
function removeAttach() {
  document.getElementById('attachedFile').style.display = 'none';
  document.getElementById('attachZone').style.display = 'flex';
  document.getElementById('attachInput').value = '';
}
 
/* ── Form Submit ── */
function submitContact(e) {
  e.preventDefault();
  const ref = 'CTT-' + Math.random().toString(36).substr(2, 8).toUpperCase();
  document.getElementById('contactRef').textContent = ref;
  document.getElementById('successModal').style.display = 'block';
  document.getElementById('successBg').style.display = 'block';
  document.body.style.overflow = 'hidden';
  return false;
}
function closeSuccess() {
  document.getElementById('successModal').style.display = 'none';
  document.getElementById('successBg').style.display = 'none';
  document.body.style.overflow = '';
  document.getElementById('contactForm').reset();
  document.querySelectorAll('.tchip').forEach(c => c.classList.remove('active'));
  document.querySelector('.tchip[data-topic="general"]').classList.add('active');
  document.getElementById('charCount').textContent = '0 / 1000';
  removeAttach();
}
 
/* ── FAQ ── */
function toggleFaq(btn) {
  const item = btn.closest('.faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}
 
/* ── Toast ── */
function showToast(msg) {
  const t = document.getElementById('toast');
  document.getElementById('toastMsg').textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 3000);
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
</body>
</html>
 

@endsection
