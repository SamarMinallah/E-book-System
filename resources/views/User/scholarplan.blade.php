
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scholar — Online E-Book System</title>

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Lato:wght@300;400;700&family=Merriweather:ital,wght@0,300;1,300&display=swap"
    rel="stylesheet"
  />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/css/readerplan.css" />
</head>
<body>
@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif
<!-- ════════════════════════════════════════════
     PAGE
════════════════════════════════════════════ -->
<div class="page">

  <!-- ── HERO ── -->
  <header class="hero2">
    <div class="hero2-top">
      <span class="eyebrow2">Online E-Book System</span>
      <span class="eyebrow-sep2" aria-hidden="true"></span>
      <span class="plan-badge">Scholar</span>
    </div>

    <h1 class="hero-title2">Your Plan <em>Details</em></h1>

    <p class="hero-sub2">
      Review your membership information below. All fields are pre-filled
      from your account and cannot be edited on this page.
    </p>
  </header>


  <!-- ── PLAN DETAIL CARD ── -->
  <div class="detail-card" role="region" aria-label="Scholar details">

    <!-- Card header -->
    <div class="card-header">
      <div class="card-header-left">
        <span class="card-header-label">Membership Overview</span>
        <span class="card-header-title">Scholar Subscription</span>
      </div>
      <div class="card-header-icon" aria-hidden="true">
        <!-- Book icon -->
        <svg viewBox="0 0 24 24">
          <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
          <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
        </svg>
      </div>
    </div><!-- /.card-header -->


    <!-- Card body -->
    <div class="card-body">

      <!-- ── SECTION: Account Information ── -->
      <p class="section-label" aria-label="Section: Account Information">Account Information</p>

      <div class="form-grid full">
        <div class="field">
          <label for="f-username">User Name</label>
          <input
            type="text"
            id="f-username"
            value="{{ Auth::user()->name }}"
            disabled
            aria-readonly="true"
          />
        </div>
      </div><!-- /.form-grid -->


      <!-- ── SECTION: Plan Information ── -->
      <p class="section-label" aria-label="Section: Plan Information">Plan Information</p>

      <div class="form-grid">
        <div class="field">
          <label for="f-plan-name">Plan Name</label>
          <input
            type="text"
            id="f-plan-name"
            value="Scholar"
            disabled
            aria-readonly="true"
           
          />
        </div>

        <div class="field">
          <label for="f-plan-duration">Plan Duration</label>
          <input
            type="text"
            id="f-plan-duration"
            value="2 Year"
            disabled
            name="plan_duration"
            aria-readonly="true"
          />
        </div>

           <div class="field date">
          <label for="f-start-date">Plan Start Date</label>
          <input
            type="text"
            id="f-start-date"
            disabled
            name="start_date"
            aria-readonly="true"
          />
          <span class="date-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="18" rx="2"/>
              <line x1="16" y1="2" x2="16" y2="6"/>
              <line x1="8" y1="2" x2="8" y2="6"/>
              <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
          </span>
        </div>

         <div class="field date">
          <label for="f-end-date">Plan End Date</label>
          <input
            type="text"
            id="f-end-date"
            disabled
            aria-readonly="true"
            name="end_date"
          />
          <span class="date-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="18" rx="2"/>
              <line x1="16" y1="2" x2="16" y2="6"/>
              <line x1="8" y1="2" x2="8" y2="6"/>
              <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
          </span>
        </div>
      </div><!-- /.form-grid -->


      <!-- ── SECTION: Billing ── -->
      <p class="section-label" aria-label="Section: Billing">Billing</p>

      <div class="form-grid full">
        <div class="field highlight">
          <label for="f-amount">Plan Amount</label>
          <input
            type="text"
            id="f-amount"
            value="$49.00 / year"
            disabled
            name="plan_amount"
            aria-readonly="true"
          />
        </div>
      </div>


      <!-- Divider -->
      <hr class="card-divider" aria-hidden="true" />


      <!-- ── SECTION: Included Features ── -->
      <p class="features-title">What's Included</p>

      <ul class="features-grid" aria-label="Plan features">
        <li class="feature-item">
          <span class="feature-dot" aria-hidden="true"></span>
          Unlimited PDF downloads
        </li>
        <li class="feature-item">
          <span class="feature-dot" aria-hidden="true"></span>
          priority book update access
        </li>
        <li class="feature-item">
          <span class="feature-dot" aria-hidden="true"></span>
         Full competition participation
        </li>
        <li class="feature-item">
          <span class="feature-dot" aria-hidden="true"></span>
          Essay & story submissions
        </li>
        <li class="feature-item">
          <span class="feature-dot" aria-hidden="true"></span>
          Advanced catalogue search
        </li>
        <li class="feature-item">
          <span class="feature-dot" aria-hidden="true"></span>
          Order tracking dashboard
        </li>
        <li class="feature-item">
          <span class="feature-dot" aria-hidden="true"></span>
          Email order confirmations
        </li>
      </ul>

    </div><!-- /.card-body -->


    <!-- Card footer with CTA -->
    <div class="card-footer">
      <p class="footer-note">
        PDF access is granted immediately upon payment confirmation. All charges are billed annually.
      </p>

      <button
        class="btn-primary"
        id="open-checkout"
        aria-haspopup="dialog"
        aria-controls="checkout-modal"
      >
        Go with Scholar
        <!-- Arrow right icon -->
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <line x1="5" y1="12" x2="19" y2="12"/>
          <polyline points="12 5 19 12 12 19"/>
        </svg>
      </button>
    </div><!-- /.card-footer -->

  </div><!-- /.detail-card -->
