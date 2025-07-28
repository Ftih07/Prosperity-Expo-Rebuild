@extends('layouts.app')

@section('title', 'Interactive Floor Plan - Prosperity Expo 2025')

{{--
    The `@section('meta')` directive is used to inject custom meta tags into the `<head>`
    section of the `layouts.app` master layout. These tags are crucial for SEO (Search Engine Optimization)
    and social media sharing.
--}}
@section('meta')
{{-- Favicon: Sets the small icon displayed in browser tabs and bookmarks. --}}
<link rel="icon" href="{{ asset('assets/images/logo/IAPEX_Logo.png') }}" type="image/x-icon" />

{{-- Standard SEO Meta Tags --}}
<meta name="description" content="Explore the interactive floor plan of Prosperity Expo 2025. Find exhibitor booths, download the PDF map, and navigate the exhibition hall easily.">
<meta name="keywords" content="Prosperity Expo, floor plan, denah pameran, interactive map, exhibitor booths, pameran 2025, virtual tour, convention map, booth layout, Prosperity Expo map">
{{-- Canonical URL: Helps prevent duplicate content issues by specifying the preferred URL. --}}
<link rel="canonical" href="{{ url()->current() }}">

{{-- Open Graph / Facebook Meta Tags: Control how the page appears when shared on Facebook and other platforms. --}}
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Interactive Floor Plan - Prosperity Expo 2025">
<meta property="og:description" content="Explore the interactive floor plan of Prosperity Expo 2025. Find exhibitor booths, download the PDF map, and navigate the exhibition hall easily.">
<meta property="og:image" content="{{ asset('assets/images/logo/IAPEX_Logo.png') }}">
<meta property="og:image:alt" content="Prosperity Expo 2025 Interactive Floor Plan">

