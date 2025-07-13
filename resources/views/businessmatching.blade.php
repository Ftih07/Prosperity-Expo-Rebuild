<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Business Matching – Indonesia–Australia Prosperity Expo 2025</title>
    <meta name="description" content="Join the Hybrid Business Matching Session at IAPEX 2025 to foster strategic connections and explore market expansion between Indonesian and Australian businesses.">
    <meta name="keywords" content="IAPEX 2025, Indonesia Australia Expo, Business Matching, B2B, Trade Connections, Investment, Market Access, Bilateral Trade, Hybrid Meeting">
    <meta name="author" content="Indonesia–Australia Prosperity Expo Committee" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="icon" href="{{ asset('assets/images/logo/IAPEX_Logo.png') }}" type="image/x-icon" />

    <meta property="og:title" content="Indonesia–Australia Prosperity Expo 2025 – Business Matching" />
    <meta property="og:description" content="Facilitate strategic partnerships and unlock new trade and investment opportunities through our hybrid business matching sessions at IAPEX 2025." />
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Indonesia–Australia Prosperity Expo 2025 – Business Matching" />
    <meta name="twitter:description" content="Connect with key industry players and government officials in Indonesia and Australia via IAPEX 2025's Business Matching session." />
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/businessmatching.css') }}" />
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
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-icon floating">
                    <i class="fas fa-handshake"></i>
                </div>
                <h1 class="hero-title">HYBRID BUSINESS MATCHING SESSION</h1>
                <p class="hero-subtitle">
                    Facilitating strategic connections between businesses and
                    institutions from Indonesia and Australia, fostering mutual growth
                    and market expansion through innovative hybrid format meetings.
                </p>
                <a
                    href="https://tasteofindonesia.com.au/prosperity-expo"
                    target="_blank"
                    class="cta-button">
                    <i class="fas fa-arrow-right"></i>
                    Register Now
                </a>
            </div>
        </div>
    </section>

    <!-- Business Matching Types -->
    <section class="matching-section section">
        <div class="container">
            <div class="section-header fade-in">
                <div class="section-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h2 class="section-title">Business Matching Opportunities</h2>
                <p class="section-subtitle">
                    Connect with potential partners across two strategic pathways
                    designed to enhance bilateral trade and investment opportunities
                </p>
            </div>
            <div class="matching-types">
                <div class="matching-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Australian Companies to Enter Indonesia</h3>
                    <p>
                        A comprehensive platform for Australian companies to connect with
                        Indonesian businesses or government institutions, exploring
                        lucrative opportunities in sectors such as food and beverages,
                        sustainable manufacturing, digital economy, education, and
                        healthcare.
                    </p>
                </div>
                <div class="matching-card fade-in">
                    <div class="card-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3>Indonesian Companies to Access Australian Market</h3>
                    <p>
                        Supporting the <strong>UMKM BISA Ekspor</strong> program by the
                        Indonesian Ministry of Trade, this session connects Indonesian
                        exporters—especially MSMEs—with potential Australian buyers,
                        importers, and Indonesian representatives in Australia to enhance
                        export readiness and market access.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Exhibit Section -->
    <section class="why-exhibit section">
        <div class="container">
            <div class="section-header fade-in">
                <div class="section-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h2 class="section-title">Why Should You Exhibit?</h2>
                <p class="section-subtitle">
                    Discover the comprehensive benefits of participating in our business
                    matching session and unlock new growth opportunities
                </p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-item fade-in">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Cultural Understanding</h3>
                    <p>
                        Promoting an understanding of Indonesian culture and synergy with
                        Australian values for better business relationships
                    </p>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Economic Collaboration</h3>
                    <p>
                        Expanding economic collaboration by highlighting trade and
                        investment opportunities between both nations
                    </p>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3>Tourism Growth</h3>
                    <p>
                        Strengthening tourism initiatives by attracting Australian
                        tourists to explore Indonesia's diverse destinations
                    </p>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Bilateral Economy</h3>
                    <p>
                        Bilateral efforts to create a stronger economy between both
                        countries through strategic partnerships
                    </p>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Multi-Sector Opportunities</h3>
                    <p>
                        Emphasizing multi-sector opportunities beyond trade, including
                        investment, education, tourism, and technological innovation
                    </p>
                </div>
                <div class="benefit-item fade-in">
                    <div class="benefit-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Mutual Benefits</h3>
                    <p>
                        Highlighting balanced opportunities and ensuring mutual benefits
                        for both nations in every collaboration
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Matching Sectors -->
    <section class="sectors-section section">
        <div class="container">
            <div class="section-header fade-in">
                <div class="section-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h2 class="section-title">Focus Sectors</h2>
                <p class="section-subtitle">
                    Four key sectors identified for enhanced economic collaboration
                    between Indonesia and Australia
                </p>
            </div>
            <div class="sectors-grid">
                <div class="sector-card fade-in">
                    <div class="sector-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Health & Care Economy</h3>
                    <p>
                        Exploring partnerships in healthcare services, medical technology,
                        elderly care, wellness, pharmaceutical products, and Aged Care
                        solutions
                    </p>
                </div>
                <div class="sector-card fade-in">
                    <div class="sector-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Agriculture</h3>
                    <p>
                        Facilitating cooperation in modern farming, agritech solutions,
                        and smart agriculture to boost productivity and sustainability
                    </p>
                </div>
                <div class="sector-card fade-in">
                    <div class="sector-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Digital Economy & Creative Industry</h3>
                    <p>
                        Encouraging joint initiatives in research and development, digital
                        transformation, clean technologies, and applied innovation
                    </p>
                </div>
                <div class="sector-card fade-in">
                    <div class="sector-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education & Vocational Training</h3>
                    <p>
                        Collaboration in higher education, vocational training, as well as
                        technological and research innovation programs
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Visitors -->
    <section class="target-section section">
        <div class="container">
            <div class="section-header fade-in">
                <div class="section-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h2 class="section-title">Target Visitors</h2>
                <p class="section-subtitle">
                    Meet key decision makers, industry leaders, and influential
                    stakeholders from both countries
                </p>
            </div>
            <div class="target-visitors-grid">
                <div class="target-item fade-in">
                    <div class="target-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3>Government Official</h3>
                </div>
                <div class="target-item fade-in">
                    <div class="target-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Trader</h3>
                </div>
                <div class="target-item fade-in">
                    <div class="target-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Business Leader</h3>
                </div>
                <div class="target-item fade-in">
                    <div class="target-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3>Investors</h3>
                </div>
                <div class="target-item fade-in">
                    <div class="target-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Students</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Exhibitor -->
    <section class="exhibitor-section section">
        <div class="container">
            <div class="section-header fade-in">
                <div class="section-icon">
                    <i class="fas fa-store"></i>
                </div>
                <h2 class="section-title">Target Exhibitors</h2>
                <p class="section-subtitle">Industries we're looking to connect</p>
            </div>
            <div class="exhibitor-content">
                <div class="exhibitor-image slide-in-left">
                    <img
                        src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Business Meeting" />
                </div>
                <div class="slide-in-right">
                    <ul class="exhibitor-list">
                        <li>Banking & Financial Services</li>
                        <li>Technology and Digital Solutions</li>
                        <li>Tourism and Travel</li>
                        <li>Education</li>
                        <li>
                            Creative Economy and SMEs (Handicrafts, Fashion, and Culinary
                            Arts)
                        </li>
                        <li>
                            Dynamic sectors such as Textiles, Processed Foods, and
                            Handicrafts
                        </li>
                        <li>
                            Agriculture and Food Processing (Agricultural Products, Herbal
                            Health Products, and Processed Beef Products)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content fade-in">
                <h2>Ready to Connect & Expand Your Business?</h2>
                <p>
                    Join the Hybrid Business Matching Session and unlock new
                    opportunities for growth and collaboration between Indonesia and
                    Australia
                </p>
                <div class="cta-buttons">
                    <a
                        href="https://tasteofindonesia.com.au/prosperity-expo"
                        target="_blank"
                        class="cta-btn primary">
                        <i class="fas fa-rocket"></i>
                        Register as Exhibitor
                    </a>
                    <a
                        href="{{ route('about') }}"
                        class="cta-btn secondary">
                        <i class="fas fa-info-circle"></i>
                        Learn More
                    </a>
                </div>
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

    <script src="assets/js/businessmatching.js"></script>
</body>

</html>