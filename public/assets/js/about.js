// ================== DOMContentLoaded ==================
document.addEventListener("DOMContentLoaded", () => {
    // MOBILE MENU
    const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
    const mobileNav = document.getElementById("mobile-nav");
    const mobileOverlay = document.getElementById("mobile-overlay");

    const toggleMobileMenu = () => {
        mobileMenuToggle.classList.toggle("active");
        mobileNav.classList.toggle("active");
        mobileOverlay.classList.toggle("active");
        document.body.style.overflow = mobileNav.classList.contains("active")
            ? "hidden"
            : "auto";
    };

    mobileMenuToggle.addEventListener("click", toggleMobileMenu);
    mobileOverlay.addEventListener("click", toggleMobileMenu);

    document.querySelectorAll(".mobile-nav a").forEach((link) => {
        link.addEventListener("click", () => {
            toggleMobileMenu();
        });
    });

    // HEADER SCROLL EFFECT + PROGRESS BAR
    const header = document.getElementById("header");
    const scrollProgress = document.createElement("div");
    scrollProgress.style.cssText = `
      position: fixed; top: 0; left: 0; width: 0%; height: 4px;
      background: linear-gradient(90deg, #1e3a8a, #3b82f6); z-index: 9999; transition: width 0.3s ease;
    `;
    document.body.appendChild(scrollProgress);

    window.addEventListener("scroll", () => {
        const scrollTop = window.pageYOffset;
        const docHeight = document.body.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        scrollProgress.style.width = scrollPercent + "%";

        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    // PARALLAX FLOATING ORBS
    let mouseX = 0,
        mouseY = 0,
        currentX = 0,
        currentY = 0;
    document.addEventListener("mousemove", function (e) {
        mouseX = e.clientX / window.innerWidth;
        mouseY = e.clientY / window.innerHeight;
    });

    function animateFloatingElements() {
        currentX += (mouseX - currentX) * 0.05;
        currentY += (mouseY - currentY) * 0.05;

        document
            .querySelectorAll(".floating-orb, .footer-orb")
            .forEach((orb, index) => {
                const speed = (index + 1) * 0.3;
                orb.style.transform = `translate(${currentX * speed * 20}px, ${
                    currentY * speed * 20
                }px)`;
            });

        document
            .querySelectorAll(".footer-particle")
            .forEach((particle, index) => {
                const speed = (index + 1) * 0.1;
                particle.style.transform = `translateX(${
                    currentX * speed * 5
                }px)`;
            });

        requestAnimationFrame(animateFloatingElements);
    }
    animateFloatingElements();

    // DYNAMIC BG GRADIENT
    let gradientAngle = 135;
    setInterval(() => {
        gradientAngle += 0.5;
        document.documentElement.style.setProperty(
            "--bg-gradient",
            `linear-gradient(${gradientAngle}deg, #1e3a8a 0%, #1e40af 50%, #3b82f6 100%)`
        );
    }, 100);

    // OBSERVERS
    const scrollObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("reveal-active", "animate");
                } else {
                    entry.target.classList.remove("reveal-active", "animate");
                }
            });
        },
        { threshold: 0.1, rootMargin: "0px 0px -50px 0px" }
    );

    document
        .querySelectorAll(".scroll-reveal, .focus-card, .why-item")
        .forEach((el) => scrollObserver.observe(el));

    // TIMELINE STAGGERED
    const timelineObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                const items = entry.target.querySelectorAll(".timeline-item");
                if (entry.isIntersecting) {
                    items.forEach((item, i) =>
                        setTimeout(() => item.classList.add("animate"), i * 150)
                    );
                } else {
                    items.forEach((item) => item.classList.remove("animate"));
                }
            });
        },
        { threshold: 0.1 }
    );

    const timeline = document.querySelector(".timeline");
    if (timeline) timelineObserver.observe(timeline);

    // PARTNERSHIP
    const partnershipObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                const cards = entry.target.querySelectorAll(".partner-card");
                if (entry.isIntersecting) {
                    cards.forEach((card, i) =>
                        setTimeout(() => card.classList.add("animate"), i * 200)
                    );
                } else {
                    cards.forEach((card) => card.classList.remove("animate"));
                }
            });
        },
        { threshold: 0.1 }
    );

    const partnershipSection = document.querySelector(".partnership-section");
    if (partnershipSection) partnershipObserver.observe(partnershipSection);

    // FOOTER ANIMATION
    const footer = document.querySelector(".footer");
    const footerElements = {
        brand: document.querySelector(".footer-brand"),
        links: document.querySelector(".footer-links"),
        eventContact: document.querySelector(".footer-event-contact"),
        bottom: document.querySelector(".footer-bottom"),
    };

    const footerObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    footer.classList.add("animate-in");
                    footer.classList.remove("animate-out");
                    setTimeout(() => {
                        Object.values(footerElements).forEach((el) =>
                            el?.classList.add("animate-in")
                        );
                    }, 100);
                } else {
                    footer.classList.add("animate-out");
                    footer.classList.remove("animate-in");
                    Object.values(footerElements).forEach((el) =>
                        el?.classList.remove("animate-in")
                    );
                }
            });
        },
        { threshold: 0.1, rootMargin: "50px 0px -50px 0px" }
    );

    if (footer) footerObserver.observe(footer);

    // RIPPLE + CLICK + HOVER EFFECT
    document.querySelectorAll(".focus-card").forEach((card) => {
        card.addEventListener("click", function (e) {
            this.style.transform = "translateY(-8px) scale(0.95)";
            const ripple = document.createElement("div");
            ripple.style.cssText = `
          position: absolute; border-radius: 50%; background: rgba(255,255,255,0.3);
          transform: scale(0); animation: ripple 0.6s linear; pointer-events: none;
        `;
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = `${size}px`;
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            this.appendChild(ripple);

            setTimeout(() => {
                this.style.transform = "translateY(-8px) scale(1)";
                ripple.remove();
            }, 200);
        });

        card.addEventListener("mouseenter", function () {
            this.style.filter = "brightness(1.1)";
        });
        card.addEventListener("mouseleave", function () {
            this.style.filter = "brightness(1)";
        });
    });

    // SCROLL TO SECTION
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    });

    // Inject CSS for ripple animation
    const rippleStyle = document.createElement("style");
    rippleStyle.textContent = `
      @keyframes ripple {
        to { transform: scale(2); opacity: 0; }
      }
    `;
    document.head.appendChild(rippleStyle);
});