</div><!-- /.page -->


<!-- ════════════════════════════════════════════
     CHECKOUT MODAL
════════════════════════════════════════════ -->
<div
  class="modal-backdrop"
  id="checkout-backdrop"
  role="dialog"
  aria-modal="true"
  aria-labelledby="modal-title"
>

  <div class="modal" id="checkout-modal">

    <!-- Modal top bar -->
    <div class="modal-bar">
      <div>
        <p class="modal-bar-label">Secure Checkout</p>
        <h2 class="modal-bar-title" id="modal-title">Confirm Your Plan</h2>
      </div>
      <button
        class="modal-close"
        id="close-checkout"
        aria-label="Close checkout"
      >
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <line x1="18" y1="6" x2="6" y2="18"/>
          <line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>
    </div><!-- /.modal-bar -->


    <!-- Modal body (form) -->
    <form action="{{route('readerinsert')}}" method="post">
      @csrf
      <div class="modal-body" id="modal-form-body">

      <!-- Order Summary -->
      <div class="order-summary" aria-label="Order summary">
        <p class="order-summary-title">Order Summary</p>
<input type="hidden" name="user_id" value="{{ auth()->id() }}">
        <div class="order-row">
          <span>Plan</span>
        <input type="hidden" name="plan_name" value="Scholar">
<input type="text" value="Scholar" readonly>
        </div>
        <div class="order-row">
          <span>Duration</span>
           <input type="hidden" name="plan_duration" value="2 year">
<input type="text" value="2 year" readonly>
        </div>
        <div class="order-row">
          <span>Start Date</span>
          <span id="modal-start-date">—</span>
        </div>
        <div class="order-row">
          <span>End Date</span>
          <span id="modal-end-date">—</span>
        </div>

        <div class="order-total-row">
          <span class="label">Total Due</span>
         <input type="hidden" name="plan_amount" value="49">
<input type="text" value="$49" readonly>
        </div>
      </div><!-- /.order-summary -->


      <!-- Billing Information -->
      <p class="modal-section-label">Billing Information</p>

      <div class="modal-form-grid full-col">
        <div class="mfield">
          <label for="m-name">Full Name</label>
          <input
            type="text"
            name="fullname"
            placeholder="James R. Whitmore"
            autocomplete="name"
          />
          @error("fullname")
         <p>{{$message}}</p>
         @enderror
        </div>
      </div>

      <div class="modal-form-grid full-col">
        <div class="mfield">
          <label for="m-email">Email Address</label>
          <input
            type="email"
            name="email"
            placeholder="james@example.com"
            autocomplete="email"
          />
          @error("email")
         <p>{{$message}}</p>
         @enderror
        </div>
      </div>


      <!-- Payment Method -->
      <p class="modal-section-label" style="margin-top:20px;">Payment Method</p>

      <div class="payment-chips" role="radiogroup" aria-label="Select payment method">

        <input type="radio" name="payment" id="pm-card" value="card" checked />
        <label for="pm-card">
          <!-- Credit card icon -->
          <svg viewBox="0 0 24 24">
            <rect x="1" y="4" width="22" height="16" rx="2"/>
            <line x1="1" y1="10" x2="23" y2="10"/>
          </svg>
          Credit Card
        </label> 

      </div><!-- /.payment-chips -->


      <!-- Credit Card Details (shown only when "Credit Card" is selected) -->
      <div class="card-details-panel visible" id="card-details">
        <p class="modal-section-label">Card Details</p>

        <div class="modal-form-grid full-col">
          <div class="mfield">
            <label for="m-cardholder">Name on Card</label>
            <input
              type="text"
              id="m-cardholder"
              name="card_name"
              placeholder="James R. Whitmore"
              autocomplete="cc-name"
            />
            @error("card_name")
         <p>{{$message}}</p>
         @enderror
          </div>
        </div>

        <div class="modal-form-grid full-col">
          <div class="mfield">
            <label for="m-cardnum">Card Number</label>
            <input
              type="text"
              id="m-cardnum"
              placeholder="1234  5678  9012  3456"
              name="card_number"
              maxlength="19"
              autocomplete="cc-number"
            />
            @error("card_number")
         <p>{{$message}}</p>
         @enderror
          </div>
        </div>

        <div class="modal-form-grid">
          <div class="mfield">
            <label for="m-expiry">Expiry Date</label>
            <input
              type="text"
              id="m-expiry"
              name="expiry"
              placeholder="MM / YY"
              maxlength="7"
              autocomplete="cc-exp"
            />
            @error("expiry")
         <p>{{$message}}</p>
         @enderror
          </div>
          <div class="mfield">
            <label for="m-cvv">CVV</label>
            <input
              type="password"
              id="m-cvv"
              name="cvv"
              placeholder="• • •"
              maxlength="4"
              autocomplete="cc-csc"
            />
            @error("cvv")
         <p>{{$message}}</p>
         @enderror
          </div>
        </div>
      </div><!-- /#card-details -->


      <!-- Confirm button -->
      <button class="btn-confirm" id="btn-confirm-pay" type="submit">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <polyline points="20 6 9 17 4 12"/>
        </svg>
        Confirm &amp; Pay $49.00
      </button>
