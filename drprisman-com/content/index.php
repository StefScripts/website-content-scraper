<?php
// Set page-specific meta tags
$meta = [
    'title' => '',
    'description' => 'Dr. Desiree Prisman offers compassionate psychiatric care in Vancouver. Specializing in DBT and CBT therapy with over 20 years of experience helping clients achieve mental wellness.',
    'keywords' => 'psychiatrist vancouver, DBT therapy vancouver, CBT therapy vancouver, mental health vancouver, dr desiree prisman'
];

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Welcome to a Life Worth Living</h1>
            <p class="hero-subtitle">Compassionate psychiatric care and evidence-based therapy in Vancouver</p>
            <div class="hero-buttons">
                <a href="/contact-us.php" class="btn btn-secondary btn-large">Book Your Consultation</a>
                <a href="/services.php" class="btn btn-primary btn-large">Explore Our Services</a>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="content-section">
    <div class="container">
        <div class="text-center" style="max-width: 800px; margin: 0 auto;">
            <h2>Expert Mental Health Care with Dr. Desiree Prisman</h2>
            <p style="font-size: 1.125rem; color: var(--color-text-light);">
                With over 20 years of experience in psychiatry and specialized training from DBT founder Marsha Linehan, 
                Dr. Prisman provides personalized, evidence-based treatment for a wide range of mental health concerns. 
                Her approach combines clinical expertise with genuine compassion to help you build the life you deserve.
            </p>
        </div>
    </div>
</section>

<!-- Why Choose Dr. Prisman Section -->
<section class="content-section" style="background: var(--color-background-alt);">
    <div class="container">
        <h2 class="text-center mb-4">Why Choose Dr. Prisman?</h2>
        <div class="features-grid">
            <div class="card">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <h3>20+ Years of Experience</h3>
                <p>Extensive clinical experience treating complex mental health conditions with proven therapeutic approaches.</p>
            </div>
            
            <div class="card">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <h3>DBT Certified</h3>
                <p>Trained directly with Marsha Linehan, the founder of Dialectical Behavior Therapy, ensuring the highest quality DBT treatment.</p>
            </div>
            
            <div class="card">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3>Compassionate Care</h3>
                <p>A warm, non-judgmental approach that creates a safe space for healing and personal growth.</p>
            </div>
            
            <div class="card">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                        <line x1="9" y1="9" x2="9.01" y2="9"/>
                        <line x1="15" y1="9" x2="15.01" y2="9"/>
                    </svg>
                </div>
                <h3>Evidence-Based Methods</h3>
                <p>Utilizing proven therapeutic techniques including DBT, CBT, and integrated treatment approaches.</p>
            </div>
            
            <div class="card">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3>Individual & Group Options</h3>
                <p>Flexible treatment options including one-on-one therapy, group workshops, and comprehensive assessments.</p>
            </div>
            
            <div class="card">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
                <h3>Holistic Approach</h3>
                <p>Addressing all aspects of mental health to help you build a balanced, fulfilling life.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="content-section">
    <div class="container">
        <h2 class="text-center mb-4">How We Can Help</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; max-width: 900px; margin: 0 auto;">
            <div class="text-center">
                <h3 style="color: var(--color-secondary);">Depression & Anxiety</h3>
                <p>Find relief from persistent sadness, worry, and panic through proven therapeutic techniques.</p>
            </div>
            <div class="text-center">
                <h3 style="color: var(--color-secondary);">Trauma & PTSD</h3>
                <p>Process and heal from traumatic experiences in a safe, supportive environment.</p>
            </div>
            <div class="text-center">
                <h3 style="color: var(--color-secondary);">Relationship Issues</h3>
                <p>Improve communication skills and build healthier, more fulfilling relationships.</p>
            </div>
            <div class="text-center">
                <h3 style="color: var(--color-secondary);">Emotion Regulation</h3>
                <p>Learn skills to manage intense emotions and respond more effectively to life's challenges.</p>
            </div>
            <div class="text-center">
                <h3 style="color: var(--color-secondary);">Life Transitions</h3>
                <p>Navigate major life changes with confidence and develop resilience for the future.</p>
            </div>
            <div class="text-center">
                <h3 style="color: var(--color-secondary);">Self-Harm & Suicidal Thoughts</h3>
                <p>Receive specialized care for self-destructive behaviors and suicidal ideation.</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/services.php" class="btn btn-primary btn-large">View All Services</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="content-section" style="background: var(--color-primary); color: white; text-align: center;">
    <div class="container">
        <h2 style="color: white; margin-bottom: 1rem;">Take the First Step Toward Healing</h2>
        <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">
            You don't have to face your challenges alone. Dr. Prisman is here to support you on your journey to mental wellness.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="/contact-us.php" class="btn btn-secondary btn-large">Schedule a Consultation</a>
            <a href="<?php echo formatPhoneLink(PHONE); ?>" class="btn btn-secondary btn-large">
                Call <?php echo PHONE; ?>
            </a>
        </div>
    </div>
</section>

<!-- Trust Indicators Section -->
<section class="content-section">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-4">Professional Credentials</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; max-width: 800px; margin: 0 auto;">
                <div>
                    <h4 style="color: var(--color-primary);">Licensed Psychiatrist</h4>
                    <p>College of Physicians and Surgeons of British Columbia</p>
                </div>
                <div>
                    <h4 style="color: var(--color-primary);">DBT Training</h4>
                    <p>Certified by Behavioral Tech, LLC (Marsha Linehan)</p>
                </div>
                <div>
                    <h4 style="color: var(--color-primary);">20+ Years Experience</h4>
                    <p>Extensive clinical practice in Vancouver</p>
                </div>
                <div>
                    <h4 style="color: var(--color-primary);">Ongoing Education</h4>
                    <p>Committed to staying current with latest treatments</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>