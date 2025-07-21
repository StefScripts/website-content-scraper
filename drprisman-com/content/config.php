<?php
/**
 * Configuration file for Dr. Prisman's website
 * Contains site-wide settings and constants
 */

// Site Information
define('SITE_NAME', 'Dr. Desiree Prisman - Psychiatrist');
define('SITE_TAGLINE', 'Compassionate Mental Health Care in Vancouver');
define('SITE_URL', 'https://drprisman.com');

// Contact Information
define('PHONE', '604-727-3952');
define('EMAIL', 'prisman@shaw.ca');
define('ADDRESS', '601 West Broadway, Suite 400');
define('CITY', 'Vancouver');
define('PROVINCE', 'BC');
define('POSTAL_CODE', 'V5Z 4C2');
define('FULL_ADDRESS', ADDRESS . ', ' . CITY . ', ' . PROVINCE . ' ' . POSTAL_CODE);

// Business Hours
define('BUSINESS_HOURS', 'Monday - Friday: 9:00 AM - 5:00 PM');

// SEO Defaults
define('DEFAULT_META_DESCRIPTION', 'Dr. Desiree Prisman is an experienced psychiatrist in Vancouver specializing in DBT and CBT therapy. Over 20 years of compassionate mental health care.');
define('DEFAULT_META_KEYWORDS', 'psychiatrist vancouver, DBT therapy, CBT therapy, mental health vancouver, dr prisman, dialectical behavior therapy, cognitive behavioral therapy');

// Social Media (if applicable)
define('LINKEDIN_URL', ''); // Add if available
define('PSYCHOLOGY_TODAY_URL', ''); // Add if available

// Google Analytics (add tracking ID when available)
define('GA_TRACKING_ID', '');

// Development/Production Mode
define('DEV_MODE', false);

// Error reporting
if (DEV_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Timezone
date_default_timezone_set('America/Vancouver');

// Session configuration
session_start();

// Security headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: no-referrer-when-downgrade');

// Character encoding
header('Content-Type: text/html; charset=UTF-8');
?>