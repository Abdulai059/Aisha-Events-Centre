<?php

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Redirect old URLs to clean URLs
$redirects = [
    '/pages/about/mission-vision.php' => '/about/mission-vision',
    '/pages/about/company-overview.php' => '/about/company-overview',
    '/pages/about/our-team.php' => '/about/our-team',
    '/pages/about/our-partners.php' => '/about/our-partners',
    '/pages/about/why-choose-us.php' => '/about/why-choose-us',
    '/pages/facilities/index.php' => '/facilities',
    '/pages/gallery/index.php' => '/gallery',
    '/pages/services/property-development.php' => '/services/property-development',
    '/pages/services/property-management.php' => '/services/property-management',
    '/contact.php' => '/contact',
];

if (isset($redirects[$request])) {
    header('Location: ' . $redirects[$request], true, 302);
    exit;
}

// Clean URL routes
$routes = [
    '/' => 'index.php',
    '/about/mission-vision' => 'pages/about/mission-vision.php',
    '/about/company-overview' => 'pages/about/company-overview.php',
    '/about/our-team' => 'pages/about/our-team.php',
    '/about/our-partners' => 'pages/about/our-partners.php',
    '/about/why-choose-us' => 'pages/about/why-choose-us.php',
    '/facilities' => 'pages/facilities/index.php',
    '/gallery' => 'pages/gallery/index.php',
    '/services/property-development' => 'pages/services/property-development.php',
    '/services/property-management' => 'pages/services/property-management.php',
    '/booking' => 'pages/booking/booking.php',
    '/contact' => 'contact.php',
];

if (isset($routes[$request])) {
    require __DIR__ . '/' . $routes[$request];
    exit;
}

// Allow existing assets and files to load normally
$file = __DIR__ . $request;

if ($request !== '/' && is_file($file)) {
    return false;
}

http_response_code(404);
echo 'Page not found.';