// Particle system for hero section
function createParticles() {
    const particlesContainer = document.getElementById("particles");
    const particleCount = 50;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement("div");
        particle.className = "particle";
        particle.style.left = Math.random() * 100 + "%";
        particle.style.animationDelay = Math.random() * 6 + "s";
        particle.style.animationDuration = Math.random() * 3 + 3 + "s";
        particlesContainer.appendChild(particle);
    }
}

// Smooth scrolling for CTA button
document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelector('a[href="#background"]')
        .addEventListener("click", function (e) {
            e.preventDefault();
            document.querySelector("#background").scrollIntoView({
                behavior: "smooth",
            });
        });
});

// Scroll animations
function animateOnScroll() {
    const elements = document.querySelectorAll(".animate-on-scroll");
    const windowHeight = window.innerHeight;

    elements.forEach((element) => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            element.classList.add("animated");
        }
    });
}

// Initialize animations
window.addEventListener("scroll", animateOnScroll);
window.addEventListener("load", function () {
    createParticles();
    animateOnScroll();
});

// Counter animation for stats
function animateCounters() {
    const counters = document.querySelectorAll(".stat-number");
    counters.forEach((counter) => {
        const target = counter.textContent;
        if (target.includes("$") || target.includes("%")) {
            // Handle currency and percentage
            const numericValue = parseFloat(target.replace(/[^\d.]/g, ""));
            animateValue(
                counter,
                0,
                numericValue,
                2000,
                target.includes("$") ? "currency" : "percentage"
            );
        }
    });
}

function animateValue(element, start, end, duration, type) {
    const startTime = performance.now();
    const animate = (currentTime) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const current = start + (end - start) * progress;

        if (type === "currency") {
            element.textContent = `US$ ${current.toFixed(2)}B`;
        } else if (type === "percentage") {
            element.textContent = `${current.toFixed(1)}%`;
        }

        if (progress < 1) {
            requestAnimationFrame(animate);
        }
    };
    requestAnimationFrame(animate);
}

// Intersection Observer for better performance
const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("animated");

            // Jalankan counter jika stat number muncul
            if (entry.target.querySelector(".stat-number")) {
                setTimeout(() => {
                    animateCounters();
                }, 500);
            }
        } else {
            entry.target.classList.remove("animated"); // <-- ini yang ditambah
        }
    });
}, observerOptions);

// Observe all animation elements
document.addEventListener("DOMContentLoaded", function () {
    const animateElements = document.querySelectorAll(".animate-on-scroll");
    animateElements.forEach((el) => observer.observe(el));
});

// Parallax effect for hero section
window.addEventListener("scroll", function () {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll(".hero-section::before");
    const rate = scrolled * -0.5;

    parallaxElements.forEach((element) => {
        element.style.transform = `translate3d(0, ${rate}px, 0)`;
    });
});

// Add dynamic gradient animation
function createDynamicGradient() {
    const hero = document.querySelector(".hero-section");
    let hue = 220;

    setInterval(() => {
        hue = (hue + 1) % 360;
        const gradient = `linear-gradient(135deg, 
                    hsl(${hue}, 70%, 25%) 0%, 
                    hsl(${hue + 20}, 70%, 35%) 50%, 
                    hsl(${hue + 40}, 70%, 45%) 100%)`;
        hero.style.background = gradient;
    }, 100);
}

// Initialize all animations and effects
window.addEventListener("load", function () {
    createParticles();
    animateOnScroll();
    // createDynamicGradient(); // Uncomment for dynamic gradient
});


