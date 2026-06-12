@extends('User.navbar')
@section('user')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Subscription Pricing — Online E-Book System</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Lato:wght@300;400;700&family=Merriweather:ital,wght@0,300;1,300&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="/css/pricing.css">
</head>
<body>
 
<div class="page">
 
  <!-- ══ HERO ══ -->
  <header class="hero1">
    <span class="eyebrow">Online E-Book System</span>
    <h1 class="hero1-title">Choose Your <em>Reading</em><br>Membership</h1>
    <p class="hero1-sub">
      Unlock unlimited access to our digital library, competitions,
      and exclusive content — renewed on your terms.
    </p>
 
    <!-- Billing toggle -->
    <div class="toggle-wrap">
      <span class="toggle-label active" id="lbl-annual"
            onclick="setMode('annual')">Annual Billing</span>
    </div>
  </header>
 
 
  <!-- ══ PRICING CARDS ══ -->
  <section class="cards" aria-label="Subscription plans">
 
    <!-- ── Card 1 : Reader (1 Year) ── -->
    <article class="card">
      <div class="card-stripe"></div>
 
      <p class="plan-duration">1-Year Plan</p>
      <h2 class="plan-name">Reader</h2>
      <p class="plan-tagline">Begin your digital journey with essential access.</p>
 
      <hr class="divider" />
 
      <div class="price-row">
        <span class="currency">$</span>
        <span class="amount" id="price-1">29</span>
        <span class="period">&nbsp;/year</span>
      </div>
      
 
      <ul class="features">
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Download up to <strong>10 PDFs</strong> per month</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Book update notifications</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Email newsletters &amp; alerts</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Basic catalogue search</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Competition viewing access</span>
        </li>
        <li class="feat-muted">
          <span class="feat-icon">
            <svg viewBox="0 0 24 24">
              <line x1="18" y1="6" x2="6" y2="18"/>
              <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
          </span>
          <span>Competition participation</span>
        </li>
        <li class="feat-muted">
          <span class="feat-icon">
            <svg viewBox="0 0 24 24">
              <line x1="18" y1="6" x2="6" y2="18"/>
              <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
          </span>
          <span>Hard copy discounts</span>
        </li>
      </ul>
 
      <a href="{{route('readerplandetail')}}" class="cta">Get Reader</a>
    </article>
 
 
    <!-- ── Card 2 : Scholar (2 Years) — FEATURED ── -->
    <article class="card featured">
      <div class="card-stripe"></div>
      <span class="badge">Most Popular</span>
 
      <p class="plan-duration">2-Year Plan</p>
      <h2 class="plan-name">Scholar</h2>
      <p class="plan-tagline">The complete reading &amp; writing experience.</p>
 
      <hr class="divider" />
 
      <div class="price-row">
        <span class="currency">$</span>
        <span class="amount" id="price-2">49</span>
        <span class="period">&nbsp;/ 2 years</span>
      </div>
      
 
      <ul class="features">
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span><strong>Unlimited</strong> PDF downloads</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Priority book update access</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Full competition participation</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Essay &amp; story submissions</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Advanced catalogue search</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Order tracking dashboard</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Email order confirmations</span>
        </li>
      </ul>
 
      <a href="{{route('scholarplan')}}" class="cta">Subscribe Now</a>
    </article>
 
 
    <!-- ── Card 3 : Luminary (3 Years) ── -->
    <article class="card">
      <div class="card-stripe"></div>
 
      <p class="plan-duration">3-Year Plan</p>
      <h2 class="plan-name">Luminary</h2>
      <p class="plan-tagline">Maximum value for the devoted bibliophile.</p>
 
      <hr class="divider" />
 
      <div class="price-row">
        <span class="currency">$</span>
        <span class="amount" id="price-3">69</span>
        <span class="period">&nbsp;/ 3 years</span>
      </div>
     
      <ul class="features">
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Everything in Scholar plan</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Early access to new releases</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span><strong>15% off</strong> all hard copies &amp; CDs</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Exclusive member-only content</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Competition winner badge</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Priority customer support</span>
        </li>
        <li>
          <span class="feat-icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          <span>Shipping fee waiver on 1st order</span>
        </li>
      </ul>
 
      <a href="{{route('Luminaryplan')}}" class="cta">Go Luminary</a>
    </article>
 
  </section><!-- /.cards -->
 
 
  <!-- ══ PAYMENT METHODS ══ -->
  <div class="methods">
    <span class="methods-label">Accepted Payments</span>
    <span class="method-chip">Credit Card</span>
    <span class="method-chip">Demand Draft</span>
    <span class="method-chip">Cheque</span>
    <span class="method-chip">VPP</span>
  </div>
 
 
  <!-- ══ GUARANTEE ══ -->
  <p class="guarantee">
    All plans include <strong>automatic book update notifications</strong>
    and access to our full digital archive.<br>
    PDF access is granted immediately upon <strong>payment confirmation</strong>.
  </p>
 
  <div class="ornament">❧ &nbsp; ❧ &nbsp; ❧</div>
 
</div><!-- /.page -->
 
 
<!-- ══ SCRIPT : Billing Toggle ══ -->
<script>
  let mode = 'annual';
 
  function setMode(m) {
    mode = m;
 
    /* Toggle active label */
    document.getElementById('lbl-annual').classList.toggle('active', m === 'annual');
 
    if (m === 'annual') {
      /* Annual prices */
      document.getElementById('price-1').textContent = '29';
      document.getElementById('price-2').textContent = '49';
      document.getElementById('price-3').textContent = '69';
 
    } 
  }
</script>
 
</body>
</html>
@endsection