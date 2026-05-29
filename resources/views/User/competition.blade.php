@extends('User.navbar');
@section('user');


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Competitions — Authore Publisher Portal</title>
  <link rel="stylesheet" href="/css/comp1.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700&family=Lato:wght@300;400;700;900&family=Merriweather:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>
 
 
<!-- ══════════════════════════ HERO ══════════════════════════ -->
<section class="comp-hero">
  <div class="hero-particles" id="particles"></div>
  <div class="hero-bg-word">WRITE</div>
  <div class="container">
    <div class="hero-badge"><i class="fas fa-trophy"></i> Competitions Open Now</div>
    <h1 class="hero-title">Write. Submit.<br><em>Win.</em></h1>
    <p class="hero-sub">Participate in our Story Writing and Essay competitions. Top entries win cash prizes, publication deals, and global recognition.</p>
    <div class="hero-cta">
      <a href="#competitions" class="btn btn-red">View Competitions <i class="fas fa-arrow-down"></i></a>
      <a href="#winners" class="btn btn-ghost-white">See Winners <i class="fas fa-trophy"></i></a>
    </div>
    <div class="hero-stats">
      <div class="hstat"><span class="hstat-n">$5,000+</span><span class="hstat-l">Total Prize Pool</span></div>
      <div class="hstat-div"></div>
      <div class="hstat"><span class="hstat-n">3</span><span class="hstat-l">Active Contests</span></div>
      <div class="hstat-div"></div>
      <div class="hstat"><span class="hstat-n">1,240+</span><span class="hstat-l">Participants</span></div>
      <div class="hstat-div"></div>
      <div class="hstat"><span class="hstat-n">Free</span><span class="hstat-l">Entry for All</span></div>
    </div>
  </div>
</section>
 
<!-- ══════════════════════════ TAB NAV ══════════════════════════ -->
<div class="tab-bar">
  <div class="container tab-inner">
    <button class="tab-btn active" data-tab="competitions"><i class="fas fa-list"></i> All Competitions</button>
    <button class="tab-btn" data-tab="essay"><i class="fas fa-pen-nib"></i> Essay Contest</button>
    <button class="tab-btn" data-tab="story"><i class="fas fa-book-open"></i> Story Contest</button>
    <button class="tab-btn" data-tab="submit"><i class="fas fa-upload"></i> Submit Entry</button>
    <button class="tab-btn" data-tab="winners"><i class="fas fa-trophy"></i> Winners</button>
    <button class="tab-btn" data-tab="rules"><i class="fas fa-gavel"></i> Rules</button>
  </div>
</div>
 
<!-- ══════════════════════════ PANEL: ALL COMPETITIONS ══════════════════════════ -->
<section class="tab-panel active" id="tab-competitions">
  <div class="container">
    <div class="panel-header">
      <div>
        <div class="section-label">PARTICIPATE</div>
        <h2 class="section-title">Active Competitions</h2>
      </div>
      <div class="filter-chips">
        <button class="chip active">All</button>
        <button class="chip">Essay</button>
        <button class="chip">Story</button>
        <button class="chip">Open</button>
        <button class="chip">Upcoming</button>
      </div>
    </div>
 
    <div class="comp-cards-grid">
 
      <!-- Competition Card 1 — Essay -->
      <div class="comp-card-big">
        <div class="comp-card-header essay-header">
          <div class="comp-type-badge"><i class="fas fa-pen-nib"></i> Essay Competition</div>
          <div class="comp-status open">● Open</div>
        </div>
        <div class="comp-card-body">
          <h3>National Essay Writing Championship 2026</h3>
          <p>Write a compelling essay on the theme <strong>"Technology & Society"</strong>. Express your ideas with clarity, argument, and evidence. The top 3 essays win cash prizes and will be published in our annual anthology.</p>
          <div class="comp-meta-row">
            <span><i class="fas fa-calendar"></i> Deadline: <strong>June 30, 2026</strong></span>
            <span><i class="fas fa-file-word"></i> 1,000–3,000 words</span>
            <span><i class="fas fa-users"></i> 428 entries</span>
          </div>
          <div class="prize-row">
            <div class="prize-item gold"><i class="fas fa-medal"></i> 1st — <strong>$1,000</strong></div>
            <div class="prize-item silver"><i class="fas fa-medal"></i> 2nd — <strong>$500</strong></div>
            <div class="prize-item bronze"><i class="fas fa-medal"></i> 3rd — <strong>$250</strong></div>
          </div>
          <div class="comp-timer-mini" data-deadline="2026-06-30">
            <i class="fas fa-clock"></i>
            <span class="timer-mini-label">Time Left:</span>
            <span class="mini-timer-val" id="timer-essay-mini">-- : -- : --</span>
          </div>
        </div>
        <div class="comp-card-footer">
          <button class="btn btn-red" onclick="openTab('essay')"><i class="fas fa-pen-nib"></i> Enter Essay Contest</button>
          <button class="btn btn-ghost btn-sm" onclick="openTab('rules')">View Rules</button>
        </div>
      </div>
 
      <!-- Competition Card 2 — Story -->
      <div class="comp-card-big">
        <div class="comp-card-header story-header">
          <div class="comp-type-badge"><i class="fas fa-book-open"></i> Story Competition</div>
          <div class="comp-status open">● Open</div>
        </div>
        <div class="comp-card-body">
          <h3>Short Story Grand Prix 2026</h3>
          <p>Submit an original short story — any genre welcome: thriller, romance, sci-fi, fantasy, literary fiction. Judged on originality, plot, character, and language. Winners get a publishing deal.</p>
          <div class="comp-meta-row">
            <span><i class="fas fa-calendar"></i> Deadline: <strong>July 15, 2026</strong></span>
            <span><i class="fas fa-file-word"></i> 1,000–5,000 words</span>
            <span><i class="fas fa-users"></i> 612 entries</span>
          </div>
          <div class="prize-row">
            <div class="prize-item gold"><i class="fas fa-medal"></i> 1st — <strong>$1,500 + Book Deal</strong></div>
            <div class="prize-item silver"><i class="fas fa-medal"></i> 2nd — <strong>$700</strong></div>
            <div class="prize-item bronze"><i class="fas fa-medal"></i> 3rd — <strong>$300</strong></div>
          </div>
          <div class="comp-timer-mini" data-deadline="2026-07-15">
            <i class="fas fa-clock"></i>
            <span class="timer-mini-label">Time Left:</span>
            <span class="mini-timer-val" id="timer-story-mini">-- : -- : --</span>
          </div>
        </div>
        <div class="comp-card-footer">
          <button class="btn btn-dark" onclick="openTab('story')"><i class="fas fa-book-open"></i> Enter Story Contest</button>
          <button class="btn btn-ghost btn-sm" onclick="openTab('rules')">View Rules</button>
        </div>
      </div>
 
      <!-- Competition Card 3 — Upcoming -->
      <div class="comp-card-big upcoming-card">
        <div class="comp-card-header upcoming-header">
          <div class="comp-type-badge"><i class="fas fa-star"></i> Poetry Competition</div>
          <div class="comp-status upcoming">◌ Upcoming</div>
        </div>
        <div class="comp-card-body">
          <h3>Autumn Poetry Slam 2026</h3>
          <p>Coming soon — our annual poetry competition returns this August. All forms welcome: free verse, haiku, sonnets, spoken word transcripts. Prizes and publication for top 5 entries.</p>
          <div class="comp-meta-row">
            <span><i class="fas fa-calendar"></i> Opens: <strong>August 1, 2026</strong></span>
            <span><i class="fas fa-file-word"></i> Up to 50 lines</span>
            <span><i class="fas fa-users"></i> Registration open</span>
          </div>
          <div class="prize-row">
            <div class="prize-item gold"><i class="fas fa-medal"></i> 1st — <strong>$800</strong></div>
            <div class="prize-item silver"><i class="fas fa-medal"></i> 2nd — <strong>$400</strong></div>
            <div class="prize-item bronze"><i class="fas fa-medal"></i> 3rd — <strong>$200</strong></div>
          </div>
          <div class="notify-bar">
            <i class="fas fa-bell"></i>
            <input type="email" placeholder="Get notified when it opens — enter email"/>
            <button class="btn btn-red btn-sm">Notify Me</button>
          </div>
        </div>
        <div class="comp-card-footer">
          <button class="btn btn-outline-dark" disabled><i class="fas fa-lock"></i> Not Open Yet</button>
        </div>
      </div>
 
    </div>
  </div>
