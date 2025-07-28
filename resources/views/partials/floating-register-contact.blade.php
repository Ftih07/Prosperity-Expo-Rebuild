{{--
    resources/views/partials/floating-sidebar-buttons.blade.php

    This Blade partial creates a floating sidebar component with quick action buttons
    for the "Indonesia-Australia Prosperity Expo 2025". It includes styling for the
    sidebar's appearance, animations, responsiveness, and accessibility features.
--}}

<style>
    /*
     * CSS Variables for Floating Sidebar Theme
     * Defines a set of custom properties (CSS variables) for consistent theming
     * across the floating sidebar, including colors, shadows, and gradients.
     */
    :root {
        /* Floating Sidebar Colors */
        --primary-red-floating: #dc2626;
        --primary-blue-floating: #1e40af;
        --primary-gold-floating: #f59e0b;
        --secondary-navy-floating: #1e3a8a;
        --accent-green-floating: #059669;
        --white-floating: #ffffff;
        --gray-50-floating: #f9fafb;
        --gray-100-floating: #f3f4f6;
        --gray-200-floating: #e5e7eb;
        --gray-600-floating: #4b5563;
        --gray-800-floating: #1f2937;
        --shadow-primary-floating: rgba(30, 58, 138, 0.15);
        --shadow-hover-floating: rgba(30, 58, 138, 0.25);
        --whatsapp-green-floating: #25d366;

        --gradient-primary-floating: linear-gradient(135deg, var(--primary-blue-floating) 0%, var(--secondary-navy-floating) 100%);
        --gradient-prosperity-floating: linear-gradient(135deg, var(--primary-gold-floating) 0%, #f97316 100%);
        --gradient-accent-floating: linear-gradient(135deg, var(--accent-green-floating) 0%, #047857 100%);

        /* Mobile-specific variables */
        --sidebar-width-desktop: 320px;
        --sidebar-width-tablet: 280px;
        --sidebar-width-mobile: 260px;
        --toggle-width-desktop: 70px;
        --toggle-width-mobile: 50px;
        --toggle-height-desktop: 140px;
        --toggle-height-mobile: 100px;
    }

    /*
     * Floating Sidebar Container
     * Styles the main container of the floating sidebar.
     * It's fixed on the right, vertically centered, initially hidden (translated off-screen),
     * and slides in on hover. Includes styling for its background, borders, and shadows.
     */
    .floating-sidebar {
        position: fixed;
        top: 50%;
        right: 0;
        /* Initially hidden: pushed off to the right by its own width minus the toggle button width */
        transform: translateY(-50%) translateX(calc(100% - var(--toggle-width-desktop)));
        z-index: 9999;
        background: var(--white-floating);
        border-radius: 20px 0 0 20px;
        /* Rounded corners only on the left side */
        box-shadow: -4px 0 32px var(--shadow-primary-floating);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        /* Smooth transition for hover effect */
        width: var(--sidebar-width-desktop);
        overflow: hidden;
        /* Ensures content stays within rounded borders */
        border: 2px solid transparent;
        /* Used with ::before for gradient border */
        background-clip: padding-box;
        /* Ensures background doesn't cover border-image */
        backdrop-filter: blur(10px);
        /* Applies a subtle blur effect to content behind it */
        max-height: 90vh;
        /* Prevent sidebar from being too tall on small screens */
    }


    /* Tablet Responsive */
    @media (max-width: 1024px) {
        .floating-sidebar {
            width: var(--sidebar-width-tablet);
            transform: translateY(-50%) translateX(calc(100% - var(--toggle-width-mobile)));
        }
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .floating-sidebar {
            width: var(--sidebar-width-mobile);
            transform: translateY(-50%) translateX(calc(100% - var(--toggle-width-mobile)));
            border-radius: 16px 0 0 16px;
            box-shadow: -2px 0 20px var(--shadow-primary-floating);
            max-height: 85vh;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .floating-sidebar {
            width: calc(100vw - 60px);
            /* Almost full width on very small screens */
            max-width: 240px;
            border-radius: 12px 0 0 12px;
        }
    }

    /*
     * Gradient Border for Floating Sidebar
     * Creates a "pseudo-element" that acts as a gradient border using masks.
     */
    .floating-sidebar::before {
        content: '';
        position: absolute;
        inset: 0;
        /* Covers the entire element */
        padding: 2px;
        /* Defines the thickness of the border */
        background: var(--gradient-primary-floating);
        /* The gradient used for the border */
        border-radius: 20px 0 0 20px;
        /* Masking technique to create a gradient border effect */
        mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        mask-composite: xor;
        /* Combines masks to create the cutout effect */
        -webkit-mask-composite: xor;
        /* For Webkit browsers */
        pointer-events: none;
        /* Allows clicks to pass through to the element below */
    }

    /*
     * Floating Sidebar Hover Effect
     * When hovered, the sidebar fully slides into view and its shadow intensifies.
     */
    .floating-sidebar:hover {
        transform: translateY(-50%) translateX(0);
        /* Slides into full view */
        box-shadow: -6px 0 40px var(--shadow-hover-floating);
        /* Stronger shadow on hover */
    }

    /* Touch devices - remove hover effects and use click instead */
    @media (hover: none) and (pointer: coarse) {
        .floating-sidebar:hover {
            transform: translateY(-50%) translateX(calc(100% - var(--toggle-width-mobile)));
            box-shadow: -2px 0 20px var(--shadow-primary-floating);
        }

        .floating-sidebar.active {
            transform: translateY(-50%) translateX(0) !important;
            box-shadow: -4px 0 30px var(--shadow-hover-floating);
        }

        .floating-btn:active {
            transform: scale(0.98);
            background: var(--gray-100-floating);
        }

        .floating-btn::before {
            display: none;
            /* Disable shimmer on touch devices */
        }
    }

    /*
     * Sidebar Toggle Button
     * Styles the visible part of the sidebar when it's retracted.
     * It acts as a handle to expand/collapse the sidebar.
     */
    .sidebar-toggle {
        position: absolute;
        left: 0;
        /* Positions it on the left edge of the sidebar container */
        top: 50%;
        transform: translateY(-50%);
        /* Centers it vertically */
        width: var(--toggle-width-desktop);
        height: var(--toggle-height-desktop);
        min-height: 44px;
        min-width: 44px;
        background: var(--gradient-primary-floating);
        /* Gradient background */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        /* Indicates it's clickable */
        border-radius: 20px 0 0 20px;
        color: var(--white-floating);
        font-size: 24px;
        transition: all 0.3s ease;
        /* Smooth transitions for hover/active states */
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
        /* Subtle inner shadow */
    }

    /*
     * Sidebar Toggle Button Hover Effect
     * Changes background gradient and scales slightly on hover.
     */
    .sidebar-toggle:hover {
        background: linear-gradient(135deg, var(--primary-blue-floating) 0%, var(--primary-red-floating) 100%);
        /* Changes gradient on hover */
        transform: translateY(-50%) scale(1.02);
        /* Slight scale up on hover */
    }

    /*
     * Text within Sidebar Toggle Button
     * Styles the "Quick Actions" text.
     */
    .toggle-text {
        font-size: 9px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-top: 4px;
        opacity: 0.9;
        text-align: center;
        line-height: 1.2;
    }

    /*
     * Sidebar Content Area
     * Styles the main content area of the sidebar where the buttons are located.
     * It's shifted to the right to accommodate the toggle button.
     */
    .sidebar-content {
        margin-left: var(--toggle-width-desktop);
        /* Pushes content to the right of the toggle button */
        padding: 25px 20px;
        background: linear-gradient(135deg, var(--white-floating) 0%, var(--gray-50-floating) 100%);
        /* Subtle gradient background */
        min-height: 100%;
        /* Ensures it fills the sidebar height */
        overflow-y: auto;
        max-height: calc(90vh - 40px);
    }

    /*
     * Sidebar Header Section
     * Styles the title and subtitle area at the top of the sidebar content.
     */
    .sidebar-header {
        text-align: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid var(--gray-200-floating);
        /* Separator line */
        position: relative;
    }

    /*
     * Accent Line for Sidebar Header
     * Creates a small gradient line below the header for visual emphasis.
     */
    .sidebar-header::after {
        content: '';
        position: absolute;
        bottom: -2px;
        /* Aligns with the border-bottom */
        left: 50%;
        transform: translateX(-50%);
        /* Centers the line */
        width: 40px;
        height: 2px;
        background: var(--gradient-prosperity-floating);
        /* Prosperity themed gradient */
        border-radius: 1px;
    }

    /*
     * Sidebar Title (e.g., "Prosperity Expo")
     */
    .sidebar-title {
        font-size: 15px;
        font-weight: 700;
        color: var(--secondary-navy-floating);
        margin-bottom: 4px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /*
     * Sidebar Subtitle (e.g., "Indonesia • Australia 2025")
     */
    .sidebar-subtitle {
        font-size: 11px;
        color: var(--gray-600-floating);
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    /*
     * General Styles for Floating Action Buttons
     * Applies common styling to all action buttons within the sidebar.
     */
    .floating-btn {
        display: flex;
        /* Arranges icon and text horizontally */
        align-items: center;
        padding: 16px 18px;
        margin-bottom: 12px;
        /* Spacing between buttons */
        border-radius: 12px;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        /* Smooth transitions */
        border: 2px solid transparent;
        /* Placeholder for specific button borders */
        background: var(--white-floating);
        color: var(--gray-800-floating);
        font-size: 14px;
        font-weight: 600;
        position: relative;
        /* For pseudo-elements and ripple effect */
        overflow: hidden;
        /* Hides content outside border-radius, essential for ripple and hover effect */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        min-height: 60px;
    }

    /*
     * Shimmer Effect for Floating Buttons
     * Creates a translucent shimmer that slides across the button on hover.
     */
    .floating-btn::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, transparent 0%, rgba(255, 255, 255, 0.1) 50%, transparent 100%);
        transform: translateX(-100%);
        /* Starts off-screen to the left */
        transition: transform 0.6s ease;
        /* Smooth slide animation */
    }

    /*
     * Shimmer Effect Activation on Hover
     */
    .floating-btn:hover::before {
        transform: translateX(100%);
        /* Slides across to the right */
    }

    /*
     * Floating Button Hover Effect
     * Moves the button slightly and enhances its shadow.
     */
    .floating-btn:hover {
        transform: translateX(6px) translateY(-2px);
        /* Slight lift and shift */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        /* More prominent shadow */
    }

    /*
     * Removes bottom margin from the last button in the list.
     */
    .floating-btn:last-child {
        margin-bottom: 0;
    }

    /*
     * Floating Button Active State
     * Provides visual feedback when the button is clicked.
     */
    .floating-btn:active {
        transform: translateX(3px) translateY(0) scale(0.98);
        /* Presses down slightly */
    }

    /*
     * Icon Container for Floating Buttons
     * Styles the circular/rounded background for the button icons.
     */
    .btn-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 18px;
        color: var(--white-floating);
        flex-shrink: 0;
        /* Prevents icon from shrinking on smaller screens */
        position: relative;
        overflow: hidden;
        /* Ensures any internal gradients/shadows are clipped */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }

    /*
     * Subtle Overlay for Button Icons
     * Adds a slight gradient overlay for depth.
     */
    .btn-icon::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 0%, transparent 100%);
        pointer-events: none;
        /* Allows clicks to pass through */
    }

    /*
     * Content Wrapper for Button Text
     */
    .btn-content {
        flex: 1;
        /* Allows content to take available space */
        display: flex;
        flex-direction: column;
    }

    /*
     * Main Text of Floating Button (e.g., "Register Now")
     */
    .btn-text {
        color: var(--gray-800-floating);
        font-weight: 700;
        font-size: 14px;
        margin-bottom: 2px;
    }

    /*
     * Description Text of Floating Button (e.g., "Secure your spot...")
     */
    .btn-description {
        color: var(--gray-600-floating);
        font-size: 11px;
        font-weight: 500;
        line-height: 1.3;
    }

    /*
     * Button Specific Styles
     * These classes apply unique colors and backgrounds to each type of button.
     */

    /* Register Button Specific Styles */
    .register-btn-floating {
        border-color: var(--primary-blue-floating);
        background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
    }

    .register-btn-floating .btn-icon {
        background: var(--gradient-primary-floating);
    }

    .register-btn-floating:hover {
        border-color: var(--secondary-navy-floating);
        background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
    }

    /* WhatsApp Button Specific Styles */
    .whatsapp-btn {
        border-color: var(--whatsapp-green-floating);
        background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    }

    .whatsapp-btn .btn-icon {
        background: linear-gradient(135deg, var(--whatsapp-green-floating) 0%, #16a34a 100%);
    }

    .whatsapp-btn:hover {
        border-color: var(--accent-green-floating);
        background: linear-gradient(135deg, #dcfce7 0%, #bbf7d0 100%);
    }

    /* Info Button Specific Styles (e.g., Interactive Map) */
    .info-btn {
        border-color: var(--primary-gold-floating);
        background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%);
    }

    .info-btn .btn-icon {
        background: var(--gradient-prosperity-floating);
    }

    .info-btn:hover {
        border-color: #f97316;
        background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%);
    }

    /*
     * Prosperity Badge (e.g., "2025" on Register Button)
     * Styles a small, animated badge indicating the event year.
     */
    .prosperity-badge {
        position: absolute;
        top: -8px;
        right: -8px;
        background: var(--gradient-prosperity-floating);
        color: var(--white-floating);
        font-size: 10px;
        font-weight: 700;
        padding: 4px 8px;
        border-radius: 20px;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        box-shadow: 0 2px 8px rgba(245, 158, 11, 0.3);
        animation: pulse-badge 3s infinite;
        /* Applies a pulsing animation */
    }

    /* Keyframe Animation for Prosperity Badge */
    @keyframes pulse-badge {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.05);
            opacity: 0.9;
        }
    }

    /*
     * Mobile Optimization (Responsive Design)
     * Adjusts layout and sizing for smaller screens.
     */
    @media (max-width: 768px) {

        /* Adjust sidebar width and initial position for tablets/smaller desktops */
        .floating-sidebar {
            width: 280px;
            transform: translateY(-50%) translateX(calc(100% - 60px));
            /* Adjusted initial hidden position */
        }

        /* Adjust toggle button size */
        .sidebar-toggle {
            width: 60px;
            height: 120px;
            font-size: 20px;
        }

        /* Adjust toggle text size */
        .toggle-text {
            font-size: 8px;
        }

        /* Adjust content margin and padding */
        .sidebar-content {
            margin-left: 60px;
            /* Adjusted to match new toggle width */
            padding: 20px 15px;
        }

        /* Adjust button padding */
        .floating-btn {
            padding: 14px 15px;
        }

        /* Adjust button icon size */
        .btn-icon {
            width: 38px;
            height: 38px;
            font-size: 16px;
        }

        /* Adjust button main text size */
        .btn-text {
            font-size: 13px;
        }

        /* Adjust button description text size */
        .btn-description {
            font-size: 10px;
        }
    }

    @media (max-width: 480px) {

        /* Further adjust sidebar width for very small screens/phones */
        .floating-sidebar {
            width: 260px;
        }

        /* Hide description text on very small screens to save space */
        .btn-description {
            display: none;
        }
    }

    /*
     * Enhanced Animations
     * Applies additional animations for a more dynamic feel.
     */
    .sidebar-toggle .toggle-icon {
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        /* Smooth transition for icon */
        position: relative;
    }

    /* Icon animation when sidebar is hovered */
    .floating-sidebar:hover .toggle-icon {
        transform: translateX(-4px) rotateY(10deg);
        /* Slight movement and rotation */
    }

    /* Sidebar Toggle Pulse Animation */
    .sidebar-toggle {
        animation: prosperity-pulse 5s infinite;
        /* Applies a pulsing shadow animation */
    }

    /* Keyframe Animation for Sidebar Toggle Pulse */
    @keyframes prosperity-pulse {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(30, 64, 175, 0.4);
            /* Initial shadow state */
        }

        25% {
            box-shadow: 0 0 0 8px rgba(30, 64, 175, 0.1);
            /* Blue pulse */
        }

        50% {
            box-shadow: 0 0 0 12px rgba(220, 38, 38, 0.1);
            /* Red pulse */
        }

        75% {
            box-shadow: 0 0 0 8px rgba(245, 158, 11, 0.1);
            /* Gold pulse */
        }
    }

    /*
     * Accessibility Improvements - Reduced Motion
     * Disables animations for users who prefer reduced motion.
     */
    @media (prefers-reduced-motion: reduce) {

        .floating-sidebar,
        .floating-btn,
        .sidebar-toggle .toggle-icon {
            transition: none;
            /* Disables all transitions */
        }

        .sidebar-toggle {
            animation: none;
            /* Disables toggle animation */
        }

        .prosperity-badge {
            animation: none;
            /* Disables badge animation */
        }
    }

    /*
     * Focus states for Accessibility
     * Provides clear visual focus indicators for keyboard navigation.
     */
    .floating-btn:focus {
        outline: 3px solid var(--primary-blue-floating);
        /* Blue outline on focus */
        outline-offset: 2px;
        /* Offset the outline from the button */
    }
