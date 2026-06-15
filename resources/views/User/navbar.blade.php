<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Authore — Publisher Portal</title>

    <link rel="stylesheet" href="/css/style1.css"/>
      

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400;1,700&family=Lato:wght@300;400;700&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="/css/pricing.css">

    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Vite -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

</head>

<body>

    <!-- ═══════════════════════════════════════════ NAVBAR ═══ -->
    <header class="navbar" id="navbar">

        <div class="nav-inner">

            <a href="#" class="brand">
                <span class="brand-icon">
                    <i class="fas fa-book-open"></i>
                </span>

                <span class="brand-name">
                    Authore<span class="brand-dot">.</span>
                </span>
            </a>

            <nav class="nav-links" id="navLinks">
                <a href="{{route('Home')}}">Home</a>
                <a href="{{route('shoppage')}}">Shop</a>
                <a href="{{route('Contact')}}">Contact</a>
                <a href="{{route('competitionpage')}}">Competitions</a>
                <a href="{{route('Pricing')}}">Pricing</a>
            </nav>

            <div class="nav-actions">

                {{-- USER LOGIN HAI --}}
                @auth

                    <div style="display:flex; align-items:center; gap:15px;">

                        <span style="color:Black; font-size:14px;">
                            {{ Auth::user()->name }}
                        </span>
                        <!-- subscription -->
                         @auth


    @if(Auth::user()->activeSubscription)
        <span class="plan-badge">
            {{ Auth::user()->activeSubscription->plan_name }}
        </span>
    @endif
</div>

@endauth
          <a href="{{ route('cartpage') }}" class="nav-cart-link" id="navCartLink" aria-label="View shopping cart">
  <div class="nav-cart-icon-wrapper">
    <span class="nav-cart-count" id="navCartCount">{{ $cartCount ?? 0 }}</span>
    
    <svg class="nav-cart-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
    </svg>
  </div>
  <span class="nav-cart-text">Cart</span>
</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-outline-nav">
                                Logout
                            </button>
                        </form>

                    </div>
               

                @endauth


                {{-- USER LOGIN NAHI HAI --}}
                @guest

                    <a href="{{ route('login') }}" class="btn btn-outline-nav">
                        Login
                    </a>

                    <a href="{{ route('register') }}" class="btn btn-outline-nav">
                        Register
                    </a>

                @endguest

           

                <button class="hamburger" id="hamburger" aria-label="Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>

        </div>

    </header>

    <!-- PAGE CONTENT -->
    @yield('user')

    <!-- ═══════════════════════════════════════ FOOTER ═══ -->
    <footer class="footer">

        <div class="container footer-grid">

            <div class="footer-brand">

                <a href="#" class="brand">
                    <span class="brand-icon">
                        <i class="fas fa-book-open"></i>
                    </span>

                    <span class="brand-name">
                        Authore<span class="brand-dot">.</span>
                    </span>
                </a>

                <p>
                    Digitizing the publishing world — books, competitions,
                    subscriptions, and author management in one portal.
                </p>

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
                    <li><a href="{{route('Home')}}">Home</a></li>
                    <li><a href="{{route('shoppage')}}">Shop Books</a></li>
                    <li><a href="{{route('competitionpage')}}">Competitions</a></li>
                    <li><a href="{{route('Pricing')}}">Pricing</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>

            </div>

            <div class="footer-col">

                <h5>Services</h5>

                <ul>
                    <li><a href="#">Download eBooks (PDF)</a></li>
                    <li><a href="#">Order Hard Copies</a></li>
                    <li><a href="#">Order CDs & Media</a></li>
                    <li><a href="#">Subscriptions</a></li>
                    <li><a href="#">Submit Manuscript</a></li>
                </ul>

            </div>

            <div class="footer-col">

                <h5>Contact</h5>

                <ul class="contact-list">
                    <li>
                        <i class="fas fa-envelope"></i>
                        hello@authore.com
                    </li>

                    <li>
                        <i class="fas fa-phone"></i>
                        +1 (800) 555-BOOK
                    </li>

                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        123 Publisher Ave, NY 10001
                    </li>
                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container footer-bottom-inner">

                <p>
                    © 2026 Authore Publishing Portal. All rights reserved.
                </p>

                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                </div>

            </div>

        </div>

    </footer>

    <script>

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            document.getElementById('navbar')
                .classList.toggle('scrolled', window.scrollY > 60);
        });

        // Hamburger toggle
        document.getElementById('hamburger')
            .addEventListener('click', () => {

                document.getElementById('navLinks')
                    .classList.toggle('open');

                document.getElementById('hamburger')
                    .classList.toggle('active');
            });

        // Dots interaction
        document.querySelectorAll('.dot').forEach((dot, i, all) => {

            dot.addEventListener('click', () => {

                all.forEach(d => d.classList.remove('active'));

                dot.classList.add('active');

            });

        });

        // Scroll reveal
        const observer = new IntersectionObserver((entries) => {

            entries.forEach(entry => {

                if (entry.isIntersecting)
                    entry.target.classList.add('visible');

            });

        }, { threshold: 0.12 });

        document.querySelectorAll(
            '.discover-card, .shop-card, .comp-card, .event-card, .blog-card, .service-item, .toc-item, .step, .perk'
        ).forEach(el => {

            el.classList.add('reveal');

            observer.observe(el);

        });

    </script>
<script src="/js/modal.js"></script>

    <script src="https://cdn.botpress.cloud/webchat/v3.6/inject.js"></script>
<script src="https://files.bpcontent.cloud/2026/06/07/13/20260607132105-R4YUCPT3.js" defer></script>
    
</body>
</html>