</form>
    
    <!-- /#modal-form-body -->


    <!-- Success state (hidden initially) -->
    <div class="modal-success" id="modal-success" aria-live="polite">
      <div class="success-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24">
          <polyline points="20 6 9 17 4 12"/>
        </svg>
      </div>
      <h3 class="success-title">You're a Scholar!</h3>
      <p class="success-sub">
        Your Scholar is now active. A confirmation has been sent to your email address.
      </p>
      <button class="success-close" id="success-close">
        Back to Dashboard
      </button>
    </div>

  </div><!-- /.modal -->
</div><!-- /.modal-backdrop -->

<!-- ════════════════════════════════════════════
     JAVASCRIPT
════════════════════════════════════════════ -->

<script>

 /* ── Date helpers ── */
  const MONTHS = [
    'January','February','March','April','May','June',
    'July','August','September','October','November','December'
  ];
 
  function formatDate(date) {
    const day   = String(date.getDate()).padStart(2, '0');
    const month = MONTHS[date.getMonth()];
    const year  = date.getFullYear();
    return `${day} ${month} ${year}`;
  }
 
  /* Today → start date */
  const today   = new Date();
  const endDate = new Date(today);
  endDate.setFullYear(endDate.getFullYear() + 2);
  endDate.setDate(endDate.getDate() - 1);   /* one day before the anniversary */
 
  document.getElementById('f-start-date').value = formatDate(today);
  document.getElementById('f-end-date').value   = formatDate(endDate); // detail card input
document.getElementById('modal-start-date').textContent = formatDate(today);    // modal summary
document.getElementById('modal-end-date').textContent   = formatDate(endDate);  // modal summary
  /* ── DOM references ── */
  const backdrop      = document.getElementById('checkout-backdrop');
  const openBtn       = document.getElementById('open-checkout');
  const closeBtn      = document.getElementById('close-checkout');
  const confirmBtn    = document.getElementById('btn-confirm-pay');
  const successClose  = document.getElementById('success-close');
  const formBody      = document.getElementById('modal-form-body');
  const successPanel  = document.getElementById('modal-success');
  const cardDetails   = document.getElementById('card-details');
  const paymentRadios = document.querySelectorAll('input[name="payment"]');
  const cardNumInput  = document.getElementById('m-cardnum');
  const expiryInput   = document.getElementById('m-expiry');

  /* ── Open modal ── */
  openBtn.addEventListener('click', () => {
    backdrop.classList.add('open');
    document.body.style.overflow = 'hidden';
    closeBtn.focus();
  });

  /* ── Close modal ── */
  function closeModal() {
    backdrop.classList.remove('open');
    document.body.style.overflow = '';
    /* Reset success state after transition */
    setTimeout(() => {
      formBody.style.display    = '';
      successPanel.classList.remove('show');
    }, 320);
  }

  closeBtn.addEventListener('click', closeModal);
  successClose.addEventListener('click', closeModal);

  /* Close on backdrop click */
  backdrop.addEventListener('click', (e) => {
    if (e.target === backdrop) closeModal();
  });

  /* Close on Escape key */
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && backdrop.classList.contains('open')) closeModal();
  });

  /* ── Payment method toggle → show/hide card fields ── */
  paymentRadios.forEach(radio => {
    radio.addEventListener('change', () => {
      if (radio.value === 'card' && radio.checked) {
        cardDetails.classList.add('visible');
      } else {
        cardDetails.classList.remove('visible');
      }
    });
  });

  /* ── Card number formatting (groups of 4) ── */
  cardNumInput.addEventListener('input', (e) => {
    let val = e.target.value.replace(/\D/g, '').substring(0, 16);
    val = val.match(/.{1,4}/g)?.join('  ') || val;
    e.target.value = val;
  });

  /* ── Expiry date formatting (MM / YY) ── */
  expiryInput.addEventListener('input', (e) => {
    let val = e.target.value.replace(/\D/g, '').substring(0, 4);
    if (val.length >= 3) {
      val = val.substring(0, 2) + ' / ' + val.substring(2);
    }
    e.target.value = val;
  });

</script>
</body>
</html>





