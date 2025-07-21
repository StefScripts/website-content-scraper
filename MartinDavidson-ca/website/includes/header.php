<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dr. Martin Davidson - Psychotherapy for Children, Youth, Adults, and Families in Vancouver. 15 years specializing in youth mental health with a warm, authentic approach.">
    <meta name="keywords" content="psychologist vancouver, child therapy, youth therapy, family therapy, depression, anxiety, Martin Davidson">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>Dr. Martin Davidson - Vancouver Psychologist</title>
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=Merriweather:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>
    <header class="main-header">
        <div class="header-content">
            <div class="logo-section">
                <a href="index.php" class="logo">
                    <h1>Dr. Martin Davidson</h1>
                    <p class="tagline">Psychotherapy for Children, Youth, Adults, and Families</p>
                </a>
            </div>
            
            <nav class="main-nav" id="mainNav">
                <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
                <ul class="nav-list">
                    <li><a href="index.php" <?php echo ($current_page == 'index') ? 'class="active"' : ''; ?>>About Martin</a></li>
                    <li><a href="bio.php" <?php echo ($current_page == 'bio') ? 'class="active"' : ''; ?>>Bio</a></li>
                    <li><a href="what-is-therapy.php" <?php echo ($current_page == 'what-is-therapy') ? 'class="active"' : ''; ?>>What is Therapy?</a></li>
                    <li><a href="how-i-work.php" <?php echo ($current_page == 'how-i-work') ? 'class="active"' : ''; ?>>How I Work</a></li>
                    <li><a href="contact.php" <?php echo ($current_page == 'contact') ? 'class="active"' : ''; ?>>Contact & Booking</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="header-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
                <path d="M0,20 C200,60 400,10 600,30 C800,50 1000,20 1200,40 C1400,60 1440,30 1440,30 L1440,100 L0,100 Z" fill="currentColor"></path>
            </svg>
        </div>
    </header>
    
    <main class="main-content" id="main-content">