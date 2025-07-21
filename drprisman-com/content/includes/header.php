<?php
// Include required files
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../functions.php';

// Get navigation items
$navigation = getNavigation();
?>
<!DOCTYPE html>
<html lang="en-CA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php 
    // Output meta tags - these can be customized per page
    outputMetaTags(isset($meta) ? $meta : []); 
    ?>
    
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Merriweather:wght@300;400&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    
    <!-- Structured Data -->
    <?php echo getStructuredData(); ?>
    
    <!-- Google Analytics -->
    <?php outputGoogleAnalytics(); ?>
</head>
<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="skip-link">Skip to main content</a>
    
    <!-- Header -->
    <header class="site-header">
        <!-- Top bar with contact info -->
        <div class="header-top">
            <div class="container">
                <div class="header-contact">
                    <a href="<?php echo formatPhoneLink(PHONE); ?>" class="header-phone">
                        <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span><?php echo PHONE; ?></span>
                    </a>
                    <a href="mailto:<?php echo EMAIL; ?>" class="header-email">
                        <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <span><?php echo EMAIL; ?></span>
                    </a>
                    <span class="header-hours">
                        <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <span><?php echo BUSINESS_HOURS; ?></span>
                    </span>
                </div>
            </div>
        </div>
        
        <!-- Main header -->
        <div class="header-main">
            <div class="container">
                <div class="header-content">
                    <!-- Logo/Site name -->
                    <div class="site-branding">
                        <a href="/" class="site-logo">
                            <h1 class="site-title">Dr. Desiree Prisman</h1>
                            <p class="site-tagline">Psychiatrist &amp; DBT Specialist</p>
                        </a>
                    </div>
                    
                    <!-- Navigation -->
                    <nav class="main-navigation" aria-label="Main navigation">
                        <!-- Mobile menu button -->
                        <button class="menu-toggle" aria-label="Menu" aria-expanded="false">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        
                        <!-- Navigation menu -->
                        <ul class="nav-menu">
                            <?php foreach ($navigation as $item): ?>
                                <li class="nav-item<?php echo isCurrentPage($item['url']) ? ' current' : ''; ?>">
                                    <a href="<?php echo htmlspecialchars($item['url']); ?>" 
                                       title="<?php echo htmlspecialchars($item['title']); ?>">
                                        <?php echo htmlspecialchars($item['text']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            <li class="nav-item nav-cta">
                                <a href="/contact-us.php" class="btn btn-primary">Book Consultation</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Main content wrapper -->
    <main id="main-content" class="site-main">