<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Exhibition - Indonesia–Australia Prosperity Expo 2025</title>
    <meta name="description" content="Discover unparalleled business opportunities and showcase your brand at the Indonesia–Australia Prosperity Expo 2025 Exhibition. Connect with key industry players and explore diverse sectors.">
    <meta name="keywords" content="IAPEX 2025, Indonesia Australia Expo, Exhibition, Trade Show, Business Booths, Networking, Investment Opportunities">
    <meta name="author" content="Indonesia–Australia Prosperity Expo Committee" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="icon" href="{{ asset('assets/images/logo/IAPEX_Logo.png') }}" type="image/x-icon" />

    <meta property="og:title" content="Indonesia–Australia Prosperity Expo 2025 – Exhibition" />
    <meta property="og:description" content="Showcase your products, services, and innovations to a diverse audience at the Indonesia–Australia Prosperity Expo 2025. Explore booth packages and visitor benefits." />
    <meta property="og:image" content="{{ asset('assets/images/og-image-exhibition.jpg') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Indonesia–Australia Prosperity Expo 2025 – Exhibition" />
    <meta name="twitter:description" content="Don't miss the exhibition at IAPEX 2025! A prime platform for trade, investment, and networking between Indonesia and Australia." />
    <meta name="twitter:image" content="{{ asset('assets/images/og-image-exhibition.jpg') }}" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/exhibition.css') }}" />
</head>