</section>
 
<!-- ══════════════════════════ PANEL: ESSAY CONTEST ══════════════════════════ -->
<section class="tab-panel" id="tab-essay">
  <div class="container">
    <div class="panel-header">
      <div>
        <div class="section-label">ESSAY COMPETITION</div>
        <h2 class="section-title">National Essay Writing Championship</h2>
      </div>
    </div>
 
    <!-- Essay Rules Brief -->
    <div class="essay-info-grid">
      <div class="essay-details">
        <div class="detail-card">
          <div class="detail-icon red-icon"><i class="fas fa-lightbulb"></i></div>
          <div><h4>Theme</h4><p>"Technology & Society: Are We in Control?"</p></div>
        </div>
        <div class="detail-card">
          <div class="detail-icon"><i class="fas fa-file-word"></i></div>
          <div><h4>Word Limit</h4><p>Minimum 1,000 — Maximum 3,000 words</p></div>
        </div>
        <div class="detail-card">
          <div class="detail-icon"><i class="fas fa-clock"></i></div>
          <div><h4>Time Limit</h4><p><strong class="red-text">3 Hours</strong> after you start writing — timer cannot be paused</p></div>
        </div>
        <div class="detail-card">
          <div class="detail-icon"><i class="fas fa-calendar-alt"></i></div>
          <div><h4>Deadline</h4><p>June 30, 2026 — 11:59 PM PKT</p></div>
        </div>
        <div class="detail-card">
          <div class="detail-icon gold-icon"><i class="fas fa-trophy"></i></div>
          <div><h4>1st Prize</h4><p>$1,000 Cash + Publication in Annual Anthology</p></div>
        </div>
        <div class="detail-card">
          <div class="detail-icon"><i class="fas fa-users"></i></div>
          <div><h4>Eligibility</h4><p>Registered users only. One entry per account.</p></div>
        </div>
      </div>
 
      <!-- LIVE ESSAY TIMER + FORM -->
      <div class="essay-timer-box" id="essayTimerBox">
        <div class="timer-header">
          <i class="fas fa-hourglass-half"></i>
          <h3>Essay Writing Timer</h3>
        </div>
        <p class="timer-notice">Once you click <strong>"Start Writing"</strong>, a 3-hour countdown begins. The form will lock automatically when time expires.</p>
 
        <!-- PRE-START STATE -->
        <div id="essayPreStart">
          <div class="timer-display-idle">
            <span class="td-h">03</span>
            <span class="td-sep">:</span>
            <span class="td-m">00</span>
            <span class="td-sep">:</span>
            <span class="td-s">00</span>
          </div>
          <div class="pre-checks">
            <label class="check-item"><input type="checkbox" id="chk1"/> I have read all the rules</label>
            <label class="check-item"><input type="checkbox" id="chk2"/> I understand the 3-hour limit</label>
            <label class="check-item"><input type="checkbox" id="chk3"/> My submission is original work</label>
          </div>
          <button class="btn btn-red btn-full start-btn" id="startEssayBtn" disabled onclick="startEssayTimer()">
            <i class="fas fa-play"></i> Start Writing — Timer Begins Now
          </button>
          <p class="warn-text"><i class="fas fa-exclamation-triangle"></i> Timer cannot be paused once started</p>
        </div>
 
        <!-- ACTIVE TIMER STATE -->
        <div id="essayActive" style="display:none">
          <div class="timer-display-live" id="essayTimerDisplay">
            <div class="td-block">
              <span class="td-num" id="essH">03</span>
              <span class="td-lbl">HRS</span>
            </div>
            <span class="td-colon">:</span>
            <div class="td-block">
              <span class="td-num" id="essM">00</span>
              <span class="td-lbl">MIN</span>
            </div>
            <span class="td-colon">:</span>
            <div class="td-block">
              <span class="td-num" id="essS">00</span>
              <span class="td-lbl">SEC</span>
            </div>
          </div>
          <div class="timer-progress-bar"><div class="timer-progress-fill" id="essayProgressFill"></div></div>
          <p class="active-timer-msg"><i class="fas fa-pen"></i> Timer is running — write your essay below</p>
        </div>
 
        <!-- EXPIRED STATE -->
        <div id="essayExpired" style="display:none" class="expired-box">
          <i class="fas fa-times-circle"></i>
          <h4>Time's Up!</h4>
          <p>Your 3-hour window has expired. The essay form has been locked. Thank you for participating.</p>
        </div>
      </div>
    </div>
 
    <!-- ESSAY WRITING FORM -->
    <div class="writing-form-wrap" id="essayFormWrap" style="display:none">
      <form class="writing-form" id="essayForm" onsubmit="return submitEssay(event)">
        <div class="wf-header">
          <h3><i class="fas fa-pen-nib"></i> Your Essay</h3>
          <div class="wf-wordcount"><span id="essayWords">0</span> / 3,000 words</div>
        </div>
        <div class="form-group">
          <label>Essay Title <span class="req">*</span></label>
          <input type="text" id="essayTitle" placeholder="Enter your essay title" required/>
        </div>
        <div class="form-group">
          <label>Your Essay <span class="req">*</span></label>
          <textarea id="essayText" rows="18" placeholder="Start writing your essay here… (minimum 1,000 words)" required oninput="countWords('essayText','essayWords',1000,3000)"></textarea>
          <div class="word-bar">
            <div class="word-bar-fill" id="essayWordBar"></div>
          </div>
          <p class="word-hint" id="essayWordHint">Minimum 1,000 words required</p>
        </div>
        <div class="form-group">
          <label>Or Upload Your Essay (PDF/DOC)</label>
          <div class="file-drop" onclick="document.getElementById('essayFile').click()">
            <i class="fas fa-cloud-upload-alt"></i>
            <p>Drag & drop or click to upload</p>
            <span>PDF, DOC, DOCX — Max 5MB</span>
            <input type="file" id="essayFile" accept=".pdf,.doc,.docx" style="display:none" onchange="showFileName(this,'essayFileName')"/>
          </div>
          <p class="file-name" id="essayFileName"></p>
        </div>
        <div class="form-declaration">
          <label class="check-item"><input type="checkbox" required/> I declare this is my original work and has not been previously published.</label>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-red" id="essaySubmitBtn"><i class="fas fa-paper-plane"></i> Submit Essay</button>
          <button type="button" class="btn btn-ghost" onclick="saveDraft('essay')"><i class="fas fa-save"></i> Save Draft</button>
        </div>
      </form>
    </div>
  </div>