//-------------Footer------------//
document.addEventListener("DOMContentLoaded", function () {
    // Enhanced mouse interaction for footer elements
    let mouseX = 0;
    let mouseY = 0;
    let currentX = 0;
    let currentY = 0;

    document.addEventListener("mousemove", function (e) {
        mouseX = e.clientX / window.innerWidth;
        mouseY = e.clientY / window.innerHeight;
    });

    function animateFooterElements() {
        currentX += (mouseX - currentX) * 0.03;
        currentY += (mouseY - currentY) * 0.03;

        // Animate floating orbs
        const orbs = document.querySelectorAll(".footer-orb");
        orbs.forEach((orb, index) => {
            const speed = (index + 1) * 0.3;
            const xOffset = currentX * speed * 15;
            const yOffset = currentY * speed * 15;
            orb.style.transform = `translate(${xOffset}px, ${yOffset}px)`;
        });

        // Animate particles slightly
        const particles = document.querySelectorAll(".footer-particle");
        particles.forEach((particle, index) => {
            const speed = (index + 1) * 0.1;
            const xOffset = currentX * speed * 5;
            particle.style.transform = `translateX(${xOffset}px)`;
        });

        requestAnimationFrame(animateFooterElements);
    }

    animateFooterElements();

    // Dynamic gradient animation
    let gradientPosition = 0;
    setInterval(() => {
        gradientPosition += 0.5;
        const footer = document.querySelector(".footer");
        footer.style.background = `linear-gradient(
                    ${135 + Math.sin(gradientPosition * 0.01) * 10}deg,
                    #0f1419 0%,
                    #1e3a8a 25%,
                    #1e40af 50%,
                    #3b82f6 75%,
                    #0f1419 100%
                )`;
    }, 100);

    // Interactive footer links
    const footerLinks = document.querySelectorAll(".footer-link");
    footerLinks.forEach((link) => {
        link.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-3px) scale(1.05)";
            this.style.boxShadow = "0 15px 40px rgba(59, 130, 246, 0.3)";
        });

        link.addEventListener("mouseleave", function () {
            this.style.transform = "translateY(-3px) scale(1)";
            this.style.boxShadow = "0 10px 30px rgba(0, 0, 0, 0.3)";
        });
    });

    // Scroll-triggered animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = "running";
            }
        });
    });

    observer.observe(document.querySelector(".footer"));
});

// Replace the existing scroll observer with this enhanced version
document.addEventListener("DOMContentLoaded", function () {
    // Enhanced scroll-triggered animations
    const footer = document.querySelector(".footer");
    const footerElements = {
        brand: document.querySelector(".footer-brand"),
        links: document.querySelector(".footer-links"),
        eventContact: document.querySelector(".footer-event-contact"),
        bottom: document.querySelector(".footer-bottom"),
    };

    // Intersection Observer for main footer visibility
    const footerObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Footer is visible - animate in
                    footer.classList.add("animate-in");
                    footer.classList.remove("animate-out");

                    // Animate individual elements
                    setTimeout(() => {
                        Object.values(footerElements).forEach((element) => {
                            if (element) element.classList.add("animate-in");
                        });
                    }, 100);
                } else {
                    // Footer is not visible - animate out
                    footer.classList.add("animate-out");
                    footer.classList.remove("animate-in");

                    // Remove animate-in class from elements
                    Object.values(footerElements).forEach((element) => {
                        if (element) element.classList.remove("animate-in");
                    });
                }
            });
        },
        {
            threshold: 0.1,
            rootMargin: "50px 0px -50px 0px",
        }
    );

    // Detailed scroll position tracking
    let lastScrollY = window.scrollY;
    let scrollDirection = "down";

    const handleScroll = () => {
        const currentScrollY = window.scrollY;
        scrollDirection = currentScrollY > lastScrollY ? "down" : "up";
        lastScrollY = currentScrollY;

        // Get footer position
        const footerRect = footer.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        // Calculate visibility percentage
        const footerTop = footerRect.top;
        const footerHeight = footerRect.height;
        const visibilityThreshold = windowHeight * 0.3;

        // Enhanced animation logic based on scroll direction and position
        if (footerTop < windowHeight - visibilityThreshold) {
            if (scrollDirection === "down") {
                footer.classList.add("animate-in");
                footer.classList.remove("animate-out");
            }
        } else if (footerTop > windowHeight) {
            footer.classList.remove("animate-in");
            footer.classList.add("animate-out");
        }
    };

    // Throttled scroll listener for performance
    let ticking = false;
    const scrollListener = () => {
        if (!ticking) {
            requestAnimationFrame(() => {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    };

    // Initialize observers
    footerObserver.observe(footer);
    window.addEventListener("scroll", scrollListener, { passive: true });

    // Cleanup on page unload
    window.addEventListener("beforeunload", () => {
        footerObserver.disconnect();
        window.removeEventListener("scroll", scrollListener);
    });

    // ... rest of your existing JavaScript remains the same
});