<body>
    <header id="header">
        <img
            src="assets/images/logo/IAPEX_Logo.png"
            class="logo"
            alt="Logo" />
        <nav>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('conference') }}" class="{{ request()->routeIs('conference') ? 'active' : '' }}">Conference</a>
            <a href="{{ route('exhibition') }}" class="{{ request()->routeIs('exhibition') ? 'active' : '' }}">Exhibition</a>
            <a href="{{ route('businessmatching') }}" class="{{ request()->routeIs('businessmatching') ? 'active' : '' }}">Business Matching</a>
        </nav>
        <div class="mobile-menu-toggle" id="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <div class="mobile-overlay" id="mobile-overlay"></div>
    <nav class="mobile-nav" id="mobile-nav">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('conference') }}" class="{{ request()->routeIs('conference') ? 'active' : '' }}">Conference</a>
        <a href="{{ route('exhibition') }}" class="{{ request()->routeIs('exhibition') ? 'active' : '' }}">Exhibition</a>
        <a href="{{ route('businessmatching') }}" class="{{ request()->routeIs('businessmatching') ? 'active' : '' }}">Business Matching</a>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section fade-in">
        <div class="hero-particles" id="particles"></div>
        <div class="hero-content">
            <div class="hero-badge fade-in">Exhibition</div>
            <div class="hero-flags">
                <div class="flag flag-indonesia"></div>
                <div class="flag-connector"></div>
                <div class="flag flag-australia"></div>
            </div>

            <h1 class="hero-title fade-in">
                Indonesia-Australia<br />Prosperity Expo 2025
            </h1>
            <p class="hero-subtitle fade-in">
                Strengthening Partnership • Driving Prosperity • Building Future
            </p>
            <div class="hero-date">August 6, 2025 • Jakarta, Indonesia</div>
            <div class="hero-cta">
                <a
                    href="https://tasteofindonesia.com.au/prosperity-expo"
                    target="_blank"
                    class="cta-button fade-in">
                    <i class="fas fa-edit"></i> Register Now
                </a>
                <a href="{{ asset('assets/files/LAYOUT-IAEXPO-2025_2605-1.pdf') }}"
                    class="cta-button fade-in"
                    target="_blank">
                    <i class="fas fa-download"></i> Download Booth Layout
                </a>
            </div>
        </div>
    </section>

    <!-- Expo Visitors Section -->
    <section class="section">
        <div class="container">
            <div class="section-header fade-in-up">
                <h2>Who Should Visit</h2>
                <p>
                    Discover the key stakeholders and professionals who will benefit
                    from attending this prestigious expo
                </p>
            </div>

            <div class="cards-grid">
                <div class="card fade-in-left">
                    <div class="card-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Business Leaders & Entrepreneurs</h3>
                    <ul>
                        <li>SMEs expanding internationally</li>
                        <li>Large corporations seeking trade</li>
                        <li>Startups in tech & renewable energy</li>
                    </ul>
                    <p>In agriculture, technology, manufacturing, and services.</p>
                </div>

                <div class="card fade-in-up">
                    <div class="card-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3>Government Officials & Diplomats</h3>
                    <ul>
                        <li>Representatives from government</li>
                        <li>Ambassadors & trade commissioners</li>
                    </ul>
                    <p>From Indonesian and Australian departments.</p>
                </div>

                <div class="card fade-in-right">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Investors</h3>
                    <ul>
                        <li>Venture capitalists & angel investors</li>
                        <li>Private equity firms</li>
                    </ul>
                    <p>Interested in renewable energy, healthcare, and more.</p>
                </div>

                <div class="card fade-in-left">
                    <div class="card-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3>Tourism Professionals</h3>
                    <ul>
                        <li>Travel agencies & tour operators</li>
                        <li>Tourism boards & agencies</li>
                    </ul>
                    <p>Promoting cross-border tourism.</p>
                </div>

                <div class="card fade-in-up">
                    <div class="card-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Educational Institutions & Students</h3>
                    <ul>
                        <li>Universities & vocational centers</li>
                        <li>Students seeking study abroad</li>
                    </ul>
                    <p>With exchange programs and international partnerships.</p>
                </div>

                <div class="card fade-in-right">
                    <div class="card-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Cultural Organizations</h3>
                    <ul>
                        <li>Art & cultural groups</li>
                        <li>Non-profits promoting culture</li>
                    </ul>
                    <p>Focusing on cultural exchange and artistic collaboration.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Expo Exhibitors Section -->
    <section class="section">
        <div class="container">
            <div class="section-header fade-in-up">
                <h2>Who Should Exhibit</h2>
                <p>
                    Join industry leaders and innovators showcasing the best of
                    Indonesia and Australia
                </p>
            </div>

            <div class="cards-grid">
                <div class="card fade-in-left">
                    <div class="card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>SMEs and Companies</h3>
                    <ul>
                        <li>Indonesian Exhibitors</li>
                        <li>Australian Exhibitors</li>
                    </ul>
                    <p>
                        From agriculture, manufacturing, consumer goods, fashion (e.g.,
                        batik), technology, tourism, and renewable energy.
                    </p>
                </div>

                <div class="card fade-in-up">
                    <div class="card-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Tourism Operators & Agencies</h3>
                    <ul>
                        <li>Travel agencies & tour operators</li>
                        <li>Hotels & resorts</li>
                    </ul>
                    <p>
                        Showcasing tourism destinations, packages, and experiences in
                        Indonesia and Australia.
                    </p>
                </div>

                <div class="card fade-in-right">
                    <div class="card-icon">
                        <i class="fas fa-theater-masks"></i>
                    </div>
                    <h3>Cultural Institutions</h3>
                    <ul>
                        <li>Cultural heritage organizations</li>
                        <li>Performing arts groups</li>
                    </ul>
                    <p>Showcasing traditional crafts, arts, and performances.</p>
                </div>

                <div class="card fade-in-left">
                    <div class="card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Investors & Financial Institutions</h3>
                    <ul>
                        <li>Banks, investment firms, and venture capitalists</li>
                        <li>
                            Showcasing opportunities for investment in emerging industries
                        </li>
                    </ul>
                    <p>
                        Showcasing opportunities for investment in emerging industries
                        like sustainable technologies, renewable energy, and agriculture.
                    </p>
                </div>

                <div class="card fade-in-up">
                    <div class="card-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Technology & Innovation Companies</h3>
                    <ul>
                        <li>Tech startups</li>
                        <li>Educational technology providers</li>
                    </ul>
                    <p>
                        In FinTech, green energy, digital transformation, artificial
                        intelligence, and blockchain.
                    </p>
                </div>

                <div class="card fade-in-right">
                    <div class="card-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainability & Environmental Initiatives</h3>
                    <ul>
                        <li>Eco-friendly businesses</li>
                    </ul>
                    <p>
                        Promoting sustainable practices, products, and services related to
                        energy, waste management, sustainable agriculture, and green
                        construction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Exhibition Booth Packages Section -->
    <section class="section packages">
        <div class="section-header fade-in">
            <h2><i class="fas fa-boxes"></i> Exhibition Booth Packages</h2>
            <p>Choose the best package to showcase your business at the event</p>
        </div>

        <div class="packages-grid">
            <div class="package-card featured fade-in">
                <div class="card-icon-exhibition">
                    <i class="fas fa-store"></i>
                </div>
                <h3>Exhibitor Package</h3>
                <div class="price">Rp. 10,000,000</div>
                <ul>
                    <li>Includes booth</li>
                    <li>Business matching</li>
                    <li>Exposure</li>
                    <li>E-directory listing</li>
                </ul>
                <a href="https://tasteofindonesia.com.au/prosperity-expo" target="_blank" class="package-btn">Choose Package</a>
            </div>

            <div class="package-card featured fade-in">
                <div class="card-icon-exhibition">
                    <i class="fas fa-crown"></i>
                </div>
                <h3>Sponsor Package</h3>
                <div class="price">Rp. 25,000,000</div>
                <ul>
                    <li>Includes premium booth</li>
                    <li>LED promo</li>
                    <li>Logo placement</li>
                    <li>Priority access to buyers</li>
                </ul>
                <a href="https://tasteofindonesia.com.au/prosperity-expo" target="_blank" class="package-btn">Choose Package</a>
            </div>

            <div class="package-card featured fade-in">
                <div class="card-icon-exhibition">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3>Visitor Package</h3>
                <div class="price">FREE</div>
                <ul>
                    <li>Access to exhibition area</li>
                    <li>E-directory access</li>
                    <li>Networking opportunities</li>
                    <li>Panel attendance (limited)</li>
                </ul>
                <a href="#" class="package-btn">Choose Package</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <!-- Floating Orbs -->
        <div class="footer-floating-orbs">
            <div class="footer-orb"></div>
            <div class="footer-orb"></div>
            <div class="footer-orb"></div>
            <div class="footer-orb"></div>
            <div class="footer-orb"></div>
        </div>

        <!-- Particle System -->
        <div class="footer-particles">
            <div class="footer-particle"></div>
            <div class="footer-particle"></div>
            <div class="footer-particle"></div>
            <div class="footer-particle"></div>
            <div class="footer-particle"></div>
            <div class="footer-particle"></div>
            <div class="footer-particle"></div>
            <div class="footer-particle"></div>
            <div class="footer-particle"></div>
            <div class="footer-particle"></div>
        </div>

        <!-- Geometric Shapes -->
        <div class="footer-shapes">
            <div class="footer-shape footer-shape-1"></div>
            <div class="footer-shape footer-shape-2"></div>
            <div class="footer-shape footer-shape-3"></div>
        </div>

        <!-- Glowing Lines -->
        <div class="footer-lines">
            <div class="footer-line"></div>
            <div class="footer-line"></div>
            <div class="footer-line"></div>
        </div>

        <div class="footer-content">
            <div class="footer-top">
                <!-- Brand and About Section -->
                <div class="footer-brand">
                    <div class="footer-logo-container">
                        <div class="footer-logo-bg">
                            <img
                                src="assets/images/logo/IAPEX_Logo.png"
                                alt="Indonesia-Australia Prosperity Expo Logo" />
                        </div>
                        <div class="footer-brand-text">
                            <h2 class="footer-brand-title">
                                Indonesia-Australia Prosperity Expo
                            </h2>
                            <p class="footer-brand-subtitle">
                                Strengthening Bilateral Economic Partnership
                            </p>
                        </div>
                    </div>
                    <div class="footer-social">
                        <div class="social-links">
                            <a
                                href="https://web.facebook.com/TradeAttache?_rdc=1&_rdr#"
                                target="_blank"
                                class="social-link"
                                title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a
                                href="https://www.youtube.com/@atdag_canberra"
                                target="_blank"
                                class="social-link"
                                title="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a
                                href="https://www.tiktok.com/@atdag_canberra"
                                target="_blank"
                                class="social-link"
                                title="TikTok">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a
                                href="https://www.instagram.com/atdag_canberra/"
                                target="_blank"
                                class="social-link"
                                title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-section footer-links">
                    <h3>Navigation</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <span class="material-icons">home</span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                <span class="material-icons">info</span>
                                About
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('conference') }}" class="{{ request()->routeIs('conference') ? 'active' : '' }}">
                                <span class="material-icons">people</span>
                                Conference
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('exhibition') }}" class="{{ request()->routeIs('exhibition') ? 'active' : '' }}">
                                <span class="material-icons">store</span>
                                Exhibition
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('businessmatching') }}" class="{{ request()->routeIs('businessmatching') ? 'active' : '' }}">
                                <span class="material-icons">handshake</span>
                                Business Matching
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Combined Event Information & Contact -->
                <div class="footer-section">
                    <h3>Event & Contact</h3>
                    <div class="footer-event-contact">
                        <!-- Event Section -->
                        <div class="event-section">
                            <div class="event-date">Wednesday, 6 August 2025</div>
                            <div class="event-venue">
                                The Ritz-Carlton Jakarta<br />09:30 - 16:30 WIB
                            </div>
                            <a
                                href="https://tasteofindonesia.com.au/prosperity-expo"
                                target="_blank"
                                class="register-btn">
                                Register Now
                            </a>
                        </div>

                        <!-- Contact Section -->
                        <div class="contact-section">
                            <h4>Get In Touch</h4>
                            <div class="contact-item">
                                <span class="material-icons">location_on</span>
                                <a
                                    href="https://maps.app.goo.gl/ZPf37FnDRbpFyXnm8"
                                    target="_blank">
                                    <div>
                                        <strong>Venue</strong>
                                        <span>The Ritz-Carlton Jakarta<br />Ballroom 2, Mega
                                            Kuningan<br />Jakarta, Indonesia</span>
                                    </div>
                                </a>
                            </div>
                            <div class="contact-item">
                                <span class="material-icons">email</span>
                                <div>
                                    <strong>Email</strong>
                                    <span><a
                                            href="mailto:sales.expo@kupu-gsc.co.id"
                                            target="_blank">sales.expo@kupu-gsc.co.id</a></span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <span class="material-icons">phone</span>
                                <div>
                                    <strong>Agi</strong>
                                    <span>
                                        <a href="https://wa.me/6281573000739" target="_blank">+62 815-7300-0739</a>
                                    </span>
                                </div>
                            </div>

                            <div class="contact-item">
                                <span class="material-icons">phone</span>
                                <div>
                                    <strong>Dewi</strong>
                                    <span>
                                        <a href="https://wa.me/62818201311" target="_blank">+62 818-201-311</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <div class="footer-bottom-logo">
                        <span class="material-icons">public</span>
                        <span>Indonesia-Australia Prosperity Expo 2025</span>
                    </div>
                    <div class="footer-bottom-links">
                        <span>Building bridges for trade,</span>
                        <span>investment,</span>
                        <span>and sustainable growth</span>
                    </div>
                </div>
                <div class="copyright">
                    &copy; 2025 Indonesia-Australia Prosperity Expo. All rights
                    reserved.<br />
                    Organized in partnership with Indonesian and Australian governments.
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/exhibition.js"></script>
</body>

</html>