</section>
 
<!-- ══════════════════════════ PANEL: STORY CONTEST ══════════════════════════ -->
<section class="tab-panel" id="tab-story">
  <div class="container">
    <div class="panel-header">
      <div>
        <div class="section-label">STORY COMPETITION</div>
        <h2 class="section-title">Short Story Grand Prix 2026</h2>
      </div>
    </div>
 
    <div class="story-layout">
      <!-- Story Info -->
      <div class="story-info-col">
        <div class="story-theme-box">
          <div class="theme-label">Open Theme</div>
          <h3>Any Genre Welcome</h3>
          <div class="genre-tags">
            <span class="gtag">Thriller</span>
            <span class="gtag">Romance</span>
            <span class="gtag">Sci-Fi</span>
            <span class="gtag">Fantasy</span>
            <span class="gtag">Literary</span>
            <span class="gtag">Mystery</span>
            <span class="gtag">Horror</span>
            <span class="gtag">Comedy</span>
          </div>
        </div>
        <div class="story-rules-list">
          <div class="rule-row"><span class="rule-num">01</span><div><h5>Word Count</h5><p>1,000 to 5,000 words. Strict limit enforced.</p></div></div>
          <div class="rule-row"><span class="rule-num">02</span><div><h5>Language</h5><p>English only. Clear, readable prose required.</p></div></div>
          <div class="rule-row"><span class="rule-num">03</span><div><h5>Originality</h5><p>Must be original, unpublished work. AI-generated content not permitted.</p></div></div>
          <div class="rule-row"><span class="rule-num">04</span><div><h5>One Entry</h5><p>Each account may submit only one story.</p></div></div>
          <div class="rule-row"><span class="rule-num">05</span><div><h5>No Real Persons</h5><p>Avoid using identifiable real people as characters.</p></div></div>
          <div class="rule-row"><span class="rule-num">06</span><div><h5>Deadline</h5><p>July 15, 2026 — 11:59 PM PKT. No extensions.</p></div></div>
        </div>
        <!-- Prizes -->
        <div class="prize-podium">
          <h4>Prize Breakdown</h4>
          <div class="podium-row">
            <div class="podium-item podium-2nd">
              <span class="podium-pos">2nd</span>
              <div class="podium-block silver-block"></div>
              <span class="podium-prize">$700</span>
            </div>
            <div class="podium-item podium-1st">
              <span class="podium-pos">🥇 1st</span>
              <div class="podium-block gold-block"></div>
              <span class="podium-prize">$1,500<br><small>+ Book Deal</small></span>
            </div>
            <div class="podium-item podium-3rd">
              <span class="podium-pos">3rd</span>
              <div class="podium-block bronze-block"></div>
              <span class="podium-prize">$300</span>
            </div>
          </div>
        </div>
      </div>
 
      <!-- Story Submission Form -->
      <div class="story-form-col">
        <form class="writing-form" id="storyForm" onsubmit="return submitStory(event)">
          <div class="wf-header">
            <h3><i class="fas fa-book-open"></i> Submit Your Story</h3>
            <div class="wf-wordcount"><span id="storyWords">0</span> / 5,000 words</div>
          </div>
          <div class="form-row-2">
            <div class="form-group">
              <label>Author Name <span class="req">*</span></label>
              <input type="text" placeholder="Your full name" required/>
            </div>
            <div class="form-group">
              <label>Genre <span class="req">*</span></label>
              <select required>
                <option value="">Select genre</option>
                <option>Thriller</option>
                <option>Romance</option>
                <option>Sci-Fi</option>
                <option>Fantasy</option>
                <option>Literary Fiction</option>
                <option>Mystery</option>
                <option>Horror</option>
                <option>Comedy</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Story Title <span class="req">*</span></label>
            <input type="text" placeholder="Enter your story title" required/>
          </div>
          <div class="form-group">
            <label>Brief Synopsis <span class="req">*</span></label>
            <textarea rows="3" placeholder="A short summary of your story (max 200 words)…" required></textarea>
          </div>
          <div class="form-group">
            <label>Your Story <span class="req">*</span></label>
            <textarea id="storyText" rows="16" placeholder="Write or paste your story here… (1,000–5,000 words)" required oninput="countWords('storyText','storyWords',1000,5000)"></textarea>
            <div class="word-bar">
              <div class="word-bar-fill" id="storyWordBar"></div>
            </div>
            <p class="word-hint" id="storyWordHint">Minimum 1,000 words required</p>
          </div>
          <div class="form-group">
            <label>Or Upload Story File (PDF/DOC)</label>
            <div class="file-drop" onclick="document.getElementById('storyFile').click()">
              <i class="fas fa-cloud-upload-alt"></i>
              <p>Drag & drop or click to upload</p>
              <span>PDF, DOC, DOCX — Max 10MB</span>
              <input type="file" id="storyFile" accept=".pdf,.doc,.docx" style="display:none" onchange="showFileName(this,'storyFileName')"/>
            </div>
            <p class="file-name" id="storyFileName"></p>
          </div>
          <div class="form-declaration">
            <label class="check-item"><input type="checkbox" required/> I confirm this is my original, unpublished work and I hold all rights to it.</label>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-dark"><i class="fas fa-paper-plane"></i> Submit Story</button>
            <button type="button" class="btn btn-ghost" onclick="saveDraft('story')"><i class="fas fa-save"></i> Save Draft</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
 
