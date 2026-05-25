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
                <a href="#home">Home</a>
                <a href="#shop">Shop</a>
                <a href="#blog">Blog</a>
                <a href="#competitions">Competitions</a>
                <a href="#pages">Pages</a>
                <a href="#events">Events</a>
            </nav>

            <div class="nav-actions">

                {{-- USER LOGIN HAI --}}
                @auth

                    <div style="display:flex; align-items:center; gap:15px;">

                        <span style="color:Black; font-size:14px;">
                            {{ Auth::user()->name }}
                        </span>

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

                <a href="#shop" class="btn btn-primary-nav">
                    Buy Now
                </a>

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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#shop">Shop Books</a></li>
                    <li><a href="#competitions">Competitions</a></li>
                    <li><a href="#events">Events</a></li>
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

</body>
</html>