</style>

{{--
    HTML Structure for the Floating Sidebar

    This section defines the semantic HTML structure of the floating sidebar,
    including the toggle button and the content area with interactive links.
    Accessibility attributes (role, aria-label, tabindex) are used for screen readers
    and keyboard navigation.
--}}
<div class="floating-sidebar" role="complementary" aria-label="Quick Actions Sidebar">
    {{-- Sidebar Toggle Button --}}
    <div class="sidebar-toggle" tabindex="0" role="button" aria-label="Toggle Quick Actions Menu">
        <span class="toggle-icon">🤝</span> {{-- Icon for the toggle button --}}
        <span class="toggle-text">Quick<br>Actions</span> {{-- Text for the toggle button --}}
    </div>

    {{-- Sidebar Content Area --}}
    <div class="sidebar-content">
        {{-- Sidebar Header --}}
        <div class="sidebar-header">
            <div class="sidebar-title">Prosperity Expo</div> {{-- Main title --}}
            <div class="sidebar-subtitle">Indonesia • Australia 2025</div> {{-- Subtitle/event details --}}
        </div>

        {{-- Register Button --}}
        <a href="https://tasteofindonesia.com.au/prosperity-expo"
            target="_blank" {{-- Opens link in a new tab --}}
            class="floating-btn register-btn-floating"
            aria-label="Register for Indonesia-Australia Prosperity Expo 2025">
            <div class="btn-icon">📋</div> {{-- Icon for register button --}}
            <div class="btn-content">
                <span class="btn-text">Register Now</span>
                <span class="btn-description">Secure your spot at the expo</span>
            </div>
            <div class="prosperity-badge">2025</div> {{-- Animated badge --}}
        </a>

        {{-- WhatsApp Support Button --}}
        <a href="{{ $whatsappUrl ?? 'https://wa.me/6281573000739?text=Hello, I need information about Indonesia-Australia Prosperity Expo 2025' }}"
            target="_blank"
            class="floating-btn whatsapp-btn"
            aria-label="Contact expo support via WhatsApp">
            <div class="btn-icon">💬</div> {{-- Icon for WhatsApp button --}}
            <div class="btn-content">
                <span class="btn-text">WhatsApp Support</span>
                <span class="btn-description">Get instant assistance</span>
            </div>
        </a>

        {{-- Interactive Map Button --}}
        <a href="{{ route('booth') }}" {{-- Uses Laravel's route helper to generate URL for 'booth' route --}}
            target="_blank"
            class="floating-btn info-btn"
            aria-label="View interactive floor plan">
            <div class="btn-icon">🗺️</div> {{-- Icon for map button --}}
            <div class="btn-content">
                <span class="btn-text">Interactive Map</span>
                <span class="btn-description">Open Floor Plan</span>
            </div>
        </a>
    </div>
</div>

<script>
    // Device detection
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    const isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    let sidebarOpen = false;

    // Enhanced interaction tracking and animations
    // Iterate over each floating button to add event listeners
    document.querySelectorAll('.floating-btn').forEach(btn => {
        // Add click event listener to each button
        btn.addEventListener('click', function(e) {
            // Enhanced click feedback with ripple effect (HANYA UNTUK NON-TOUCH)
            if (!isTouch) {
                const ripple = document.createElement('div'); // Create a new div element for the ripple
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(30, 58, 138, 0.2); /* Lebih ringan untuk mobile */
                    transform: scale(0); /* Start scale at 0 */
                    animation: ripple 0.4s linear; /* Lebih cepat untuk mobile */
                    left: ${e.offsetX - 8}px; /* Position ripple relative to click point */
                    top: ${e.offsetY - 8}px;
                    width: 16px;
                    height: 16px;
                    pointer-events: none; /* Ensures ripple doesn't interfere with clicks */
                `;

                this.style.position = 'relative'; // Ensure button is positioned relatively for absolute ripple
                this.style.overflow = 'hidden'; // Hide ripple outside button boundaries
                this.appendChild(ripple); // Add ripple to the button

                setTimeout(() => ripple.remove(), 400); // Remove ripple after animation completes
            }

            // Mobile haptic feedback (if supported)
            if ('vibrate' in navigator) {
                navigator.vibrate(50);
            }

            // Determine button type for analytics tracking
            const btnType = this.classList.contains('register-btn-floating') ? 'Register' :
                this.classList.contains('whatsapp-btn') ? 'WhatsApp Support' : 'Interactive Map';

            // Track with more detailed information using Google Analytics (gtag) if available
            if (typeof gtag !== 'undefined') {
                gtag('event', 'sidebar_interaction', {
                    event_category: 'Prosperity Expo Sidebar', // Category of the event
                    event_label: btnType, // Specific label for the clicked button
                    device_type: isMobile ? 'mobile' : 'desktop', // Device type tracking
                    value: 1 // A numerical value associated with the event
                });
            }

            // Log click event to console for debugging/development
            console.log(`Prosperity Expo 2025 - ${btnType} clicked from floating sidebar (${isMobile ? 'mobile' : 'desktop'})`);
        });

        // Enhanced hover effects: optimize performance by hinting browser about upcoming changes
        // Only for non-touch devices to improve mobile performance
        if (!isTouch) {
            btn.addEventListener('mouseenter', function() {
                this.style.willChange = 'transform, box-shadow'; // Tell browser to optimize for these properties
            });

            btn.addEventListener('mouseleave', function() {
                this.style.willChange = 'auto'; // Reset after hover
            });
        }
    });

    // Enhanced mobile interaction handling for sidebar toggle
    if (isTouch) {
        const toggle = document.querySelector('.sidebar-toggle');

        // Replace hover with click/touch for mobile
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            sidebarOpen = !sidebarOpen;

            const sidebar = document.querySelector('.floating-sidebar');
            if (sidebarOpen) {
                sidebar.classList.add('active');
                this.setAttribute('aria-expanded', 'true');
            } else {
                sidebar.classList.remove('active');
                this.setAttribute('aria-expanded', 'false');
            }
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            const sidebar = document.querySelector('.floating-sidebar');
            const toggle = document.querySelector('.sidebar-toggle');
            if (!sidebar.contains(e.target) && sidebarOpen) {
                sidebarOpen = false;
                sidebar.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Prevent sidebar close when clicking inside
        document.querySelector('.floating-sidebar').addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }

    // Enhanced scroll behavior for better UX (especially on mobile)
    let lastScrollTop = 0; // Tracks previous scroll position
    let scrollTimer = null; // Timer for auto-showing sidebar after scroll stops
    let ticking = false; // Performance optimization flag
    const sidebar = document.querySelector('.floating-sidebar'); // Get the sidebar element

    function updateSidebarOnScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop; // Current scroll position

        clearTimeout(scrollTimer); // Clear any existing scroll timer

        // Enhanced mobile scroll behavior: hide partially on scroll down, show on scroll up
        if (window.innerWidth <= 768) { // Apply only for mobile/tablet screen sizes
            const scrollThreshold = 200; // Reduced threshold for better UX

            if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) { // If scrolling down and past threshold
                if (!sidebarOpen) { // Only hide if sidebar is not manually opened
                    // Partially hide sidebar
                    sidebar.style.transform = 'translateY(-50%) translateX(calc(100% - 30px))';
                    sidebar.style.opacity = '0.7';
                }
            } else {
                if (!sidebarOpen) { // Only show if sidebar is not manually opened
                    // Show more of the sidebar
                    sidebar.style.transform = 'translateY(-50%) translateX(calc(100% - var(--toggle-width-mobile)))';
                    sidebar.style.opacity = '1';
                }
            }

            // Auto-show sidebar fully after scroll stops for a duration
            scrollTimer = setTimeout(() => {
                if (!sidebarOpen) { // Only auto-show if not manually opened
                    sidebar.style.transform = 'translateY(-50%) translateX(calc(100% - var(--toggle-width-mobile)))';
                    sidebar.style.opacity = '1';
                }
            }, 1500); // Reduced delay for better responsiveness
        }

        lastScrollTop = scrollTop; // Update last scroll position
        ticking = false; // Reset performance flag
    }

    // Throttled scroll event for better performance
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateSidebarOnScroll);
            ticking = true;
        }
    }, {
        passive: true
    }); // Passive event for better scroll performance

    // Keyboard accessibility: Allow sidebar toggle with Enter/Space key
    document.querySelector('.sidebar-toggle').addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') { // Check if Enter or Space key is pressed
            e.preventDefault(); // Prevent default action (e.g., scrolling)

            if (isTouch) {
                // Use the same logic as touch click for consistency
                sidebarOpen = !sidebarOpen;

                if (sidebarOpen) {
                    sidebar.classList.add('active');
                    this.setAttribute('aria-expanded', 'true');
                } else {
                    sidebar.classList.remove('active');
                    this.setAttribute('aria-expanded', 'false');
                }
            } else {
                // Desktop behavior - Toggle sidebar visibility by changing its transform property
                sidebar.style.transform = sidebar.style.transform.includes('translateX(0)') ?
                    'translateY(-50%) translateX(calc(100% - var(--toggle-width-desktop)))' : // If currently fully open, retract it
                    'translateY(-50%) translateX(0)'; // If retracted, fully open it
            }
        }
    });

    // Touch gesture support for mobile
    if (isTouch) {
        let touchStartX = 0;
        let touchStartY = 0;
        let touchEndX = 0;
        let touchEndY = 0;

        sidebar.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
            touchStartY = e.changedTouches[0].screenY;
        }, {
            passive: true
        });

        sidebar.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            touchEndY = e.changedTouches[0].screenY;

            const deltaX = touchEndX - touchStartX;
            const deltaY = Math.abs(touchEndY - touchStartY);

            // Swipe right to close sidebar (if open)
            if (sidebarOpen && deltaX > 50 && deltaY < 100) {
                sidebarOpen = false;
                sidebar.classList.remove('active');
                document.querySelector('.sidebar-toggle').setAttribute('aria-expanded', 'false');
            }
        }, {
            passive: true
        });
    }

    // Orientation change handling
    window.addEventListener('orientationchange', function() {
        setTimeout(() => {
            // Reset sidebar position after orientation change
            if (sidebarOpen) {
                sidebar.classList.add('active');
            } else {
                sidebar.classList.remove('active');
                sidebar.style.transform = '';
                sidebar.style.opacity = '';
            }
        }, 100);
    });

    // Intersection Observer for better performance on mobile
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Sidebar is visible, enable animations
                    sidebar.style.willChange = 'transform, opacity';
                } else {
                    // Sidebar is not visible, disable animations for performance
                    sidebar.style.willChange = 'auto';
                }
            });
        }, {
            rootMargin: '50px'
        });

        observer.observe(sidebar);
    }

    // Add ripple animation styles dynamically to the document head
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(3); /* Optimized scale for mobile */
                opacity: 0; /* Fade out the ripple */
            }
        }
        
        /* Mobile-specific performance optimizations */
        @media (max-width: 768px) {
            .floating-sidebar {
                will-change: transform;
            }
            
            .floating-btn {
                -webkit-tap-highlight-color: transparent;
                tap-highlight-color: transparent;
            }
            
            /* Reduce blur on mobile for better performance */
            .floating-sidebar {
                backdrop-filter: blur(5px);
            }
        }
        
        /* Very small devices */
        @media (max-width: 320px) {
            .floating-sidebar {
                backdrop-filter: none;
            }
        }
    `;
    document.head.appendChild(style); // Append the style tag to the document's <head>

    // Enhanced accessibility - announce sidebar to screen readers
    // Creates a hidden div that announces the sidebar's presence when the page loads.
    const sidebar_announcement = document.createElement('div');
    sidebar_announcement.setAttribute('aria-live', 'polite'); // Live region: announces updates gracefully
    sidebar_announcement.setAttribute('aria-atomic', 'true'); // Announces the entire content of the region
    sidebar_announcement.style.cssText = 'position: absolute; left: -10000px; width: 1px; height: 1px; overflow: hidden;'; // Visually hide it
    sidebar_announcement.textContent = `Indonesia-Australia Prosperity Expo 2025 quick actions sidebar loaded for ${isMobile ? 'mobile' : 'desktop'} device`; // Enhanced announcement
    document.body.appendChild(sidebar_announcement); // Add to the end of the body

    // Performance monitoring (development only)
    if (console.time && window.location.hostname === 'localhost') {
        console.time('Sidebar initialization');
        console.timeEnd('Sidebar initialization');
        console.log('Mobile optimizations:', {
            isMobile,
            isTouch,
            screenWidth: window.innerWidth,
            devicePixelRatio: window.devicePixelRatio
        });
    }

    // Preload critical resources for better mobile performance
    const preloadLinks = [
        'https://tasteofindonesia.com.au/prosperity-expo',
        'https://wa.me/6281573000739'
    ];

    preloadLinks.forEach(url => {
        const link = document.createElement('link');
        link.rel = 'prefetch';
        link.href = url;
        document.head.appendChild(link);
    });
</script>