<!-- ══════════════════════════ PANEL: GENERAL SUBMIT ══════════════════════════ -->
<section class="tab-panel" id="tab-submit">
  <div class="container">
    <div class="panel-header centered">
      <div class="section-label">QUICK SUBMISSION</div>
      <h2 class="section-title">Submit Your Entry</h2>
      <p class="panel-sub">Choose your competition type and submit below. Make sure you've read the rules before submitting.</p>
    </div>
    <div class="submit-layout">
      <div class="submit-type-selector">
        <button class="type-btn active" data-type="essay" onclick="selectType(this,'essay')">
          <i class="fas fa-pen-nib"></i>
          <span>Essay</span>
        </button>
        <button class="type-btn" data-type="story" onclick="selectType(this,'story')">
          <i class="fas fa-book-open"></i>
          <span>Short Story</span>
        </button>
      </div>
      <form class="quick-submit-form" onsubmit="return quickSubmit(event)">
        <div class="form-row-2">
          <div class="form-group">
            <label>Full Name <span class="req">*</span></label>
            <input type="text" placeholder="Your full name" required/>
          </div>
          <div class="form-group">
            <label>Email Address <span class="req">*</span></label>
            <input type="email" placeholder="you@example.com" required/>
          </div>
        </div>
        <div class="form-group">
          <label>Title of Submission <span class="req">*</span></label>
          <input type="text" placeholder="Title of your essay or story" required/>
        </div>
        <div class="form-group" id="genreGroup" style="display:none">
          <label>Genre</label>
          <select><option>Select genre</option><option>Thriller</option><option>Romance</option><option>Sci-Fi</option><option>Fantasy</option><option>Other</option></select>
        </div>
        <div class="form-group">
          <label>Upload File <span class="req">*</span></label>
          <div class="file-drop big-drop" onclick="document.getElementById('quickFile').click()">
            <i class="fas fa-cloud-upload-alt"></i>
            <h4>Drag & drop your file here</h4>
            <p>or click to browse</p>
            <span>PDF, DOC, DOCX, TXT — Max 10MB</span>
            <input type="file" id="quickFile" accept=".pdf,.doc,.docx,.txt" style="display:none" onchange="showFileName(this,'quickFileName')"/>
          </div>
          <p class="file-name" id="quickFileName"></p>
        </div>
        <div class="form-group">
          <label>Additional Notes</label>
          <textarea rows="3" placeholder="Any notes for the judges (optional)…"></textarea>
        </div>
        <div class="form-declaration">
          <label class="check-item"><input type="checkbox" required/> I confirm this is my original work and agree to the competition terms.</label>
        </div>
        <button type="submit" class="btn btn-red btn-full"><i class="fas fa-paper-plane"></i> Submit Entry</button>
      </form>
    </div>
  </div>
