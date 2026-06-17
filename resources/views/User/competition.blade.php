@extends('User.navbar')
@section('user')
 @if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif
 
    <link rel="stylesheet" href="/css/competition.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

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

      @foreach($allcomp as $comp)
        <div class="competition-card">
            <div class="competition-tag">OPEN</div>

            <h3>{{$comp->title}}</h3>

            <p>
                {{$comp->description}}
            </p>

            <ul>
                <li>Start Date:{{$comp->start_date}}</li>
                <li>End Date:{{$comp->end_date}}</li>
            </ul>

            <button class="view-details-btn" data-comp-title="{{$comp->title}}" data-prize1="{{$comp->prize1}}" data-prize2="{{$comp->prize2}}" data-prize3="{{$comp->prize3}}" data-rules="{{$comp->rules}}">View Details</button>
        </div>
      @endforeach


    </div>

</section>
<!-- winner -->
@php
    $firstWinner = $winners->get(0);
    $secondWinner = $winners->get(1);
    $thirdWinner = $winners->get(2);
@endphp

<section class="prizes-section">

    <div class="section-heading">
        <h2>Previous Competition Winners</h2>
    </div>

    <div class="prize-grid">

        <div class="prize-card gold">
            <h3> 🥈{{ $firstWinner?->prize ?? 'First Place' }}</h3>
            <span>{{ $firstWinner?->user->name ?? 'Not announced yet' }}</span>
            @if($firstWinner)
                <span>Score: {{ $firstWinner->score }}</span>
            @endif
        </div>

        <div class="prize-card silver">
            <h3>🥇 {{ $secondWinner?->prize ?? 'Second Place' }}</h3>
            <span>{{ $secondWinner?->user->name ?? 'Not announced yet' }}</span>
            @if($secondWinner)
                <span>Score: {{ $secondWinner->score }}</span>
            @endif
        </div>

        <div class="prize-card bronze">
            <h3>🥉 {{ $thirdWinner?->prize ?? 'Third Place' }}</h3>
            <span>{{ $thirdWinner?->user->name ?? 'Not announced yet' }}</span>
            @if($thirdWinner)
                <span>Score: {{ $thirdWinner->score }}</span>
            @endif
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

<section class="participation-section" id="participate">

    <div class="section-heading">
        <h2>Submit Your Entry</h2>
    </div>

    <form class="competition-form" method="POST" action="{{route('submitentry')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" placeholder="Your Name" name="fullname">
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="Your Email Address" name="useremail">
        </div>

        <div class="form-group">
           <label>Competition Name</label>
            <input type="compname" placeholder="Competition Name" name="Comp_name">
        </div>
<div class="form-group">
            <label>Upload Your Work</label>
            <input type="file" name="Work">
        </div>

        <button type="submit" class="submit-btn">
            Submit Entry
        </button>

    </form>

</section>

<!-- MODAL FOR COMPETITION DETAILS -->
<div id="detailsModal" class="modal">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h2 id="modalTitle">Competition Details</h2>

        <div class="modal-section">
            <h3>Prize Winners</h3>
            <div class="prizes-container">
                <div class="prize-item">
                    <span class="prize-rank">🥇 1st Prize</span>
                    <span class="prize-amount" id="prize1"></span>
                </div>
                <div class="prize-item">
                    <span class="prize-rank">🥈 2nd Prize</span>
                    <span class="prize-amount" id="prize2"></span>
                </div>
                <div class="prize-item">
                    <span class="prize-rank">🥉 3rd Prize</span>
                    <span class="prize-amount" id="prize3"></span>
                </div>
            </div>
        </div>

        <div class="modal-section">
            <h3>Competition Rules</h3>
            <textarea id="modalRules" class="rules-text" readonly></textarea>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('detailsModal');
    const closeBtn = document.querySelector('.modal-close');
    const viewDetailsBtns = document.querySelectorAll('.view-details-btn');

    viewDetailsBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const title = this.dataset.compTitle;
            const prize1 = this.dataset.prize1;
            const prize2 = this.dataset.prize2;
            const prize3 = this.dataset.prize3;
            const rules = this.dataset.rules;

            document.getElementById('modalTitle').textContent = title;
            document.getElementById('prize1').textContent = prize1;
            document.getElementById('prize2').textContent = prize2;
            document.getElementById('prize3').textContent = prize3;
            document.getElementById('modalRules').value = rules;

            modal.classList.add('active');
        });
    });

    closeBtn.addEventListener('click', function() {
        modal.classList.remove('active');
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.remove('active');
        }
    });
</script>

@endsection