<?php
/**
 * Helper functions for Dr. Prisman's website
 */

/**
 * Generate page title with site name
 * @param string $pageTitle - The specific page title
 * @return string - Formatted page title
 */
function getPageTitle($pageTitle = '') {
    if (empty($pageTitle)) {
        return SITE_NAME . ' - ' . SITE_TAGLINE;
    }
    return $pageTitle . ' | ' . SITE_NAME;
}

/**
 * Generate meta description
 * @param string $description - Custom description for the page
 * @return string - Meta description
 */
function getMetaDescription($description = '') {
    return !empty($description) ? $description : DEFAULT_META_DESCRIPTION;
}

/**
 * Output meta tags for SEO
 * @param array $meta - Array containing title, description, keywords, etc.
 */
function outputMetaTags($meta = []) {
    $title = isset($meta['title']) ? getPageTitle($meta['title']) : getPageTitle();
    $description = isset($meta['description']) ? $meta['description'] : DEFAULT_META_DESCRIPTION;
    $keywords = isset($meta['keywords']) ? $meta['keywords'] : DEFAULT_META_KEYWORDS;
    $canonical = isset($meta['canonical']) ? $meta['canonical'] : getCurrentUrl();
    
    echo '<title>' . htmlspecialchars($title) . '</title>' . "\n";
    echo '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
    echo '<meta name="keywords" content="' . htmlspecialchars($keywords) . '">' . "\n";
    echo '<link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . "\n";
    
    // Open Graph tags
    echo '<meta property="og:title" content="' . htmlspecialchars($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . htmlspecialchars($description) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:url" content="' . htmlspecialchars($canonical) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . htmlspecialchars(SITE_NAME) . '">' . "\n";
    
    // Twitter Card tags
    echo '<meta name="twitter:card" content="summary">' . "\n";
    echo '<meta name="twitter:title" content="' . htmlspecialchars($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . htmlspecialchars($description) . '">' . "\n";
}

/**
 * Get current URL
 * @return string - Current page URL
 */
function getCurrentUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];
    return $protocol . '://' . $host . $uri;
}

/**
 * Generate structured data for local business
 * @return string - JSON-LD structured data
 */
function getStructuredData() {
    $data = [
        "@context" => "https://schema.org",
        "@type" => "MedicalBusiness",
        "name" => SITE_NAME,
        "description" => DEFAULT_META_DESCRIPTION,
        "url" => SITE_URL,
        "telephone" => PHONE,
        "email" => EMAIL,
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => ADDRESS,
            "addressLocality" => CITY,
            "addressRegion" => PROVINCE,
            "postalCode" => POSTAL_CODE,
            "addressCountry" => "CA"
        ],
        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => "49.2634",
            "longitude" => "-123.1374"
        ],
        "openingHours" => "Mo-Fr 09:00-17:00",
        "priceRange" => "$$",
        "medicalSpecialty" => [
            "Psychiatry",
            "Mental Health",
            "DBT Therapy",
            "CBT Therapy"
        ],
        "hasCredential" => [
            "@type" => "EducationalOccupationalCredential",
            "credentialCategory" => "Medical License",
            "recognizedBy" => [
                "@type" => "Organization",
                "name" => "College of Physicians and Surgeons of British Columbia"
            ]
        ]
    ];
    
    return '<script type="application/ld+json">' . "\n" . json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n" . '</script>';
}

/**
 * Sanitize form input
 * @param string $data - Input data to sanitize
 * @return string - Sanitized data
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Validate email address
 * @param string $email - Email to validate
 * @return bool - True if valid, false otherwise
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Format phone number for tel: links
 * @param string $phone - Phone number
 * @return string - Formatted phone number
 */
function formatPhoneLink($phone) {
    return 'tel:' . preg_replace('/[^0-9]/', '', $phone);
}

/**
 * Get navigation menu items
 * @return array - Navigation menu structure
 */
function getNavigation() {
    return [
        ['url' => '/', 'text' => 'Home', 'title' => 'Homepage'],
        ['url' => '/about-us.php', 'text' => 'About', 'title' => 'About Dr. Prisman'],
        ['url' => '/services.php', 'text' => 'Services', 'title' => 'Our Services'],
        ['url' => '/contact-us.php', 'text' => 'Contact', 'title' => 'Contact Us']
    ];
}

/**
 * Check if current page matches URL
 * @param string $url - URL to check
 * @return bool - True if current page
 */
function isCurrentPage($url) {
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $currentPath === $url || ($url === '/' && $currentPath === '/index.php');
}

/**
 * Output Google Analytics tracking code
 */
function outputGoogleAnalytics() {
    if (!empty(GA_TRACKING_ID) && !DEV_MODE) {
        echo '<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=' . GA_TRACKING_ID . '"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());
  gtag(\'config\', \'' . GA_TRACKING_ID . '\');
</script>';
    }
}

/**
 * Generate breadcrumb navigation
 * @param array $breadcrumbs - Array of breadcrumb items
 */
function outputBreadcrumbs($breadcrumbs = []) {
    if (empty($breadcrumbs)) {
        return;
    }
    
    echo '<nav aria-label="Breadcrumb" class="breadcrumb">';
    echo '<ol>';
    echo '<li><a href="/">Home</a></li>';
    
    foreach ($breadcrumbs as $index => $item) {
        if ($index === count($breadcrumbs) - 1) {
            echo '<li aria-current="page">' . htmlspecialchars($item['text']) . '</li>';
        } else {
            echo '<li><a href="' . htmlspecialchars($item['url']) . '">' . htmlspecialchars($item['text']) . '</a></li>';
        }
    }
    
    echo '</ol>';
    echo '</nav>';
}
?>