</section>
 
<!-- ══════════════════════════ PANEL: WINNERS ══════════════════════════ -->
<section class="tab-panel" id="tab-winners">
  <div class="container" id="winners">
    <div class="panel-header centered">
      <div class="section-label">HALL OF FAME</div>
      <h2 class="section-title">Competition Winners</h2>
    </div>
 
    <!-- Current Winners -->
    <div class="winners-season">
      <div class="season-label"><i class="fas fa-star"></i> Spring 2026 — Essay Competition</div>
      <div class="winners-podium-row">
        <div class="winner-card silver-winner">
          <div class="winner-rank">2nd Place</div>
          <div class="winner-avatar"><i class="fas fa-user-graduate"></i></div>
          <h4>Aisha Rahman</h4>
          <p class="winner-city">Lahore, Pakistan</p>
          <p class="winner-entry">"The Digital Divide: Who Gets Left Behind"</p>
          <div class="winner-prize"><i class="fas fa-medal silver-medal"></i> $500 Prize</div>
        </div>
        <div class="winner-card gold-winner">
          <div class="winner-crown"><i class="fas fa-crown"></i></div>
          <div class="winner-rank champion">🏆 Champion</div>
          <div class="winner-avatar champion-av"><i class="fas fa-user-graduate"></i></div>
          <h4>Muhammad Hamza</h4>
          <p class="winner-city">Karachi, Pakistan</p>
          <p class="winner-entry">"Algorithm or Author: Who Writes Our Future?"</p>
          <div class="winner-prize"><i class="fas fa-medal gold-medal"></i> $1,000 + Publication</div>
          <div class="winner-ribbon">WINNER</div>
        </div>
        <div class="winner-card bronze-winner">
          <div class="winner-rank">3rd Place</div>
          <div class="winner-avatar"><i class="fas fa-user-graduate"></i></div>
          <h4>Sara Ali</h4>
          <p class="winner-city">Islamabad, Pakistan</p>
          <p class="winner-entry">"Connectivity and Isolation in the Age of Social Media"</p>
          <div class="winner-prize"><i class="fas fa-medal bronze-medal"></i> $250 Prize</div>
        </div>
      </div>
    </div>
 
    <!-- Previous Winners Table -->
    <div class="prev-winners">
      <h3 class="prev-title">Previous Competition Winners</h3>
      <div class="winners-table-wrap">
        <table class="winners-table">
          <thead>
            <tr>
              <th>Season</th>
              <th>Competition</th>
              <th>Winner</th>
              <th>Entry Title</th>
              <th>Prize</th>
              <th>Read</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Winter 2025</td>
              <td><span class="badge-story">Story</span></td>
              <td>Omar Farooq</td>
              <td>"The Last Library"</td>
              <td class="prize-cell">$1,500 + Book Deal</td>
              <td><button class="read-btn"><i class="fas fa-book-open"></i> Read</button></td>
            </tr>
            <tr>
              <td>Autumn 2025</td>
              <td><span class="badge-essay">Essay</span></td>
              <td>Fatima Malik</td>
              <td>"Climate Justice and the Written Word"</td>
              <td class="prize-cell">$1,000</td>
              <td><button class="read-btn"><i class="fas fa-book-open"></i> Read</button></td>
            </tr>
            <tr>
              <td>Summer 2025</td>
              <td><span class="badge-story">Story</span></td>
              <td>Bilal Chaudhry</td>
              <td>"Echoes Across the Indus"</td>
              <td class="prize-cell">$1,500 + Book Deal</td>
              <td><button class="read-btn"><i class="fas fa-book-open"></i> Read</button></td>
            </tr>
            <tr>
              <td>Spring 2025</td>
              <td><span class="badge-essay">Essay</span></td>
              <td>Zara Hussain</td>
              <td>"Education and the Digital Frontier"</td>
              <td class="prize-cell">$1,000</td>
              <td><button class="read-btn"><i class="fas fa-book-open"></i> Read</button></td>
            </tr>
            <tr>
              <td>Winter 2024</td>
              <td><span class="badge-story">Story</span></td>
              <td>Rafay Wajid</td>
              <td>"Café at the Edge of the World"</td>
              <td class="prize-cell">$1,200 + Anthology</td>
              <td><button class="read-btn"><i class="fas fa-book-open"></i> Read</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
 
