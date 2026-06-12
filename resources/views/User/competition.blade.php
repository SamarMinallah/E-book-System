@extends('User.navbar')
@section('user')

    <link rel="stylesheet" href="/css/competition.css">



<section class="competition-hero">

    <div class="hero-content">
        <span class="badge">AUTHORE WRITING CONTESTS</span>

        <h1>
            Showcase Your Talent.
            <span>Win Recognition.</span>
        </h1>

        <p>
            Participate in story and essay writing competitions,
            compete with talented writers worldwide, and win exciting rewards.
        </p>

        <a href="#participate" class="hero-btn">
            Participate Now
        </a>
    </div>

</section>

<section class="competition-types">

    <div class="section-heading">
        <h2>Active Competitions</h2>
        <p>Choose your category and start writing.</p>
    </div>

    <div class="competition-grid">

        <div class="competition-card">
            <div class="competition-tag">OPEN</div>

            <h3>Essay Writing Competition</h3>

            <p>
                Demonstrate your knowledge and creativity on
                the provided topic within the competition period.
            </p>

            <ul>
                <li>3 Hour Writing Timer</li>
                <li>Online Submission</li>
                <li>Certificate for Winners</li>
            </ul>

            <button>View Details</button>
        </div>

        <div class="competition-card">
            <div class="competition-tag">OPEN</div>

            <h3>Story Writing Competition</h3>

            <p>
                Create engaging stories and compete with talented
                writers from around the world.
            </p>

            <ul>
                <li>Upload Story File</li>
                <li>Expert Evaluation</li>
                <li>Cash Prize</li>
            </ul>

            <button>View Details</button>
        </div>

    </div>

</section>

<section class="prizes-section">

    <div class="section-heading">
        <h2>Competition Rewards</h2>
    </div>

    <div class="prize-grid">

        <div class="prize-card gold">
            <h3>🥇 First Place</h3>
            <span>$500</span>
        </div>

        <div class="prize-card silver">
            <h3>🥈 Second Place</h3>
            <span>$250</span>
        </div>

        <div class="prize-card bronze">
            <h3>🥉 Third Place</h3>
            <span>$100</span>
        </div>

    </div>

</section>

<section class="rules-section">

    <div class="section-heading">
        <h2>Competition Rules</h2>
    </div>

    <div class="rules-container">

        <div class="rule">
            Only registered users may participate.
        </div>

        <div class="rule">
            Essay competition submissions are limited to 3 hours.
        </div>

        <div class="rule">
            Plagiarized content will be rejected immediately.
        </div>

        <div class="rule">
            Each participant may submit only one entry.
        </div>

    </div>

</section>

<section class="winners-section">

    <div class="section-heading">
        <h2>Previous Winners</h2>
    </div>

    <div class="winner-grid">

        <div class="winner-card">
            <h3>Sarah Johnson</h3>
            <p>Essay Competition Winner</p>
        </div>

        <div class="winner-card">
            <h3>Michael Carter</h3>
            <p>Story Competition Winner</p>
        </div>

        <div class="winner-card">
            <h3>Emily Parker</h3>
            <p>Creative Writing Champion</p>
        </div>

    </div>

</section>

<section class="participation-section" id="participate">

    <div class="section-heading">
        <h2>Submit Your Entry</h2>
    </div>

    <form class="competition-form">

        <div class="form-group">
            <label>Full Name</label>
            <input type="text">
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email">
        </div>

        <div class="form-group">
            <label>Select Competition</label>
            <select>
                <option>Essay Writing</option>
                <option>Story Writing</option>
            </select>
        </div>

        <div class="form-group">
            <label>Upload File</label>
            <input type="file">
        </div>

        <button type="submit" class="submit-btn">
            Submit Entry
        </button>

    </form>

</section>










@endsection