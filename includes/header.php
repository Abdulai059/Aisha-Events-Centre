
<!-- header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aisha Events Centre | Events, Dining & Hospitality in Tamale</title>

  <link rel="icon" href="https://res.cloudinary.com/ltect-homes/image/upload/v1795085667/logoa_ieut7g.jpg" type="image/jpeg" />

  <!-- Bootstrap CSS Stylesheet -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />

  <!-- AOS Animation Stylesheet -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

  <!-- Component CSS Stylesheets -->
  <link rel="stylesheet" href="/assets/css/root.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="stylesheet" href="/assets/css/navbar.css" />
  <link rel="stylesheet" href="/assets/css/pages/why-choose-us.css">
  <link rel="stylesheet" href="/assets/css/pages/team.css">
  <link rel="stylesheet" href="/assets/css/pages/mission-team.css">
  <link rel="stylesheet" href="/assets/css/pages/property-management.css">
  <link rel="stylesheet" href="/assets/css/pages/career.css">
  <link rel="stylesheet" href="/assets/css/pages/facilities.css">
  <link rel="stylesheet" href="/assets/css/pages/facilty-management.css">
  <link rel="stylesheet" href="/assets/css/pages/testimonial.css">
  <link rel="stylesheet" href="/assets/css/pages/our-partners.css">
  <link rel="stylesheet" href="/assets/css/pages/gallery.css">
  <link rel="stylesheet" href="/assets/css/pages/home.css">
  <link rel="stylesheet" href="/assets/css/pages/enquiry-cta.css">
  <link rel="stylesheet" href="/assets/css/components/hero.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body>

<?php
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$isHome = $currentPath === '/' || $currentPath === '/index.php';

function navActive($paths, $currentPath) {
    return in_array($currentPath, (array) $paths, true) ? 'active' : '';
}
?>

<nav class="navbar <?php echo $isHome ? 'navbar-home' : 'navbar-inner'; ?>" id="siteNavbar">
  <div class="nav-container">

    <!-- BRAND -->
<a href="/" class="logo" aria-label="Aisha Events Centre Home">
  <img
    src="https://res.cloudinary.com/ltect-homes/image/upload/v1795085667/logoa_ieut7g.jpg"
    alt="Aisha Events Centre Logo"
    class="brand-logo"
  >

  <span class="brand-text">
    <strong>AISHA</strong>
    <small>EVENTS CENTRE</small>
  </span>
</a>

    <!-- MOBILE OVERLAY -->
    <div class="menu-overlay" id="menuOverlay"></div>

    <!-- NAVIGATION -->
    <ul class="nav-menu" id="navMenu">

      <li class="nav-item">
        <a href="/"
           class="nav-link <?php echo navActive(['/index.php', '/'], $currentPath); ?>">
          Home
        </a>
      </li>

      <!-- ABOUT -->
      <li class="nav-item dropdown">
        <button class="nav-link dropdown-toggle" type="button" aria-expanded="false">
          About Us
        </button>

        <div class="dropdown-content">
          <a href="/about/mission-vision" class="dropdown-item">
            Our Story
          </a>
          <a href="/about/company-overview" class="dropdown-item">
            About Aisha
          </a>
        </div>
      </li>

      <!-- FACILITIES -->
      <li class="nav-item dropdown">
        <button class="nav-link dropdown-toggle" type="button" aria-expanded="false">
          Our Spaces
        </button>

        <div class="dropdown-content">
          <a href="/facilities" class="dropdown-item">
            Explore Our Spaces
          </a>
        </div>
      </li>

      <!-- SERVICES -->
      <li class="nav-item">
        <a href="/contact"
           class="nav-link <?php echo navActive('/contact', $currentPath); ?>">
          Our Services
        </a>
      </li>

      <!-- GALLERY -->
      <li class="nav-item">
        <a href="/gallery"
           class="nav-link <?php echo navActive('/gallery', $currentPath); ?>">
          Gallery
        </a>
      </li>

      <!-- CONTACT -->
      <li class="nav-item">
        <a href="/contact"
           class="nav-link <?php echo navActive('/contact', $currentPath); ?>">
          Contact Us
        </a>
      </li>

      <!-- MOBILE ENQUIRY BUTTON -->
      <li class="mobile-enquiry-item">
        <a href="/contact#contact-enquiryForm" class="mobile-enquiry-btn">
          Make an Enquiry <span>↗</span>
        </a>
      </li>

    </ul>

    <!-- DESKTOP CTA + MOBILE TOGGLE -->
    <div class="nav-actions">

      <a href="/booking" class="nav-enquiry-btn">
     Make a Booking
        <span>↗</span>
      </a>
    

      <button
        class="mobile-menu-toggle"
        id="mobileToggle"
        type="button"
        aria-label="Open navigation menu"
        aria-expanded="false"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>

  </div>
</nav>