<!-- ══════════════════════════ PANEL: RULES ══════════════════════════ -->
<section class="tab-panel" id="tab-rules">
  <div class="container">
    <div class="panel-header centered">
      <div class="section-label">GUIDELINES</div>
      <h2 class="section-title">Competition Rules & Guidelines</h2>
    </div>
    <div class="rules-layout">
      <div class="rules-col">
        <div class="rules-block">
          <div class="rules-block-header essay-header"><i class="fas fa-pen-nib"></i> Essay Competition Rules</div>
          <ul class="rules-list">
            <li><i class="fas fa-check"></i> Theme must be followed strictly</li>
            <li><i class="fas fa-check"></i> Word count: 1,000 to 3,000 words</li>
            <li><i class="fas fa-check"></i> <strong class="red-text">3-hour timer starts on opening the essay page</strong> — cannot be paused</li>
            <li><i class="fas fa-check"></i> English only</li>
            <li><i class="fas fa-check"></i> One submission per registered account</li>
            <li><i class="fas fa-check"></i> No AI-generated text allowed</li>
            <li><i class="fas fa-check"></i> References/citations must be included if used</li>
            <li><i class="fas fa-check"></i> Must not have been previously published</li>
            <li><i class="fas fa-check"></i> Plagiarism results in immediate disqualification</li>
            <li><i class="fas fa-check"></i> Judges' decision is final</li>
          </ul>
        </div>
        <div class="rules-block">
          <div class="rules-block-header story-header"><i class="fas fa-book-open"></i> Story Competition Rules</div>
          <ul class="rules-list">
            <li><i class="fas fa-check"></i> Any genre accepted — open theme</li>
            <li><i class="fas fa-check"></i> Word count: 1,000 to 5,000 words</li>
            <li><i class="fas fa-check"></i> No time limit for writing — but submit before deadline</li>
            <li><i class="fas fa-check"></i> English only</li>
            <li><i class="fas fa-check"></i> One submission per registered account</li>
            <li><i class="fas fa-check"></i> Explicit or offensive content not permitted</li>
            <li><i class="fas fa-check"></i> No real identifiable persons without consent</li>
            <li><i class="fas fa-check"></i> Original and unpublished only</li>
            <li><i class="fas fa-check"></i> Authore reserves right to publish winning entry</li>
            <li><i class="fas fa-check"></i> Prize payment within 30 days of announcement</li>
          </ul>
        </div>
      </div>
      <div class="rules-col">
        <div class="judging-criteria">
          <h3>Judging Criteria</h3>
          <div class="criteria-item">
            <div class="criteria-header">
              <span>Originality & Creativity</span>
              <span class="criteria-pct">30%</span>
            </div>
            <div class="criteria-bar"><div class="criteria-fill" style="width:30%;background:var(--red)"></div></div>
          </div>
          <div class="criteria-item">
            <div class="criteria-header">
              <span>Language & Style</span>
              <span class="criteria-pct">25%</span>
            </div>
            <div class="criteria-bar"><div class="criteria-fill" style="width:25%;background:#1a2d5a"></div></div>
          </div>
          <div class="criteria-item">
            <div class="criteria-header">
              <span>Structure & Flow</span>
              <span class="criteria-pct">20%</span>
            </div>
            <div class="criteria-bar"><div class="criteria-fill" style="width:20%;background:#4a5240"></div></div>
          </div>
          <div class="criteria-item">
            <div class="criteria-header">
              <span>Relevance to Theme</span>
              <span class="criteria-pct">15%</span>
            </div>
            <div class="criteria-bar"><div class="criteria-fill" style="width:15%;background:#8b4513"></div></div>
          </div>
          <div class="criteria-item">
            <div class="criteria-header">
              <span>Overall Impact</span>
              <span class="criteria-pct">10%</span>
            </div>
            <div class="criteria-bar"><div class="criteria-fill" style="width:10%;background:#6b2d6b"></div></div>
          </div>
        </div>
        <div class="faq-block">
          <h3>Frequently Asked Questions</h3>
          <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)"><span>Can I submit to both competitions?</span><i class="fas fa-plus"></i></button>
            <div class="faq-a">Yes — you may submit one essay and one story, but each to its respective competition.</div>
          </div>
          <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)"><span>What happens if I run out of time on the essay?</span><i class="fas fa-plus"></i></button>
            <div class="faq-a">The form locks automatically when 3 hours expire. Any text already entered is saved as your final submission. Make sure to click Submit before time runs out.</div>
          </div>
          <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)"><span>Is entry free?</span><i class="fas fa-plus"></i></button>
            <div class="faq-a">Yes! All competitions are completely free for registered users. Simply create a free account and start participating.</div>
          </div>
          <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)"><span>When are winners announced?</span><i class="fas fa-plus"></i></button>
            <div class="faq-a">Winners are announced within 4 weeks of the competition closing date. All participants are notified by email.</div>
          </div>
          <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)"><span>Can I edit my submission after uploading?</span><i class="fas fa-plus"></i></button>
            <div class="faq-a">You may update your submission up until the deadline. After the deadline, no changes are accepted.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- ══════════════════════════ SUBSCRIBE STRIP ══════════════════════════ -->
<section class="subscribe-strip">
  <div class="container sub-inner">
    <div>
      <h3>Never Miss a Competition</h3>
      <p>Subscribe to get notified about new contests, deadlines, and winner announcements.</p>
    </div>
    <form class="sub-form" onsubmit="return false;">
      <input type="email" placeholder="your@email.com"/>
      <button class="btn btn-red">Subscribe</button>
    </form>
  </div>
</section>
 
<!-- ══════════════════════════ FOOTER ══════════════════════════ -->
<footer class="footer">
  <div class="container footer-inner">
    <div class="footer-brand">
      <a href="index.html" class="brand">
        <span class="brand-icon"><i class="fas fa-book-open"></i></span>
        <span class="brand-name">Authore<span class="brand-dot">.</span></span>
      </a>
      <p>Digitizing the publishing world.</p>
      <div class="footer-socials">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
    <div class="footer-col">
      <h5>Competitions</h5>
      <ul>
        <li><a href="#">Essay Contest</a></li>
        <li><a href="#">Story Contest</a></li>
        <li><a href="#">Past Winners</a></li>
        <li><a href="#">Submit Entry</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Platform</h5>
      <ul>
        <li><a href="shop.html">Shop Books</a></li>
        <li><a href="#">Download eBooks</a></li>
        <li><a href="#">Subscriptions</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h5>Support</h5>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Rules & Guidelines</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>© 2026 Authore Publishing Portal. All rights reserved.</p>
      <div class="footer-links">
        <a href="#">Privacy</a><a href="#">Terms</a><a href="#">Cookies</a>
      </div>
    </div>
  </div>
