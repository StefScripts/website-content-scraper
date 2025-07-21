<?php
// Set page-specific meta tags
$meta = [
    'title' => 'Page Not Found - 404 Error',
    'description' => 'The page you are looking for could not be found. Please check the URL or return to our homepage.',
    'keywords' => '404 error, page not found'
];

// Set 404 status code
http_response_code(404);

// Include header
include 'includes/header.php';
?>

<!-- 404 Error Page -->
<section class="content-section" style="padding: 4rem 0; text-align: center;">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto;">
            <h1 style="font-size: 6rem; color: var(--color-primary); margin-bottom: 1rem;">404</h1>
            <h2 style="margin-bottom: 1rem;">Page Not Found</h2>
            <p style="font-size: 1.125rem; color: var(--color-text-light); margin-bottom: 2rem;">
                We're sorry, but the page you're looking for doesn't exist. It may have been moved, 
                deleted, or you may have entered the wrong URL.
            </p>
            
            <div style="margin-bottom: 3rem;">
                <a href="/" class="btn btn-primary btn-large" style="margin-right: 1rem;">Go Home</a>
                <a href="/contact-us" class="btn btn-secondary btn-large">Contact Us</a>
            </div>
            
            <div style="background: var(--color-background-alt); padding: 2rem; border-radius: var(--radius-md);">
                <h3 style="color: var(--color-primary); margin-bottom: 1rem;">Looking for help?</h3>
                <p style="margin-bottom: 1rem;">You can also:</p>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 0.5rem;"><a href="/about-us">Learn about Dr. Prisman</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="/services">View our services</a></li>
                    <li style="margin-bottom: 0.5rem;"><a href="/contact-us">Schedule a consultation</a></li>
                    <li><a href="<?php echo formatPhoneLink(PHONE); ?>">Call us at <?php echo PHONE; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>