{{-- Twitter Meta Tags: Control how the page appears when shared on Twitter. --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="Interactive Floor Plan - Prosperity Expo 2025">
<meta name="twitter:description" content="Explore the interactive floor plan of Prosperity Expo 2025. Find exhibitor booths, download the PDF map, and navigate the exhibition hall easily.">
<meta name="twitter:image" content="{{ asset('assets/images/logo/IAPEX_Logo.png') }}">
<meta name="twitter:image:alt" content="Prosperity Expo 2025 Interactive Floor Plan">
@endsection

{{--
    The `@section('content')` directive marks the main content area of the page.
    This content will be inserted into the `@yield('content')` slot in the `layouts.app` master layout.
--}}
@section('content')
<style>
    /* CSS Custom Properties (Variables) for consistent theming */
    :root {
        --prosperity-blue: #1e40af;
        --prosperity-gold: #3b82f6;
        /* Note: This looks like a light blue, not gold. Consider renaming or adjusting. */
        --prosperity-light-blue: #dbeafe;
        --prosperity-dark: #1f2937;
        --prosperity-green: #1e40af;
        /* Note: This is the same as prosperity-blue. Consider renaming or adjusting. */
    }

    /* --- Modal Styles --- */
    /* Overlay that covers the entire screen behind the modal */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        /* Semi-transparent black background */
        z-index: 9999;
        /* Ensures it's on top of most other content */
        display: flex;
        align-items: center;
        /* Vertically center content */
        justify-content: center;
        /* Horizontally center content */
        padding: 20px;
        box-sizing: border-box;
        /* Includes padding in the element's total width and height */
    }

    /* Main modal content container */
    .modal-content {
        background: white;
        border-radius: 16px;
        padding: 30px;
        max-width: 600px;
        width: 100%;
        max-height: 90vh;
        /* Limits height to 90% of viewport height */
        overflow-y: auto;
        /* Adds scroll if content overflows vertically */
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        /* Soft shadow for depth */
        position: relative;
        animation: modalSlideIn 0.3s ease-out;
        /* Entry animation */
    }

    /* Keyframe animation for modal entry */
    @keyframes modalSlideIn {
        from {
            opacity: 0;
            transform: translateY(-30px) scale(0.95);
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Modal header styling */
    .modal-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid var(--prosperity-light-blue);
        /* Separator line */
    }

    /* Icon within the modal header */
    .modal-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--prosperity-blue), var(--prosperity-gold));
        /* Gradient background */
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        color: white;
        font-size: 20px;
    }

    /* Title of the modal */
    .modal-title {
        font-size: 24px;
        font-weight: bold;
        color: var(--prosperity-dark);
        margin: 0;
    }

    /* Close button for the modal */
    .modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        background: none;
        border: none;
        font-size: 28px;
        color: #6b7280;
        cursor: pointer;
        padding: 5px;
        border-radius: 50%;
        transition: all 0.2s;
        /* Smooth transition for hover effect */
    }

    .modal-close:hover {
        background: #f3f4f6;
        color: var(--prosperity-dark);
    }

    /* Section for instructions within the modal */
    .instruction-section {
        margin-bottom: 25px;
    }

    /* Title for instruction sections */
    .instruction-title {
        font-size: 18px;
        font-weight: 600;
        color: var(--prosperity-blue);
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    /* Icons for instruction titles (using unicode characters) */
    .instruction-title::before {
        content: "📱";
        /* Mobile icon */
        margin-right: 8px;
        font-size: 20px;
    }

    .instruction-title.desktop::before {
        content: "💻";
        /* Desktop icon */
    }

    .instruction-title.general::before {
        content: "ℹ️";
        /* Information icon */
    }

    /* List styling for instructions */
    .instruction-list {
        list-style: none;
        /* Removes default list bullets */
        padding: 0;
        margin: 0;
    }

    .instruction-list li {
        padding: 8px 0;
        padding-left: 25px;
        /* Space for custom bullet */
        position: relative;
        color: var(--prosperity-dark);
        line-height: 1.5;
    }

    /* Custom bullet point for list items */
    .instruction-list li::before {
        content: "✓";
        /* Checkmark icon */
        position: absolute;
        left: 0;
        color: var(--prosperity-green);
        font-weight: bold;
    }

    /* Section for download button */
    .download-section {
        background: linear-gradient(135deg, var(--prosperity-light-blue), #f0f9ff);
        padding: 20px;
        border-radius: 12px;
        margin-bottom: 20px;
        text-align: center;
    }

    /* Download button styling */
    .download-btn {
        display: inline-flex;
        align-items: center;
        background: linear-gradient(135deg, var(--prosperity-blue), var(--prosperity-gold));
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s;
        box-shadow: 0 4px 12px rgba(30, 64, 175, 0.3);
    }

    .download-btn:hover {
        transform: translateY(-2px);
        /* Slight lift on hover */
        box-shadow: 0 6px 20px rgba(30, 64, 175, 0.4);
        color: white;
        /* Ensure text color remains white */
        text-decoration: none;
        /* Remove underline on hover for links */
    }

    /* Icon for download button */
    .download-btn::before {
        content: "⬇️";
        /* Down arrow icon */
        margin-right: 8px;
        font-size: 18px;
    }

    /* Modal footer styling */
    .modal-footer {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid #e5e7eb;
        /* Top border as separator */
    }

    /* Button to close modal and start exploring */
    .start-exploring-btn {
        background: var(--prosperity-green);
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .start-exploring-btn:hover {
        background: #059669;
        /* Darker green on hover */
        transform: translateY(-1px);
    }

    /* --- Booth Map Styles --- */
    /* Main container for the booth map */
    .booth-map {
        position: relative;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        overflow: visible;
        /* Allows tooltips to extend beyond boundaries */
        padding: 20px;
        box-sizing: border-box;
    }

    /* Container for the SVG floor plan, enabling horizontal scroll */
    .denah-container {
        width: 100%;
        overflow-x: auto;
        overflow-y: visible;
        /* Allows tooltips to be seen */
        position: relative;
    }

    /* Wrapper for the SVG and booths, maintaining minimum width */
    .denah-wrapper {
        position: relative;
        min-width: 1200px;
        /* Ensures a minimum width for the SVG and booths */
        width: 100%;
    }

    /* Styling for the SVG element itself */
    .denah-wrapper svg {
        width: 100%;
        height: auto;
        display: block;
        min-width: 1200px;
        /* Matches wrapper's min-width */
    }

    /* Note: The `booth-map img` selector seems redundant if using SVG for denah.
       If an image is also used, this styles it similarly. */
    .booth-map img {
        width: 100%;
        display: block;
        min-width: 1200px;
    }

    /* Individual booth element overlay */
    .booth {
        position: absolute;
        /* Allows positioning relative to .denah-wrapper */
        cursor: pointer;
        border: 2px solid transparent;
        /* Transparent border normally */
        border-radius: 4px;
        transition: all 0.3s ease;
        /* Smooth transition for hover effects */
        z-index: 10;
        /* Ensures booths are above the map background */
    }

    /* Hover effects for booths */
    .booth:hover {
        border-color: var(--prosperity-gold);
        /* Gold border on hover */
        background: rgba(245, 158, 11, 0.1);
        /* Light transparent background on hover */
        transform: scale(1.02);
        /* Slightly enlarge on hover */
        z-index: 20;
        /* Bring to front on hover */
    }

    /* --- Enhanced Tooltip Styles --- */
    /* Tooltip container, initially hidden */
    .tooltip-info {
        display: none;
        /* Hidden by default */
        position: absolute;
        background: white;
        padding: 16px 20px;
        border-radius: 12px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
        z-index: 999;
        /* Higher z-index to appear above booths */
        font-size: 14px;
        min-width: 240px;
        max-width: 320px;
        border: 1px solid var(--prosperity-light-blue);
        animation: tooltipFadeIn 0.2s ease-out;
        /* Entry animation */
        backdrop-filter: blur(10px);
        /* Optional: Frosted glass effect */
    }

    /* Keyframe animation for tooltip entry */
    @keyframes tooltipFadeIn {
        from {
            opacity: 0;
            transform: translateY(10px) scale(0.95);
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Show tooltip when booth is hovered */
    .booth:hover .tooltip-info {
        display: block;
    }

    /* Tooltip header styling */
    .tooltip-header {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        padding-bottom: 8px;
        border-bottom: 1px solid var(--prosperity-light-blue);
    }

    /* Icon within the tooltip header */
    .tooltip-icon {
        width: 24px;
        height: 24px;
        background: linear-gradient(135deg, var(--prosperity-blue), var(--prosperity-gold));
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        font-size: 12px;
        color: white;
        font-weight: bold;
    }

    /* Title within the tooltip */
    .tooltip-title {
        font-weight: 700;
        color: var(--prosperity-dark);
        font-size: 15px;
        margin: 0;
        line-height: 1.3;
    }

    /* Description within the tooltip */
    .tooltip-description {
        color: #4b5563;
        line-height: 1.5;
        margin: 0;
    }

    /* Status badge styling */
    .tooltip-status {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 600;
        margin-top: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Specific colors for different status types */
    .status-available {
        background: #fef3c7;
        /* Light yellow */
        color: #92400e;
        /* Darker yellow/orange */
    }

    .status-occupied {
        background: #d1fae5;
        /* Light green */
        color: #065f46;
        /* Darker green */
    }

    .status-sponsor {
        background: #e0e7ff;
        /* Light blue */
        color: #3730a3;
        /* Darker blue/purple */
    }

    /* --- Mobile Adaptations (Media Queries) --- */
    @media (max-width: 768px) {
        .modal-content {
            margin: 10px;
            padding: 20px;
        }

        .modal-title {
            font-size: 20px;
        }

        .booth-map {
            max-width: 100%;
            padding: 10px;
            overflow-x: auto;
            /* Enable horizontal scroll for map on smaller screens */
        }

        .denah-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            /* Improves scrolling on iOS devices */
        }

        .denah-wrapper {
            min-width: 1200px;
            /* Maintains fixed width to ensure SVG is not squished */
        }

        .booth {
            border-width: 1px;
            /* Thinner border on mobile */
        }

        .tooltip-info {
            min-width: 200px;
            max-width: 280px;
            font-size: 13px;
            padding: 12px 16px;
        }

        /* For mobile, display tooltip on tap (active state) */
        .booth:active .tooltip-info {
            display: block;
        }
    }

    /* Utility class to hide elements */
    .hidden {
        display: none !important;
    }

    /* --- Zoom Indicator Styles --- */
    .zoom-indicator {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: var(--prosperity-blue);
        color: white;
        padding: 10px 15px;
        border-radius: 25px;
        font-size: 12px;
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        z-index: 100;
        transition: all 0.3s;
    }

    /* Classes to control visibility and animation of the zoom indicator */
    .zoom-indicator.show {
        opacity: 1;
        transform: translateY(0);
    }

    .zoom-indicator.hide {
        opacity: 0;
        transform: translateY(20px);
    }
</style>

{{--
    Instruction Modal:
    This modal appears when the page loads to provide users with guidance on
    how to interact with the interactive floor plan, including navigation tips
    for both mobile and desktop, and a link to download the PDF version.
--}}
<div id="instructionModal" class="modal-overlay">
    <div class="modal-content">
        <button class="modal-close" onclick="closeModal()">&times;</button>

        <div class="modal-header">
            <div class="modal-icon">🗺</div>
            <h2 class="modal-title">Welcome to the Interactive Floor Plan</h2>
        </div>

        <div class="download-section">
            <h3 style="margin-top: 0; color: var(--prosperity-blue); font-size: 18px;">📥 Download Offline Floor Plan</h3>
            <p style="margin-bottom: 15px; color: var(--prosperity-dark);">Get a copy of the floor plan for offline reference</p>
            <a href="{{ url('/download-denah') }}" class="download-btn">
                Download PDF Floor Plan
            </a>
        </div>

        <!-- New mobile-specific warning -->
        <div class="instruction-section" style="background:#fff8e1; padding:15px; border-radius:10px; margin-bottom:20px;">
            <h3 style="color:#d97706; font-size:18px; margin-bottom:8px;">⚠️ Best Viewed on Desktop</h3>
            <p style="margin:0; color:#92400e; line-height:1.5;">
                For the best experience and clearer details, we recommend accessing the floor plan using a laptop or desktop device.
                Mobile devices may have limited visibility due to screen size.
            </p>
        </div>

        <div class="instruction-section">
            <h3 class="instruction-title general">How to Use the Floor Plan</h3>
            <ul class="instruction-list">
                <li>Hover over a booth to see exhibitor details</li>
                <li>Click on a booth on mobile devices to display the tooltip</li>
                <li>Each booth includes full name and description</li>
            </ul>
        </div>

        <div class="instruction-section">
            <h3 class="instruction-title">Mobile Navigation</h3>
            <ul class="instruction-list">
                <li>Use <strong>pinch to zoom</strong> to zoom in/out</li>
                <li>Drag the floor plan with your finger to view other areas</li>
                <li><strong>Tap</strong> on a booth to see detailed information</li>
                <li>Zoom in for clearer details</li>
            </ul>
        </div>

        <div class="instruction-section">
            <h3 class="instruction-title desktop">Desktop Navigation</h3>
            <ul class="instruction-list">
                <li>Use <strong>Ctrl + Plus (+)</strong> to zoom in</li>
                <li>Use <strong>Ctrl + Minus (-)</strong> to zoom out</li>
                <li><strong>Hover</strong> over a booth to see the tooltip</li>
                <li>Scroll with the mouse wheel while holding Ctrl to zoom</li>
            </ul>
        </div>

        <div class="modal-footer">
            <button class="start-exploring-btn" onclick="closeModal()">
                🚀 Start Exploring the Floor Plan
            </button>
        </div>
    </div>
</div>

{{--
    Zoom Indicator:
    A small floating message that appears after the modal closes,
    suggesting users to zoom for more details.
--}}
<div id="zoomIndicator" class="zoom-indicator hide">
    💡 Use zoom to see booth details
</div>

{{--
    Main Booth Map Section:
    This is where the interactive floor plan and its clickable booth overlays are rendered.
--}}
<div class="booth-map">
    <div class="denah-container">
        <div class="denah-wrapper">
            {{--
                Includes the SVG floor plan directly into the HTML.
                `public_path('assets/denah.svg')` points to the SVG file in the public directory.
                `{!! !!}` is used to output unescaped HTML.
            --}}
            {!! file_get_contents(public_path('assets/denah.svg')) !!}
            <div id="tooltip" class="tooltip-booth"></div> {{-- Placeholder for a dynamic tooltip, though individual tooltips are used below --}}
        </div>
    </div>

    @php
    // Define an associative array for booth data, where keys are booth IDs (e.g., 'A1', 'S1').
    // Each entry contains the 'name' of the exhibitor and a 'desc' (description).
    $booths = [
    'A1' => ['name' => 'Available Booth', 'desc' => 'Exhibitor slot open – contact the organizer for participation.'],
    'A2' => ['name' => 'Mulia Edukasi Mandiri', 'desc' => 'An educational institution or a company providing comprehensive educational services and training programs.'],
    'A3' => ['name' => 'Sembilan Meter Persegi', 'desc' => 'A company focused on efficient space utilization, design, or a creative agency.'],
    'A4' => ['name' => 'MS-Consultant', 'desc' => 'A professional consulting firm offering specialized expertise.'],
    'A5' => ['name' => 'La Moringa', 'desc' => 'A company specializing in Moringa-based products.'],

    'A6' => ['name' => 'Local Esia', 'desc' => 'A local business initiative or regional presence of a larger organization.'],
    'A7' => ['name' => 'PT Kereta Api Indonesia', 'desc' => 'The national railway company of Indonesia.'],
    'A8' => ['name' => 'Available Booth', 'desc' => 'Exhibitor slot open – contact the organizer for participation.'],
    'A9' => ['name' => 'Available Booth', 'desc' => 'Exhibitor slot open – contact the organizer for participation.'],
    'A10-12' => ['name' => 'LPEI - Indonesia Eximbank', 'desc' => 'The official export credit agency of Indonesia.'],

    'A13-17' => ['name' => 'KATALIS PARTNERS', 'desc' => 'A firm that acts as a catalyst for business growth.'],

    'A18' => ['name' => 'Karunia Multi Indah (Varesse)', 'desc' => 'Likely involved in beauty, lifestyle, or home decor.'],
    'A19' => ['name' => 'Export Expert Indonesia', 'desc' => 'A specialist company for export services.'],

    'A20' => ['name' => 'Waste Paper', 'desc' => 'A company engaged in paper recycling.'],
    'A21' => ['name' => 'Available Booth', 'desc' => 'Exhibitor slot open – contact the organizer for participation.'],
    'A22' => ['name' => 'Available Booth', 'desc' => 'Exhibitor slot open – contact the organizer for participation.'],
    'A23' => ['name' => 'Victoria Investment n trade', 'desc' => 'Facilitates investment and trade with Victoria, Australia.'],

    'A24' => ['name' => 'Global Sourcing Expo', 'desc' => 'A platform connecting global buyers and suppliers.'],
    'A25' => ['name' => 'Ina Export', 'desc' => 'Promotes and assists Indonesian export businesses.'],
    'S1' => ['name' => 'Privy ID', 'desc' => 'A leading provider of digital identity and e-signature solutions.'],
    'S2' => ['name' => 'BSI', 'desc' => 'Bank Syariah Indonesia – a leading Islamic bank.'],
    'S3' => ['name' => 'Available Booth', 'desc' => 'Sponsor slot open – contact the organizer for participation.'],
    'S4' => ['name' => 'Available Booth', 'desc' => 'Sponsor slot open – contact the organizer for participation.'],
    'S5' => ['name' => 'Interport Global', 'desc' => 'A logistics and freight forwarding company.'],
    ];

    // Define an associative array for booth positions (top, left, width, height) relative to the map.
    // These values are percentages to ensure responsiveness.
    $positions = [
    'A1' => ['top' => '63.2%', 'left' => '6.2%', 'width' => '3%', 'height' => '2.4%'],
    'A2' => ['top' => '60.8%', 'left' => '6.2%', 'width' => '3%', 'height' => '2.4%'],
    'A3' => ['top' => '58.3%', 'left' => '6.2%', 'width' => '3%', 'height' => '2.4%'],
    'A4' => ['top' => '55.6%', 'left' => '6.2%', 'width' => '3%', 'height' => '2.4%'],
    'A5' => ['top' => '53.3%', 'left' => '6.2%', 'width' => '3%', 'height' => '2.4%'],

    'A6' => ['top' => '51%', 'left' => '18%', 'width' => '3%', 'height' => '2.5%'],
    'A7' => ['top' => '51%', 'left' => '21.3%', 'width' => '3%', 'height' => '2.5%'],
    'A8' => ['top' => '51%', 'left' => '24.6%', 'width' => '3%', 'height' => '2.5%'],
    'A9' => ['top' => '51%', 'left' => '27.8%', 'width' => '3%', 'height' => '2.5%'],
    'A10-12' => ['top' => '51%', 'left' => '31%', 'width' => '9.3%', 'height' => '2.5%'],

    'A13-17' => ['top' => '53.5%', 'left' => '49%', 'width' => '3.2%', 'height' => '12.3%'],

    'A18' => ['top' => '59.7%', 'left' => '13.6%', 'width' => '3.1%', 'height' => '2.3%'],
    'A19' => ['top' => '59.7%', 'left' => '16.8%', 'width' => '3.1%', 'height' => '2.3%'],

    'A20' => ['top' => '59.6%', 'left' => '38.3%', 'width' => '3.1%', 'height' => '2.5%'],
    'A21' => ['top' => '59.6%', 'left' => '41.6%', 'width' => '3.1%', 'height' => '2.5%'],
    'A22' => ['top' => '57.1%', 'left' => '41.6%', 'width' => '3.1%', 'height' => '2.5%'],
    'A23' => ['top' => '57%', 'left' => '38.3%', 'width' => '3.1%', 'height' => '2.5%'],

    'A24' => ['top' => '57.2%', 'left' => '16.8%', 'width' => '3.1%', 'height' => '2.3%'],
    'A25' => ['top' => '57.2%', 'left' => '13.6%', 'width' => '3.1%', 'height' => '2.3%'],

    'S1' => ['top' => '68.3%', 'left' => '17.2%', 'width' => '5%', 'height' => '3.7%'],
    'S2' => ['top' => '68.3%', 'left' => '22.2%', 'width' => '5%', 'height' => '3.7%'],
    'S3' => ['top' => '68.3%', 'left' => '27.1%', 'width' => '5%', 'height' => '3.7%'],
    'S4' => ['top' => '68.3%', 'left' => '32.1%', 'width' => '5%', 'height' => '3.7%'],
    'S5' => ['top' => '68.3%', 'left' => '37.1%', 'width' => '5%', 'height' => '3.7%'],
    ];

    // Define a helper function to determine the booth's status ('available', 'occupied', 'sponsor')
    // based on its key and name. This helps in assigning appropriate CSS classes.
    $getBoothStatus = function($key) use ($booths) {
    if (strpos($key, 'S') === 0) { // If the booth key starts with 'S' (e.g., S1, S2)
    return strpos($booths[$key]['name'], 'Available') !== false ? 'available' : 'sponsor';
    }
    // For non-sponsor booths, check if 'Available' is in the name.
    return strpos($booths[$key]['name'], 'Available') !== false ? 'available' : 'occupied';
    };

    // Define a helper function to get an appropriate icon for the booth based on its type/status.
    $getBoothIcon = function($key) use ($booths) {
    if (strpos($key, 'S') === 0) { // Sponsor booth
    return '⭐';
    }
    // Regular booth, check if available or occupied
    return strpos($booths[$key]['name'], 'Available') !== false ? '📍' : '🏢';
    };
    @endphp

    {{--
        Loop through the `$positions` array to dynamically create each booth overlay.
        Each `.booth` div is absolutely positioned over the `denah.svg` according to the
        `$positions` data. Inside each booth, an `.tooltip-info` is generated, which
        becomes visible on hover (desktop) or tap (mobile).
    --}}
    @foreach ($positions as $key => $pos)
    <div class="booth" style="top: {{ $pos['top'] }}; left: {{ $pos['left'] }}; width: {{ $pos['width'] }}; height: {{ $pos['height'] }};">
        <div class="tooltip-info" style="top: -160px; left: 50%; transform: translateX(-50%);">
            <div class="tooltip-header">
                <div class="tooltip-icon">{{ $getBoothIcon($key) }}</div> {{-- Display dynamic icon --}}
                <h4 class="tooltip-title">{{ $booths[$key]['name'] }}</h4> {{-- Display booth name --}}
            </div>
            <p class="tooltip-description">{{ $booths[$key]['desc'] }}</p> {{-- Display booth description --}}
            <span class="tooltip-status {{ 'status-' . $getBoothStatus($key) }}"> {{-- Display dynamic status badge --}}
                @if($getBoothStatus($key) == 'available')
                Available
                @elseif($getBoothStatus($key) == 'sponsor')
                Sponsor
                @else
                Occupied
                @endif
            </span>
        </div>
    </div>
    @endforeach
</div>

{{--
    JavaScript Section:
    Handles interactive elements like the modal and touch events for tooltips on mobile.
--}}
<script>
    // --- Modal functionality ---
    // Function to close the instruction modal
    function closeModal() {
        const modal = document.getElementById('instructionModal');
        // Apply a slide-out animation before hiding
        modal.style.animation = 'modalSlideOut 0.3s ease-in forwards';
        // After the animation, add the 'hidden' class to completely hide it
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);

        // Show the zoom indicator after a short delay
        setTimeout(() => {
            showZoomIndicator();
        }, 1000);
    }

    // --- Zoom indicator functionality ---
    // Function to show the "Use zoom" indicator
    function showZoomIndicator() {
        const indicator = document.getElementById('zoomIndicator');
        // Remove 'hide' and add 'show' to trigger its appearance animation
        indicator.classList.remove('hide');
        indicator.classList.add('show');

        // Hide the indicator after 5 seconds
        setTimeout(() => {
            indicator.classList.remove('show');
            indicator.classList.add('hide');
        }, 5000);
    }

    // --- Touch support for mobile tooltips ---
    document.addEventListener('DOMContentLoaded', function() {
        const booths = document.querySelectorAll('.booth');

        // Attach touchstart listener to each booth
        booths.forEach(booth => {
            booth.addEventListener('touchstart', function(e) {
                e.preventDefault(); // Prevent default touch behavior (e.g., scrolling)

                // Hide all other tooltips when a new booth is tapped
                booths.forEach(otherBooth => {
                    if (otherBooth !== booth) {
                        const tooltip = otherBooth.querySelector('.tooltip-info');
                        if (tooltip) {
                            tooltip.style.display = 'none'; // Hide tooltip
                        }
                    }
                });

                // Show the tooltip for the currently tapped booth
                const tooltip = booth.querySelector('.tooltip-info');
                if (tooltip) {
                    tooltip.style.display = 'block'; // Show tooltip
                }
            });
        });

        // Hide tooltips when touching outside any booth
        document.addEventListener('touchstart', function(e) {
            // If the touch target is not inside a '.booth' element
            if (!e.target.closest('.booth')) {
                // Hide all tooltips
                booths.forEach(booth => {
                    const tooltip = booth.querySelector('.tooltip-info');
                    if (tooltip) {
                        tooltip.style.display = 'none';
                    }
                });
            }
        });
    });

    // Dynamically inject the modal slide-out animation keyframes into the document head.
    // This ensures the animation is available when `closeModal()` is called.
    const style = document.createElement('style');
    style.textContent = `
        @keyframes modalSlideOut {
            from {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
            to {
                opacity: 0;
                transform: translateY(-30px) scale(0.95);
            }
        }
    `;
    document.head.appendChild(style);
</script>

{{--
    Includes a partial Blade view for a floating register/contact button.
    This component is assumed to be defined in `resources/views/partials/floating-register-contact.blade.php`.
--}}
@include('partials.floating-register-contact')

@endsection