</footer>
 
<!-- ══════════════════════════ SUCCESS MODAL ══════════════════════════ -->
<div class="success-modal" id="successModal" style="display:none">
  <div class="success-box">
    <div class="success-icon"><i class="fas fa-check-circle"></i></div>
    <h3 id="successTitle">Submitted Successfully!</h3>
    <p id="successMsg">Your entry has been received. You will be notified by email with a confirmation and reference number.</p>
    <div class="success-ref">Reference ID: <strong id="successRef"></strong></div>
    <button class="btn btn-red" onclick="closeModal()">Close</button>
  </div>
</div>
<div class="modal-bg" id="modalBg" onclick="closeModal()" style="display:none"></div>
 
<!-- Toast -->
<div class="toast" id="toast"><i class="fas fa-check-circle"></i><span id="toastMsg">Saved!</span></div>
 
<script>
/* ═══ TAB SYSTEM ═══ */
function openTab(id) {
  document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.getElementById('tab-' + id).classList.add('active');
  document.querySelector(`[data-tab="${id}"]`).classList.add('active');
  document.querySelector('.tab-bar').scrollIntoView({ behavior: 'smooth', block: 'start' });
}
document.querySelectorAll('.tab-btn').forEach(btn => {
  btn.addEventListener('click', () => openTab(btn.dataset.tab));
});
 
/* ═══ NAVBAR SCROLL ═══ */
window.addEventListener('scroll', () => {
  document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 60);
});
 
/* ═══ HAMBURGER ═══ */
document.getElementById('hamburger').addEventListener('click', () => {
  document.getElementById('navLinks').classList.toggle('open');
  document.getElementById('hamburger').classList.toggle('active');
});
 
/* ═══ FILTER CHIPS ═══ */
document.querySelectorAll('.chip').forEach(chip => {
  chip.addEventListener('click', function() {
    document.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
    this.classList.add('active');
  });
});
 
/* ═══ DEADLINE COUNTDOWN (card mini timers) ═══ */
function updateMiniTimer(id, deadlineStr) {
  const el = document.getElementById(id);
  if (!el) return;
  const deadline = new Date(deadlineStr).getTime();
  setInterval(() => {
    const diff = deadline - Date.now();
    if (diff <= 0) { el.textContent = 'Closed'; return; }
    const d = Math.floor(diff / 86400000);
    const h = Math.floor((diff % 86400000) / 3600000);
    const m = Math.floor((diff % 3600000) / 60000);
    el.textContent = `${d}d ${h}h ${m}m`;
  }, 1000);
}
updateMiniTimer('timer-essay-mini', '2026-06-30');
updateMiniTimer('timer-story-mini', '2026-07-15');
 
/* ═══ ESSAY 3-HOUR TIMER ═══ */
let essayInterval = null;
let essayTotalSec = 3 * 3600;
let essayRemaining = essayTotalSec;
let essayStarted = false;
 
// Enable start button only when all checkboxes checked
['chk1','chk2','chk3'].forEach(id => {
  const el = document.getElementById(id);
  if (el) el.addEventListener('change', checkEssayReady);
});
function checkEssayReady() {
  const all = ['chk1','chk2','chk3'].every(id => document.getElementById(id)?.checked);
  const btn = document.getElementById('startEssayBtn');
  if (btn) btn.disabled = !all;
}
 
function startEssayTimer() {
  if (essayStarted) return;
  essayStarted = true;
  document.getElementById('essayPreStart').style.display = 'none';
  document.getElementById('essayActive').style.display = 'block';
  document.getElementById('essayFormWrap').style.display = 'block';
  document.getElementById('essayFormWrap').scrollIntoView({ behavior: 'smooth' });
 
  essayInterval = setInterval(() => {
    essayRemaining--;
    const h = Math.floor(essayRemaining / 3600);
    const m = Math.floor((essayRemaining % 3600) / 60);
    const s = essayRemaining % 60;
    document.getElementById('essH').textContent = String(h).padStart(2,'0');
    document.getElementById('essM').textContent = String(m).padStart(2,'0');
    document.getElementById('essS').textContent = String(s).padStart(2,'0');
 
    // Progress bar
    const pct = ((essayTotalSec - essayRemaining) / essayTotalSec) * 100;
    document.getElementById('essayProgressFill').style.width = pct + '%';
 
    // Color warning
    const fill = document.getElementById('essayProgressFill');
    if (essayRemaining <= 600) fill.style.background = 'var(--red)';
    else if (essayRemaining <= 1800) fill.style.background = '#e8a020';
 
    // Pulse when < 10 min
    if (essayRemaining <= 600) {
      document.getElementById('essayTimerDisplay').classList.add('pulse-red');
    }
 
    if (essayRemaining <= 0) {
      clearInterval(essayInterval);
      lockEssay();
    }
  }, 1000);
}
 
function lockEssay() {
  document.getElementById('essayActive').style.display = 'none';
  document.getElementById('essayExpired').style.display = 'block';
  // Disable all form fields
  document.querySelectorAll('#essayForm input, #essayForm textarea, #essayForm button').forEach(el => el.disabled = true);
  showToast('Time expired — essay form locked');
}
 
