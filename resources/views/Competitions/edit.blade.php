<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Competition — Authore Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    /* ═══════════════════════════════════════
       AUTHORE — Competition Form
       Theme: Cream + Red #c8102e + Dark #1a1a1a
    ═══════════════════════════════════════ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
 
    :root {
      --red:        #c8102e;
      --red-dark:   #9e0b24;
      --red-light:  rgba(200,16,46,.08);
      --dark:       #1a1a1a;
      --charcoal:   #2d2d2d;
      --cream:      #f5f0e8;
      --cream-dark: #ede6d6;
      --white:      #ffffff;
      --gray:       #888;
      --gray-light: #d4d0c8;
      --green:      #2a8a4a;
      --shadow:     0 4px 24px rgba(0,0,0,.09);
      --shadow-lg:  0 14px 48px rgba(0,0,0,.16);
      --radius:     6px;
      --ff-head:    'Playfair Display', Georgia, serif;
      --ff-body:    'Lato', sans-serif;
      --tr:         0.25s cubic-bezier(.4,0,.2,1);
    }
 
    html { scroll-behavior: smooth; }
    body {
      font-family: var(--ff-body);
      background: var(--cream);
      color: var(--dark);
      min-height: 100vh;
      padding: 0;
    }
 
    /* ══ NAVBAR ══ */
    .navbar {
      background: var(--dark);
      height: 64px;
      display: flex; align-items: center;
      padding: 0 32px;
      position: sticky; top: 0; z-index: 100;
      border-bottom: 3px solid var(--red);
    }
    .navbar-inner { display: flex; align-items: center; justify-content: space-between; width: 100%; max-width: 1100px; margin: 0 auto; }
    .brand { display: flex; align-items: center; gap: 8px; text-decoration: none; }
    .brand-icon { color: var(--red); font-size: 1.1rem; }
    .brand-name { font-family: var(--ff-head); font-size: 1.35rem; font-weight: 700; color: var(--white); }
    .brand-dot  { color: var(--red); }
    .nav-right  { display: flex; align-items: center; gap: 1rem; }
    .nav-badge  { font-size: .7rem; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; background: rgba(200,16,46,.2); color: rgba(255,255,255,.8); border: 1px solid rgba(200,16,46,.4); padding: 4px 12px; border-radius: 20px; }
    .nav-back   { font-size: .76rem; font-weight: 700; color: rgba(255,255,255,.5); text-decoration: none; display: flex; align-items: center; gap: 6px; transition: color var(--tr); }
    .nav-back:hover { color: var(--white); }
 
    /* ══ PAGE HEADER ══ */
    .page-header {
      background: var(--white);
      border-bottom: 1px solid var(--cream-dark);
      padding: 32px 0;
    }
    .page-header-inner {
      max-width: 1100px; margin: 0 auto; padding: 0 32px;
      display: flex; align-items: center; justify-content: space-between; gap: 1rem; flex-wrap: wrap;
    }
    .ph-left { display: flex; align-items: center; gap: 16px; }
    .ph-icon { width: 52px; height: 52px; border-radius: 12px; background: var(--red); display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: var(--white); flex-shrink: 0; }
    .ph-title { font-family: var(--ff-head); font-size: 1.6rem; font-weight: 700; color: var(--dark); margin-bottom: 2px; }
    .ph-sub    { font-size: .82rem; color: var(--gray); }
    .ph-steps  { display: flex; align-items: center; gap: 0; }
    .step-pill {
      display: flex; align-items: center; gap: 7px;
      padding: 7px 16px; font-size: .72rem; font-weight: 800;
      letter-spacing: .08em; text-transform: uppercase;
      background: var(--cream); color: var(--gray);
      border: 1.5px solid var(--cream-dark); border-radius: 30px;
      margin-left: -1px;
    }
    .step-pill.active { background: var(--red); color: var(--white); border-color: var(--red); z-index: 1; }
    .step-pill.done   { background: var(--green); color: var(--white); border-color: var(--green); }
 
    /* ══ LAYOUT ══ */
    .form-layout {
      max-width: 1100px; margin: 40px auto 80px;
      padding: 0 32px;
      display: grid; grid-template-columns: 1fr 320px; gap: 2rem; align-items: start;
    }
 
    /* ══ FORM CARD ══ */
    .form-card {
      background: var(--white);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
    }
    .form-section {
      padding: 28px 32px;
      border-bottom: 1px solid var(--cream-dark);
    }
    .form-section:last-child { border-bottom: none; }
    .fs-header {
      display: flex; align-items: center; gap: 12px; margin-bottom: 22px;
    }
    .fs-num {
      width: 28px; height: 28px; border-radius: 50%;
      background: var(--red); color: var(--white);
      font-size: .72rem; font-weight: 900; display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .fs-title { font-family: var(--ff-head); font-size: 1.05rem; font-weight: 700; color: var(--dark); }
    .fs-desc  { font-size: .76rem; color: var(--gray); margin-top: 1px; }
 
    /* ══ FORM FIELDS ══ */
    .form-group { margin-bottom: 18px; }
    .form-group:last-child { margin-bottom: 0; }
    .form-row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .form-row-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px; }
 
    label {
      display: block; font-size: .7rem; font-weight: 800;
      text-transform: uppercase; letter-spacing: .12em;
      color: var(--charcoal); margin-bottom: 6px;
    }
    .req { color: var(--red); }
    .lbl-hint { font-size: .68rem; font-weight: 400; text-transform: none; letter-spacing: 0; color: var(--gray); margin-left: 6px; }
 
    .input-wrap { position: relative; }
    .input-icon {
      position: absolute; left: 12px; top: 50%;
      transform: translateY(-50%); font-size: .78rem;
      color: var(--gray); pointer-events: none; transition: color var(--tr);
    }
    .input-wrap.has-icon input,
    .input-wrap.has-icon select { padding-left: 36px; }
    .input-wrap:focus-within .input-icon { color: var(--red); }
 
    input[type="text"],
    input[type="date"],
    input[type="number"],
    input[type="email"],
    select,
    textarea {
      width: 100%; padding: 11px 14px;
      border: 1.5px solid var(--gray-light); border-radius: var(--radius);
      font-family: var(--ff-body); font-size: .88rem;
      background: var(--cream); color: var(--dark);
      outline: none; transition: border-color var(--tr), box-shadow var(--tr), background var(--tr);
      appearance: none;
    }
    input:focus, select:focus, textarea:focus {
      border-color: var(--red);
      background: var(--white);
      box-shadow: 0 0 0 3px rgba(200,16,46,.08);
    }
    input.error, select.error, textarea.error {
      border-color: var(--red) !important;
      box-shadow: 0 0 0 3px rgba(200,16,46,.12) !important;
    }
    textarea { resize: vertical; min-height: 100px; line-height: 1.7; }
    select { cursor: pointer; }
 
    /* Char counter */
    .field-meta { display: flex; justify-content: space-between; margin-top: 5px; }
    .field-hint  { font-size: .72rem; color: var(--gray); }
    .field-count { font-size: .72rem; color: var(--gray); font-weight: 700; }
    .field-count.warn  { color: #e8a020; }
    .field-count.over  { color: var(--red); }
 
    /* error message */
    .err-msg { font-size: .72rem; color: var(--red); margin-top: 4px; display: none; align-items: center; gap: 4px; }
    .err-msg.show { display: flex; }
 
    /* ══ TIMER FIELD (special) ══ */
    .timer-field-wrap {
      background: var(--dark); border-radius: var(--radius);
      padding: 20px; position: relative; overflow: hidden;
    }
    .timer-field-wrap::before {
      content: ''; position: absolute; top: -20px; right: -20px;
      width: 100px; height: 100px; border-radius: 50%;
      background: rgba(200,16,46,.1);
    }
    .timer-field-wrap label { color: rgba(255,255,255,.7); }
    .timer-input-row { display: flex; align-items: center; gap: 10px; }
    .timer-num-wrap { position: relative; flex: 1; }
    .timer-num-wrap input {
      background: rgba(255,255,255,.08); border-color: rgba(255,255,255,.15);
      color: var(--white); font-family: var(--ff-head); font-size: 1.6rem;
      font-weight: 700; text-align: center; padding: 14px 10px;
    }
    .timer-num-wrap input:focus { background: rgba(255,255,255,.12); border-color: var(--red); box-shadow: 0 0 0 3px rgba(200,16,46,.2); }
    .timer-unit { font-size: .7rem; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: rgba(255,255,255,.4); text-align: center; margin-top: 5px; }
    .timer-sep { font-family: var(--ff-head); font-size: 1.8rem; color: rgba(255,255,255,.3); font-weight: 700; margin-bottom: 18px; }
    .timer-presets { display: flex; gap: 6px; flex-wrap: wrap; margin-top: 14px; }
    .timer-preset {
      background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.12);
      color: rgba(255,255,255,.6); font-size: .72rem; font-weight: 700;
      letter-spacing: .06em; padding: 5px 12px; border-radius: 20px;
      cursor: pointer; transition: var(--tr);
    }
    .timer-preset:hover, .timer-preset.active { background: var(--red); border-color: var(--red); color: var(--white); }
    .timer-live-preview {
      margin-top: 14px; padding: 10px 14px;
      background: rgba(255,255,255,.05); border-radius: var(--radius);
      border: 1px solid rgba(255,255,255,.08);
      display: flex; align-items: center; gap: 8px;
      font-size: .78rem; color: rgba(255,255,255,.5);
    }
    .timer-live-preview i { color: var(--red); }
    .timer-live-val { color: var(--white); font-weight: 700; }
 
    /* ══ PRICE DETAILS (special) ══ */
    .price-grid {
      background: linear-gradient(135deg, var(--cream), var(--cream-dark));
      border: 1.5px solid var(--cream-dark); border-radius: var(--radius);
      padding: 20px; display: flex; flex-direction: column; gap: 14px;
    }
    .price-row-header {
      display: grid; grid-template-columns: 1fr 1fr auto;
      gap: 10px; align-items: center;
    }
    .price-row-header span { font-size: .68rem; font-weight: 800; text-transform: uppercase; letter-spacing: .12em; color: var(--gray); }
    .price-entry {
      display: grid; grid-template-columns: 1fr 1fr auto;
      gap: 10px; align-items: start;
    }
    .price-entry .price-label-input { }
    .price-entry .price-amount-wrap { position: relative; }
    .price-entry .currency-sym {
      position: absolute; left: 11px; top: 50%;
      transform: translateY(-50%); font-size: .9rem;
      font-weight: 700; color: var(--gray);
    }
    .price-entry .price-amount-wrap input { padding-left: 26px; }
    .price-entry .remove-price-btn {
      width: 34px; height: 34px; border-radius: 50%;
      background: none; border: 1.5px solid var(--gray-light);
      color: var(--gray); cursor: pointer; font-size: .8rem;
      display: flex; align-items: center; justify-content: center;
      transition: var(--tr); margin-top: 7px;
    }
    .price-entry .remove-price-btn:hover { background: var(--red); border-color: var(--red); color: var(--white); }
    .add-price-btn {
      display: flex; align-items: center; gap: 7px;
      background: none; border: 1.5px dashed var(--gray-light);
      color: var(--gray); font-family: var(--ff-body);
      font-size: .78rem; font-weight: 700; letter-spacing: .06em;
      text-transform: uppercase; padding: 9px 16px;
      border-radius: var(--radius); cursor: pointer; transition: var(--tr);
      width: 100%;
    }
    .add-price-btn:hover { border-color: var(--red); color: var(--red); background: var(--red-light); }
 
    /* ══ RULES FIELD ══ */
    .rules-wrap { position: relative; }
    .rules-toolbar {
      display: flex; gap: 4px; margin-bottom: 8px;
      background: var(--cream-dark); border-radius: var(--radius) var(--radius) 0 0;
      padding: 8px 10px; border: 1.5px solid var(--gray-light); border-bottom: none;
    }
    .rule-format-btn {
      width: 28px; height: 28px; border: none; border-radius: 4px;
      background: none; color: var(--gray); font-size: .8rem;
      cursor: pointer; display: flex; align-items: center; justify-content: center;
      transition: var(--tr); font-weight: 700;
    }
    .rule-format-btn:hover { background: var(--cream); color: var(--red); }
    .rule-format-btn.active { background: var(--red); color: var(--white); }
    .rules-textarea {
      border-radius: 0 0 var(--radius) var(--radius) !important;
      min-height: 130px;
    }
    .rules-preview {
      margin-top: 8px; padding: 12px 14px;
      background: var(--cream); border: 1.5px solid var(--cream-dark);
      border-radius: var(--radius); font-size: .84rem; line-height: 1.8;
      min-height: 60px; color: var(--charcoal);
    }
    .rules-preview ul { padding-left: 1.2rem; }
    .rules-preview li { margin-bottom: 4px; }
 
    /* ══ DATE RANGE VISUAL ══ */
    .date-range-visual {
      margin-top: 12px; padding: 12px 16px;
      background: var(--cream); border: 1.5px solid var(--cream-dark);
      border-radius: var(--radius); display: flex; align-items: center; gap: 10px;
      font-size: .8rem; color: var(--gray);
    }
    .drv-dot { width: 10px; height: 10px; border-radius: 50%; background: var(--red); flex-shrink: 0; }
    .drv-line { flex: 1; height: 2px; background: linear-gradient(90deg, var(--red), var(--cream-dark)); }
    .drv-dot-end { width: 10px; height: 10px; border-radius: 50%; background: var(--gray-light); flex-shrink: 0; }
    .drv-label { font-weight: 700; color: var(--dark); font-size: .82rem; }
    .drv-duration { font-size: .72rem; background: var(--cream-dark); padding: 3px 10px; border-radius: 20px; color: var(--charcoal); font-weight: 700; }
 
    /* ══ SIDEBAR ══ */
    .sidebar { display: flex; flex-direction: column; gap: 1.2rem; }
 
    .side-card {
      background: var(--white); border-radius: var(--radius);
      box-shadow: var(--shadow); overflow: hidden;
    }
    .side-card-header {
      padding: 14px 18px; background: var(--dark);
      display: flex; align-items: center; gap: 8px;
      font-size: .72rem; font-weight: 800; letter-spacing: .12em;
      text-transform: uppercase; color: rgba(255,255,255,.7);
    }
    .side-card-header i { color: var(--red); }
    .side-card-header.red-header { background: var(--red); }
    .side-card-header.red-header i { color: rgba(255,255,255,.8); }
    .side-card-header.red-header span { color: var(--white); }
    .side-card-body { padding: 16px 18px; }
 
    /* Preview card */
    .preview-comp-card {
      border-radius: var(--radius); overflow: hidden;
      border: 1.5px solid var(--cream-dark);
    }
    .pcc-header {
      padding: 16px; background: var(--red);
      display: flex; align-items: center; justify-content: space-between;
    }
    .pcc-type { font-size: .65rem; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: rgba(255,255,255,.8); display: flex; align-items: center; gap: 6px; }
    .pcc-status { font-size: .62rem; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; background: rgba(255,255,255,.2); color: rgba(255,255,255,.9); padding: 3px 8px; border-radius: 20px; }
    .pcc-body { padding: 16px; }
    .pcc-title { font-family: var(--ff-head); font-size: .98rem; font-weight: 700; color: var(--dark); margin-bottom: 6px; min-height: 22px; }
    .pcc-meta { display: flex; flex-direction: column; gap: 5px; margin-bottom: 12px; }
    .pcc-meta span { font-size: .74rem; color: var(--gray); display: flex; align-items: center; gap: 6px; }
    .pcc-meta i { color: var(--red); width: 12px; }
    .pcc-prize { display: flex; gap: 6px; flex-wrap: wrap; }
    .pcc-prize-pill { background: var(--cream); font-size: .68rem; font-weight: 700; padding: 4px 10px; border-radius: 20px; color: var(--charcoal); }
 
    /* Checklist */
    .checklist { display: flex; flex-direction: column; gap: 8px; }
    .cl-item { display: flex; align-items: center; gap: 8px; font-size: .8rem; }
    .cl-dot { width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; }
    .cl-dot.filled   { background: var(--green); }
    .cl-dot.empty    { background: var(--gray-light); border: 1.5px solid var(--gray-light); }
    .cl-dot.required { background: var(--red); }
    .cl-text.done    { color: var(--green); }
    .cl-text.pending { color: var(--gray); }
    .cl-text.req     { color: var(--red); }
 
    /* Tips */
    .tips-list { display: flex; flex-direction: column; gap: 10px; }
    .tip-item { display: flex; align-items: flex-start; gap: 10px; font-size: .78rem; color: #555; line-height: 1.6; }
    .tip-item i { color: var(--red); margin-top: 3px; flex-shrink: 0; font-size: .72rem; }
 
    /* ══ FORM ACTIONS ══ */
    .form-actions-bar {
      background: var(--white); border-top: 2px solid var(--cream-dark);
      padding: 20px 32px;
      display: flex; align-items: center; justify-content: space-between;
      flex-wrap: wrap; gap: 1rem;
      border-radius: 0 0 var(--radius) var(--radius);
    }
    .fa-left { display: flex; align-items: center; gap: .8rem; }
    .fa-right { display: flex; align-items: center; gap: .8rem; }
 
    /* ══ BUTTONS ══ */
    .btn {
      display: inline-flex; align-items: center; gap: 7px;
      font-family: var(--ff-body); font-size: .78rem; font-weight: 800;
      letter-spacing: .1em; text-transform: uppercase;
      padding: 11px 22px; border-radius: var(--radius);
      border: 2px solid transparent; cursor: pointer; transition: var(--tr);
      text-decoration: none;
    }
    .btn-red   { background: var(--red);  color: var(--white); border-color: var(--red); }
    .btn-red:hover  { background: var(--red-dark); transform: translateY(-1px); box-shadow: 0 5px 16px rgba(200,16,46,.3); }
    .btn-dark  { background: var(--dark); color: var(--white); border-color: var(--dark); }
    .btn-dark:hover { background: var(--charcoal); transform: translateY(-1px); }
    .btn-ghost { background: transparent; color: var(--charcoal); border-color: var(--gray-light); }
    .btn-ghost:hover { border-color: var(--dark); color: var(--dark); }
    .btn-outline-red { background: transparent; color: var(--red); border-color: var(--red); }
    .btn-outline-red:hover { background: var(--red); color: var(--white); }
    .btn-sm { padding: 8px 16px; font-size: .72rem; }
 
    /* ══ SUCCESS OVERLAY ══ */
    .success-overlay {
      position: fixed; inset: 0; background: rgba(0,0,0,.6);
      z-index: 2000; display: none; align-items: center; justify-content: center;
    }
    .success-overlay.show { display: flex; }
    .success-box {
      background: var(--white); border-radius: 10px;
      padding: 50px 44px; text-align: center;
      max-width: 420px; width: 90%;
      box-shadow: 0 24px 80px rgba(0,0,0,.25);
      animation: popIn .3s cubic-bezier(.4,0,.2,1);
    }
    @keyframes popIn { from{transform:scale(.9);opacity:0} to{transform:scale(1);opacity:1} }
    .sb-icon { font-size: 3.5rem; color: var(--green); margin-bottom: 1rem; }
    .sb-icon i { animation: bounceIn .5s .2s ease both; }
    @keyframes bounceIn { 0%{transform:scale(0)} 70%{transform:scale(1.2)} 100%{transform:scale(1)} }
    .success-box h3 { font-family: var(--ff-head); font-size: 1.6rem; margin-bottom: .5rem; }
    .success-box p  { font-size: .88rem; color: var(--gray); margin-bottom: 1.2rem; line-height: 1.7; }
    .sb-ref { background: var(--cream); padding: 9px 18px; border-radius: var(--radius); font-size: .8rem; margin-bottom: 1.5rem; }
    .sb-ref strong { color: var(--red); }
    .sb-actions { display: flex; gap: .8rem; justify-content: center; flex-wrap: wrap; }
 
    /* ══ TOAST ══ */
    .toast {
      position: fixed; bottom: 28px; left: 50%;
      transform: translateX(-50%) translateY(20px);
      background: var(--dark); color: var(--white);
      display: flex; align-items: center; gap: 10px;
      padding: 12px 22px; border-radius: 30px;
      font-size: .84rem; font-weight: 700;
      box-shadow: 0 8px 28px rgba(0,0,0,.25);
      opacity: 0; pointer-events: none;
      transition: opacity .3s, transform .3s; z-index: 9999;
      white-space: nowrap; border-left: 3px solid var(--red);
    }
    .toast.show { opacity: 1; transform: translateX(-50%) translateY(0); }
    .toast i { color: var(--red); }
 
    /* ══ RESPONSIVE ══ */
    @media (max-width: 900px) {
      .form-layout { grid-template-columns: 1fr; }
      .sidebar { display: grid; grid-template-columns: 1fr 1fr; }
      .ph-steps { display: none; }
    }
    @media (max-width: 640px) {
      .form-layout { padding: 0 16px; margin-top: 24px; }
      .form-section { padding: 20px 18px; }
      .form-row-2, .form-row-3 { grid-template-columns: 1fr; }
      .sidebar { grid-template-columns: 1fr; }
      .form-actions-bar { flex-direction: column; align-items: stretch; }
      .fa-left, .fa-right { justify-content: center; }
      .page-header-inner { flex-direction: column; align-items: flex-start; }
    }
  </style>
</head>
<body>
<!-- ══════════════ MAIN LAYOUT ══════════════ -->
<div class="form-layout">
 
  <!-- ══ LEFT: FORM ══ -->
  <div>
    <form action="{{route('updatecompetition',$result->id)}}" method="post">
        @csrf
      <div class="form-card">
 
        <!-- ── SECTION 1: Basic Info ── -->
        <div class="form-section">
          <div class="fs-header">
            <div class="fs-num">1</div>
            <div>
              <div class="fs-title">Competition Title</div>
              <div class="fs-desc">Give your competition a clear, compelling name</div>
            </div>
          </div>
 
          <div class="form-group">
            <label for="title">Competition Title <span class="req">*</span></label>
            <div class="input-wrap has-icon">
              <i class="fas fa-trophy input-icon"></i>
              <input type="text" id="title" name="title" placeholder="e.g. National Essay Writing Championship 2026" maxlength="120" oninput="updatePreviewTitle(this.value); countField(this,'titleCount',120); validateField(this)" value="{{$result->title}}"/>
            </div>
            <div class="field-meta">
              <span class="err-msg" id="titleErr"><i class="fas fa-exclamation-circle"></i> Title is required</span>
              <span class="field-count" id="titleCount">0 / 120</span>
            </div>
          </div>
 
          <div class="form-row-">
            <div class="form-group">
              <label for="comp_type">Competition Type <span class="req">*</span></label>
              <div class="input-wrap has-icon">
                <i class="fas fa-tag input-icon"></i>
               <input type="text" name="comp_type" value='{{$result->type}}'>
              </div>
              <div class="err-msg" id="typeErr"><i class="fas fa-exclamation-circle"></i> Please select a type</div>
            </div>
            <div class="form-group">
              
              
            </div>
          </div>
 
          <div class="form-group">
            <label for="theme">Theme / Topic<span class="lbl-hint">(optional)</span></label>
            <div class="input-wrap has-icon">
              <i class="fas fa-lightbulb input-icon"></i>
              <input type="text" id="theme" name="theme" placeholder="e.g. Technology & Society" maxlength="100" oninput="countField(this,'themeCount',100)" />
            </div>
            <div class="field-meta">
              <span class="field-hint">Leave blank for open-theme competitions</span>
              <span class="field-count" id="themeCount">0 / 100</span>
            </div>
          </div>
        </div>
 
        <!-- ── SECTION 2: Dates ── -->
        <div class="form-section">
          <div class="fs-header">
            <div class="fs-num">2</div>
            <div>
              <div class="fs-title">Start & End Dates</div>
              <div class="fs-desc">Set the competition window — entries accepted between these dates</div>
            </div>
          </div>
 
          <div class="form-row-2">
            <div class="form-group">
              <label for="start_date">Start Date <span class="req">*</span></label>
              <div class="input-wrap has-icon">
                <i class="fas fa-calendar-plus input-icon"></i>
                <input type="date" id="start_date" name="start_date" onchange="updateDateVisual(); validateField(this)" value="{{ date('Y-m-d', strtotime($result->start_date)) }}"/>
              </div>
              <div class="err-msg" id="startDateErr"><i class="fas fa-exclamation-circle"></i> Start date is required</div>
            </div>
            <div class="form-group">
              <label for="end_date">End Date <span class="req">*</span></label>
              <div class="input-wrap has-icon">
                <i class="fas fa-calendar-times input-icon"></i>
                <input type="date" id="end_date" name="end_date" onchange="updateDateVisual(); validateField(this)" value="{{ date('Y-m-d', strtotime($result->end_date)) }}"/>
              </div>
              <div class="err-msg" id="endDateErr"><i class="fas fa-exclamation-circle"></i> End date must be after start date</div>
            </div>
          </div>
 
          <!-- Date Range Visual -->
          <div class="date-range-visual" id="dateRangeVisual" style="display:none">
            <div class="drv-dot"></div>
            <span class="drv-label" id="drvStart">—</span>
            <div class="drv-line"></div>
            <span class="drv-duration" id="drvDuration">— days</span>
            <div class="drv-line"></div>
            <span class="drv-label" id="drvEnd">—</span>
            <div class="drv-dot-end"></div>
          </div>
        </div>
 
        <!-- ── SECTION 3: Rules ── -->
        <div class="form-section">
          <div class="fs-header">
            <div class="fs-num">3</div>
            <div>
              <div class="fs-title">Rules & Guidelines</div>
              <div class="fs-desc">Enter the rules participants must follow</div>
            </div>
          </div>
 
          <div class="form-group">
            <label for="rules">Competition Rules <span class="req">*</span></label>
            <div class="rules-wrap">
              <div class="rules-toolbar">
                <button type="button" class="rule-format-btn" title="Bold" onclick="formatRule('bold')"><i class="fas fa-bold"></i></button>
                <button type="button" class="rule-format-btn" title="Bullet list" onclick="formatRule('bullet')"><i class="fas fa-list-ul"></i></button>
                <button type="button" class="rule-format-btn" title="Numbered list" onclick="formatRule('number')"><i class="fas fa-list-ol"></i></button>
                <button type="button" class="rule-format-btn" title="Preview" id="previewRuleBtn" onclick="toggleRulesPreview()"><i class="fas fa-eye"></i></button>
              </div>
              <textarea id="rules" name="rules" class="rules-textarea" rows="7"
                placeholder="Enter each rule on a new line, e.g.:&#10;- Word count: 1,000 to 3,000 words&#10;- English only&#10;- Original unpublished work&#10;- One entry per account&#10;- No AI-generated content&#10;- Judges' decision is final"
                oninput="countField(this,'rulesCount',2000); validateField(this); updateRulesPreview()">
            {{$result->rules}}</textarea>
            </div>
            <div class="field-meta">
              <span class="err-msg" id="rulesErr"><i class="fas fa-exclamation-circle"></i> Rules are required</span>
              <span class="field-count" id="rulesCount">0 / 2,000</span>
            </div>
          </div>
 
          <!-- Rules Preview -->
          <div id="rulesPreviewWrap" style="display:none">
            <label>Preview</label>
            <div class="rules-preview" id="rulesPreview"></div>
          </div>
 
          <div class="form-row-2">
            <div class="form-group">
            
            </div>
            <div class="form-group">
              
            </div>
          </div>
        </div>
 
        <!-- ── SECTION 4: Price / Prize Details ── -->
        <div class="form-section">
          <div class="fs-header">
            <div class="fs-num">4</div>
            <div>
              <div class="fs-title">Price / Prize Details</div>
              <div class="fs-desc">Define prize tiers, entry fees, or subscription charges</div>
            </div>
          </div>
 
          <div class="form-group">
            <label>Entry Fee</label>
            <div class="input-wrap has-icon" style="max-width:240px">
              <i class="fas fa-dollar-sign input-icon"></i>
             <input type="text" name="entry_fee" value='{{$result->prize_details}}'>
            </div>
          </div>
 
          <div class="form-group">
            <label>Prize Tiers <span class="req">*</span></label>
            <div class="price-grid" id="priceGrid">
             <input type="text" placeholder="First Prize" name="prize1" value="{{$result->entry_fee}}">
              <!-- Prize rows rendered by JS -->
            </div>
            <div class="price-grid" id="priceGrid">
             <input type="text" placeholder="2nd Price" name="prize2">
              <!-- Prize rows rendered by JS -->
            </div>
              <div class="price-grid" id="priceGrid">
             <input type="text" placeholder="3rd Price" name="prize3">
              <!-- Prize rows rendered by JS -->
            </div>
            <button type="button" class="add-price-btn" onclick="addPrizeRow()" style="margin-top:10px">
              <i class="fas fa-plus-circle"></i> Add Prize Tier
            </button>
            <div class="err-msg" id="prizeErr"><i class="fas fa-exclamation-circle"></i> Add at least one prize</div>
          </div>
        </div>
        <!-- section 5 description -->
 <div class="form-section">
          <div class="fs-header">
            <div class="fs-num">5</div>
           <div class="fs-title">Description</div>
     
          </div>
                <div class="form-group">
    <label>Description</label>
    <textarea name="description" class="form-control" rows="5" required>
      {{ $result->description }}
    </textarea>
</div>
 
         
 
       
        </div>
       
        <!-- ── FORM ACTIONS ── -->
        <div class="form-actions-bar">
          
          <div class="fa-right">
            
            <button type="submit" class="btn btn-red"><i class="fas fa-paper-plane"></i> Publish Competition</button>
          </div>
        </div>
 
      </div>
    </form>
  </div>
 
  <!-- ══ RIGHT: SIDEBAR ══ -->
  <aside class="sidebar">
 
    <!-- Live Preview -->
    <div class="side-card">
      <div class="side-card-header red-header">
        <i class="fas fa-eye"></i>
        <span>Live Preview</span>
      </div>
      <div class="side-card-body">
        <div class="preview-comp-card">
          <div class="pcc-header">
            <div class="pcc-type" id="previewType"><i class="fas fa-trophy"></i> Competition</div>
            <div class="pcc-status">● Open</div>
          </div>
          <div class="pcc-body">
            <div class="pcc-title" id="previewTitle">Competition title will appear here…</div>
            <div class="pcc-meta">
              <span id="previewDates"><i class="fas fa-calendar"></i> Dates not set</span>
              <span id="previewTimer"><i class="fas fa-clock"></i> Timer: 3 hours</span>
              <span id="previewWords"><i class="fas fa-file-word"></i> Word limit not set</span>
            </div>
            <div class="pcc-prize" id="previewPrizes">
              <span class="pcc-prize-pill" style="color:#888">No prizes added yet</span>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    <!-- Completion Checklist -->
    <div class="side-card">
      <div class="side-card-header">
        <i class="fas fa-tasks"></i>
        <span>Completion Checklist</span>
      </div>
      <div class="side-card-body">
        <div class="checklist" id="checklist">
          <div class="cl-item"><div class="cl-dot empty" id="cl-title"></div><span class="cl-text pending" id="clt-title">Competition title</span></div>
          <div class="cl-item"><div class="cl-dot empty" id="cl-type"></div><span class="cl-text pending" id="clt-type">Competition type</span></div>
          <div class="cl-item"><div class="cl-dot empty" id="cl-dates"></div><span class="cl-text pending" id="clt-dates">Start & end dates</span></div>
          <div class="cl-item"><div class="cl-dot empty" id="cl-rules"></div><span class="cl-text pending" id="clt-rules">Rules & guidelines</span></div>
          <div class="cl-item"><div class="cl-dot empty" id="cl-prizes"></div><span class="cl-text pending" id="clt-prizes">Prize details</span></div>
          <div class="cl-item"><div class="cl-dot filled" id="cl-timer"></div><span class="cl-text done" id="clt-timer">Timer configured</span></div>
        </div>
      </div>
    </div>
 
    <!-- Tips -->
    <div class="side-card">
      <div class="side-card-header">
        <i class="fas fa-lightbulb"></i>
        <span>Admin Tips</span>
      </div>
      <div class="side-card-body">
        <div class="tips-list">
          <div class="tip-item"><i class="fas fa-circle"></i> Use a strong title — it's the first thing participants see.</div>
          <div class="tip-item"><i class="fas fa-circle"></i> The 3-hour timer is required for essay competitions per platform rules.</div>
          <div class="tip-item"><i class="fas fa-circle"></i> Always define at least 1st, 2nd, and 3rd place prizes.</div>
          <div class="tip-item"><i class="fas fa-circle"></i> Set end date at least 2 weeks from today for best participation.</div>
          <div class="tip-item"><i class="fas fa-circle"></i> Clear rules reduce disqualifications and disputes.</div>
        </div>
      </div>
    </div>
 
  </aside>
</div><!-- /form-layout -->
 
<!-- ══════════════ SUCCESS OVERLAY ══════════════ -->
<div class="success-overlay" id="successOverlay">
  <div class="success-box">
    <div class="sb-icon"><i class="fas fa-check-circle"></i></div>
    <h3>Competition Published!</h3>
    <p>Your competition has been successfully created and is now live on the platform. Participants can begin submitting entries.</p>
    <div class="sb-ref">Reference ID: <strong id="compRef"></strong></div>
    <div class="sb-actions">
      <button class="btn btn-red" onclick="closeSuccess()"><i class="fas fa-eye"></i> View Competition</button>
      <button class="btn btn-ghost btn-sm" onclick="addAnother()"><i class="fas fa-plus"></i> Add Another</button>
    </div>
  </div>
</div>
 
<!-- Toast -->
<div class="toast" id="toast"><i class="fas fa-check-circle"></i><span id="toastMsg"></span></div>
 
<script>
/* ══════════ PRIZE ROWS ══════════ */
let prizeCount = 0;
const defaultPrizes = [
  { label: '1st Place', amount: '1000' },
  { label: '2nd Place', amount: '500'  },
  { label: '3rd Place', amount: '250'  },
];
defaultPrizes.forEach(p => addPrizeRow(p.label, p.amount));
 

function removePrize(id) {
  const el = document.getElementById(id);
  if (el) { el.remove(); updatePreviewPrizes(); }
}
 
/* ══════════ TIMER ══════════ */
function setTimer(h, m, s) {
  document.getElementById('timer_hours').value   = h;
  document.getElementById('timer_minutes').value = m;
  document.getElementById('timer_seconds').value = s;
  document.querySelectorAll('.timer-preset').forEach(b => b.classList.remove('active'));
  event.target.closest('.timer-preset').classList.add('active');
  updateTimerPreview();
}
function updateTimerPreview() {
  const h = parseInt(document.getElementById('timer_hours').value)   || 0;
  const m = parseInt(document.getElementById('timer_minutes').value) || 0;
  const s = parseInt(document.getElementById('timer_seconds').value) || 0;
  let parts = [];
  if (h > 0) parts.push(h + ' hour' + (h !== 1 ? 's' : ''));
  if (m > 0) parts.push(m + ' min');
  if (s > 0) parts.push(s + ' sec');
  const val = parts.length ? parts.join(' ') : 'No limit';
  document.getElementById('timerLiveVal').textContent = val;
  document.getElementById('previewTimer').innerHTML = `<i class="fas fa-clock"></i> Timer: ${val}`;
  // checklist
  setCheck('cl-timer', 'clt-timer', true, 'Timer configured');
}
 
/* ══════════ LIVE PREVIEW UPDATES ══════════ */
function updatePreviewTitle(val) {
  const el = document.getElementById('previewTitle');
  el.textContent = val.trim() || 'Competition title will appear here…';
  setCheck('cl-title', 'clt-title', val.trim().length > 0, 'Competition title');
}
function updatePreviewType(val) {
  const labels = { essay:'Essay Competition', story:'Story Competition', poetry:'Poetry Competition', general:'General Writing' };
  const icons  = { essay:'fas fa-pen-nib', story:'fas fa-book-open', poetry:'fas fa-feather', general:'fas fa-pen' };
  const el = document.getElementById('previewType');
  el.innerHTML = `<i class="${icons[val]||'fas fa-trophy'}"></i> ${labels[val]||'Competition'}`;
  setCheck('cl-type', 'clt-type', !!val, 'Competition type');
}
function updatePreviewPrizes() {
  const labels  = [...document.querySelectorAll('input[name="prize_label[]"]')].map(i => i.value.trim());
  const amounts = [...document.querySelectorAll('input[name="prize_amount[]"]')].map(i => i.value.trim());
  const el = document.getElementById('previewPrizes');
  const filled = labels.filter((l,i) => l && amounts[i]);
  if (!filled.length) {
    el.innerHTML = '<span class="pcc-prize-pill" style="color:#888">No prizes added yet</span>';
    setCheck('cl-prizes', 'clt-prizes', false, 'Prize details');
    return;
  }
  el.innerHTML = labels.map((l,i) => amounts[i] ? `<span class="pcc-prize-pill">🏆 ${l}: $${amounts[i]}</span>` : '').join('');
  setCheck('cl-prizes', 'clt-prizes', true, 'Prize details');
}
function updateDateVisual() {
  const s = document.getElementById('start_date').value;
  const e = document.getElementById('end_date').value;
  const wrap = document.getElementById('dateRangeVisual');
  if (s && e) {
    const sd = new Date(s), ed = new Date(e);
    if (ed > sd) {
      const days = Math.round((ed - sd) / 86400000);
      document.getElementById('drvStart').textContent = sd.toLocaleDateString('en-GB',{day:'numeric',month:'short',year:'numeric'});
      document.getElementById('drvEnd').textContent   = ed.toLocaleDateString('en-GB',{day:'numeric',month:'short',year:'numeric'});
      document.getElementById('drvDuration').textContent = days + ' days';
      wrap.style.display = 'flex';
      document.getElementById('previewDates').innerHTML = `<i class="fas fa-calendar"></i> ${sd.toLocaleDateString('en-GB',{day:'numeric',month:'short'})} — ${ed.toLocaleDateString('en-GB',{day:'numeric',month:'short',year:'numeric'})}`;
      setCheck('cl-dates', 'clt-dates', true, 'Start & end dates');
      document.getElementById('endDateErr').classList.remove('show');
      document.getElementById('end_date').classList.remove('error');
    } else {
      wrap.style.display = 'none';
      document.getElementById('endDateErr').classList.add('show');
      document.getElementById('end_date').classList.add('error');
      setCheck('cl-dates', 'clt-dates', false, 'Start & end dates');
    }
  } else {
    wrap.style.display = 'none';
    setCheck('cl-dates', 'clt-dates', false, 'Start & end dates');
  }
}
function updateRulesPreview() {
  const text = document.getElementById('rules').value;
  setCheck('cl-rules', 'clt-rules', text.trim().length > 0, 'Rules & guidelines');
}
 
/* ══════════ RULES PREVIEW TOGGLE ══════════ */
function toggleRulesPreview() {
  const wrap = document.getElementById('rulesPreviewWrap');
  const btn  = document.getElementById('previewRuleBtn');
  const text = document.getElementById('rules').value;
  if (wrap.style.display === 'none') {
    const lines = text.split('\n').filter(l => l.trim());
    document.getElementById('rulesPreview').innerHTML = '<ul>' + lines.map(l => `<li>${l.replace(/^[-•*]\s*/,'')}</li>`).join('') + '</ul>';
    wrap.style.display = 'block';
    btn.classList.add('active');
  } else {
    wrap.style.display = 'none';
    btn.classList.remove('active');
  }
}
function formatRule(type) {
  const ta = document.getElementById('rules');
  if (type === 'bullet') ta.value += (ta.value ? '\n' : '') + '- ';
  if (type === 'number') { const n = (ta.value.match(/^\d+\./gm)||[]).length + 1; ta.value += (ta.value ? '\n' : '') + n + '. '; }
  ta.focus();
}
 
/* ══════════ CHECKLIST ══════════ */
function setCheck(dotId, txtId, done, label) {
  const dot = document.getElementById(dotId);
  const txt = document.getElementById(txtId);
  if (!dot || !txt) return;
  dot.className = 'cl-dot ' + (done ? 'filled' : 'empty');
  txt.className = 'cl-text ' + (done ? 'done' : 'pending');
  txt.textContent = (done ? '✓ ' : '') + label;
}
 
/* ══════════ CHAR COUNTER ══════════ */
function countField(el, countId, max) {
  const len = el.value.length;
  const cel = document.getElementById(countId);
  cel.textContent = len.toLocaleString() + ' / ' + max.toLocaleString();
  cel.className = 'field-count' + (len > max * 0.9 ? ' warn' : '') + (len >= max ? ' over' : '');
}
 
/* ══════════ VALIDATION ══════════ */
function validateField(el) {
  const errMap = { title:'titleErr', comp_type:'typeErr', start_date:'startDateErr', rules:'rulesErr' };
  const errId = errMap[el.id];
  if (!errId) return true;
  const err = document.getElementById(errId);
  if (!el.value.trim()) {
    el.classList.add('error');
    err.classList.add('show');
    return false;
  } else {
    el.classList.remove('error');
    err.classList.remove('show');
    return true;
  }
}
 
function validateAll() {
  let ok = true;
  ['title','comp_type','start_date','end_date','rules'].forEach(id => {
    const el = document.getElementById(id);
    if (el && !el.value.trim()) {
      el.classList.add('error');
      const errEl = document.getElementById(id.replace('_','')+'Err') ||
                    document.getElementById(id+'Err') ||
                    document.getElementById(id.replace('start_date','startDate').replace('end_date','endDate').replace('comp_type','type')+'Err');
      if (errEl) errEl.classList.add('show');
      ok = false;
    }
  });
  // check prizes
  const labels = [...document.querySelectorAll('input[name="prize_label[]"]')].map(i => i.value.trim()).filter(Boolean);
  if (!labels.length) {
    document.getElementById('prizeErr').classList.add('show');
    ok = false;
  } else {
    document.getElementById('prizeErr').classList.remove('show');
  }
  // date order
  const s = document.getElementById('start_date').value;
  const e = document.getElementById('end_date').value;
  if (s && e && new Date(e) <= new Date(s)) {
    document.getElementById('end_date').classList.add('error');
    document.getElementById('endDateErr').classList.add('show');
    ok = false;
  }
  return ok;
}
 
/* ══════════ SUBMIT ══════════ */
function scrollToFirstError() {
  const first = document.querySelector('.error, .show');
  if (first) first.scrollIntoView({ behavior: 'smooth', block: 'center' });
}
function closeSuccess() {
  document.getElementById('successOverlay').classList.remove('show');
  showToast('Competition published successfully!');
}
function addAnother() {
  document.getElementById('successOverlay').classList.remove('show');
  resetForm();
}
 
/* ══════════ DRAFT & RESET ══════════ */
function saveDraft() { showToast('Draft saved successfully!'); }
function resetForm() {
  document.getElementById('competitionForm').reset();
  document.getElementById('priceGrid').querySelectorAll('.price-entry').forEach(el => el.remove());
  prizeCount = 0;
  defaultPrizes.forEach(p => addPrizeRow(p.label, p.amount));
  document.getElementById('dateRangeVisual').style.display = 'none';
  document.getElementById('rulesPreviewWrap').style.display = 'none';
  document.querySelectorAll('.error').forEach(el => el.classList.remove('error'));
  document.querySelectorAll('.err-msg').forEach(el => el.classList.remove('show'));
  updatePreviewTitle('');
  updatePreviewType('');
  document.getElementById('timerLiveVal').textContent = '3 hours 0 min';
  document.getElementById('previewTimer').innerHTML = '<i class="fas fa-clock"></i> Timer: 3 hours';
  document.getElementById('titleCount').textContent = '0 / 120';
  document.getElementById('rulesCount').textContent = '0 / 2,000';
  ['cl-title','cl-type','cl-dates','cl-rules','cl-prizes'].forEach(id => {
    const labels = {'cl-title':'Competition title','cl-type':'Competition type','cl-dates':'Start & end dates','cl-rules':'Rules & guidelines','cl-prizes':'Prize details'};
    const txtId = id.replace('cl-','clt-');
    setCheck(id, txtId, false, labels[id]);
  });
  showToast('Form reset');
}
function previewComp() { showToast('Preview mode — save draft first to share link'); }
 
/* ══════════ TOAST ══════════ */
function showToast(msg) {
  const t = document.getElementById('toast');
  document.getElementById('toastMsg').textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 3000);
}
 
/* ══ min date today ══ */
const today = new Date().toISOString().split('T')[0];
document.getElementById('start_date').min = today;
document.getElementById('end_date').min = today;
 
/* ══ Word count preview ══ */
document.getElementById('min_words').addEventListener('input', function() {
  const mn = this.value, mx = document.getElementById('max_words').value;
  document.getElementById('previewWords').innerHTML = `<i class="fas fa-file-word"></i> ${mn||'?'}–${mx||'?'} words`;
});
document.getElementById('max_words').addEventListener('input', function() {
  const mn = document.getElementById('min_words').value, mx = this.value;
  document.getElementById('previewWords').innerHTML = `<i class="fas fa-file-word"></i> ${mn||'?'}–${mx||'?'} words`;
});
</script>
</body>
</html>