/* ═══ WORD COUNTER ═══ */
function countWords(textareaId, countId, min, max) {
  const text = document.getElementById(textareaId).value.trim();
  const words = text === '' ? 0 : text.split(/\s+/).length;
  document.getElementById(countId).textContent = words;
  const barId = textareaId === 'essayText' ? 'essayWordBar' : 'storyWordBar';
  const hintId = textareaId === 'essayText' ? 'essayWordHint' : 'storyWordHint';
  const bar = document.getElementById(barId);
  const hint = document.getElementById(hintId);
  const pct = Math.min((words / max) * 100, 100);
  bar.style.width = pct + '%';
  if (words < min) {
    bar.style.background = '#e8a020';
    hint.textContent = `${min - words} more words needed`;
    hint.style.color = '#e8a020';
  } else if (words > max) {
    bar.style.background = 'var(--red)';
    hint.textContent = `${words - max} words over limit!`;
    hint.style.color = 'var(--red)';
  } else {
    bar.style.background = '#2a8a4a';
    hint.textContent = `✓ Word count OK (${words} words)`;
    hint.style.color = '#2a8a4a';
  }
}
 
/* ═══ FILE NAME DISPLAY ═══ */
function showFileName(input, displayId) {
  const el = document.getElementById(displayId);
  if (input.files[0]) {
    el.textContent = '📎 ' + input.files[0].name;
    el.style.display = 'block';
  }
}
 
/* ═══ FORM SUBMISSIONS ═══ */
function submitEssay(e) {
  e.preventDefault();
  const words = document.getElementById('essayText').value.trim().split(/\s+/).length;
  if (words < 1000) { showToast('Minimum 1,000 words required!'); return false; }
  showSuccess('Essay Submitted!', 'Your essay has been received. You will be notified by email within 48 hours.', 'ESS-' + Math.random().toString(36).substr(2,8).toUpperCase());
  return false;
}
function submitStory(e) {
  e.preventDefault();
  const words = document.getElementById('storyText').value.trim().split(/\s+/).length;
  if (document.getElementById('storyText').value.trim() && words < 1000) {
    showToast('Minimum 1,000 words required!'); return false;
  }
  showSuccess('Story Submitted!', 'Your story has been received. We will review it and notify you within 2 weeks.', 'STR-' + Math.random().toString(36).substr(2,8).toUpperCase());
  return false;
}
function quickSubmit(e) {
  e.preventDefault();
  showSuccess('Entry Submitted!', 'Your competition entry has been successfully received.', 'QSB-' + Math.random().toString(36).substr(2,8).toUpperCase());
  return false;
}
 
/* ═══ SUCCESS MODAL ═══ */
function showSuccess(title, msg, ref) {
  document.getElementById('successTitle').textContent = title;
  document.getElementById('successMsg').textContent = msg;
  document.getElementById('successRef').textContent = ref;
  document.getElementById('successModal').style.display = 'flex';
  document.getElementById('modalBg').style.display = 'block';
}
function closeModal() {
  document.getElementById('successModal').style.display = 'none';
  document.getElementById('modalBg').style.display = 'none';
}
 
/* ═══ SUBMIT TYPE SELECTOR ═══ */
function selectType(btn, type) {
  document.querySelectorAll('.type-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById('genreGroup').style.display = type === 'story' ? 'block' : 'none';
}
 
/* ═══ SAVE DRAFT ═══ */
function saveDraft(type) { showToast(`${type === 'essay' ? 'Essay' : 'Story'} draft saved!`); }
 
/* ═══ FAQ TOGGLE ═══ */
function toggleFaq(btn) {
  const item = btn.closest('.faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}
 
/* ═══ TOAST ═══ */
function showToast(msg) {
  const t = document.getElementById('toast');
  document.getElementById('toastMsg').textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 3000);
}
 
/* ═══ HERO PARTICLES ═══ */
(function() {
  const canvas = document.createElement('canvas');
  const ctx = canvas.getContext('2d');
  const wrap = document.getElementById('particles');
  canvas.style.cssText = 'position:absolute;inset:0;width:100%;height:100%;pointer-events:none;';
  wrap.appendChild(canvas);
  let W, H, pts = [];
  function resize() {
    W = canvas.width = wrap.offsetWidth;
    H = canvas.height = wrap.offsetHeight;
  }
  resize(); window.addEventListener('resize', resize);
  for (let i = 0; i < 40; i++) pts.push({
    x: Math.random()*1200, y: Math.random()*600,
    vx: (Math.random()-.5)*.3, vy: (Math.random()-.5)*.3,
    r: Math.random()*1.5+0.5, a: Math.random()*.4+.05
  });
  function draw() {
    ctx.clearRect(0,0,W,H);
    pts.forEach(p => {
      p.x += p.vx; p.y += p.vy;
      if (p.x<0) p.x=W; if (p.x>W) p.x=0;
      if (p.y<0) p.y=H; if (p.y>H) p.y=0;
      ctx.beginPath(); ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
      ctx.fillStyle = `rgba(200,16,46,${p.a})`; ctx.fill();
    });
    requestAnimationFrame(draw);
  }
  draw();
})();
 
/* ═══ SCROLL REVEAL ═══ */
const revealObs = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.comp-card-big, .winner-card, .detail-card, .rule-row, .criteria-item').forEach((el,i) => {
  el.classList.add('reveal');
  el.style.transitionDelay = (i % 4) * 0.08 + 's';
  revealObs.observe(el);
});
</script>
</body>
</html>
@endsection