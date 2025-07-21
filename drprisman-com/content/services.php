<?php
// Set page-specific meta tags
$meta = [
    'title' => 'Services - Psychiatric Care & Therapy',
    'description' => 'Dr. Prisman offers comprehensive mental health services including DBT therapy, CBT, individual counseling, psychiatric assessments, and group workshops in Vancouver.',
    'keywords' => 'DBT therapy vancouver, CBT therapy vancouver, psychiatric assessment vancouver, individual therapy vancouver, group therapy vancouver, mental health services'
];

// Include header
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Our Services</h1>
        <p class="page-subtitle">Comprehensive mental health care tailored to your unique needs</p>
    </div>
</section>

<!-- Services Overview -->
<section class="content-section">
    <div class="container">
        <div class="text-center" style="max-width: 800px; margin: 0 auto;">
            <h2>Evidence-Based Treatment Options</h2>
            <p style="font-size: 1.125rem; color: var(--color-text-light);">
                Dr. Prisman offers a comprehensive range of mental health services designed to meet you where you are 
                in your journey. Each treatment approach is carefully selected based on the latest research and your 
                individual needs and goals.
            </p>
        </div>
    </div>
</section>

<!-- Individual Therapy Section -->
<section id="individual-therapy" class="content-section" style="background: var(--color-background-alt);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 3rem; align-items: center; max-width: 1000px; margin: 0 auto;">
            <div>
                <h2>Individual Therapy</h2>
                <p style="font-size: 1.125rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    One-on-one sessions provide a safe, confidential space to explore your thoughts, feelings, and 
                    behaviors. Together, we'll work to understand the root causes of your challenges and develop 
                    practical skills to create lasting change.
                </p>
                
                <h3 style="color: var(--color-primary); margin-bottom: 1rem;">What to Expect:</h3>
                <ul style="line-height: 1.7;">
                    <li>Personalized treatment plan based on your specific needs</li>
                    <li>A collaborative, non-judgmental therapeutic relationship</li>
                    <li>Evidence-based techniques and interventions</li>
                    <li>Skills training for managing emotions and relationships</li>
                    <li>Regular progress monitoring and plan adjustments</li>
                </ul>
                
                <div style="margin-top: 2rem;">
                    <strong>Session Length:</strong> 50 minutes<br>
                    <strong>Frequency:</strong> Weekly or bi-weekly (as appropriate)
                </div>
            </div>
            
            <div>
                <div class="card">
                    <h4 style="color: var(--color-secondary); margin-bottom: 1rem;">Common Issues Addressed:</h4>
                    <ul style="margin: 0; padding-left: 1.5rem;">
                        <li>Depression and mood disorders</li>
                        <li>Anxiety and panic disorders</li>
                        <li>Trauma and PTSD</li>
                        <li>Relationship difficulties</li>
                        <li>Emotional dysregulation</li>
                        <li>Self-harm behaviors</li>
                        <li>Suicidal thoughts</li>
                        <li>Life transitions</li>
                        <li>Grief and loss</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DBT Therapy Section -->
<section id="dbt-therapy" class="content-section">
    <div class="container">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div class="text-center mb-4">
                <h2>Dialectical Behavior Therapy (DBT)</h2>
                <p style="font-size: 1.125rem; color: var(--color-text-light);">
                    Specialized treatment for individuals struggling with intense emotions and self-destructive behaviors
                </p>
            </div>
            
            <div class="card" style="margin-bottom: 3rem;">
                <h3 style="color: var(--color-primary); margin-bottom: 1rem;">About DBT</h3>
                <p style="font-size: 1.125rem; line-height: 1.7;">
                    DBT is a highly effective form of therapy originally developed by Dr. Marsha Linehan for individuals 
                    with borderline personality disorder. It has since been proven effective for a wide range of mental 
                    health conditions involving emotional dysregulation.
                </p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div class="card">
                    <div class="feature-icon" style="background: var(--color-secondary); color: white; margin-bottom: 1rem;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M8 12l2 2 4-4"/>
                        </svg>
                    </div>
                    <h4>Mindfulness Skills</h4>
                    <p>Learn to observe and describe your experiences without judgment, stay present in the moment, and participate fully in life.</p>
                </div>
                
                <div class="card">
                    <div class="feature-icon" style="background: var(--color-secondary); color: white; margin-bottom: 1rem;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z"/>
                        </svg>
                    </div>
                    <h4>Distress Tolerance</h4>
                    <p>Develop skills to survive crisis situations without making them worse through impulsive or harmful actions.</p>
                </div>
                
                <div class="card">
                    <div class="feature-icon" style="background: var(--color-secondary); color: white; margin-bottom: 1rem;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    </div>
                    <h4>Emotion Regulation</h4>
                    <p>Understand your emotions, reduce emotional vulnerability, and change unwanted emotional responses.</p>
                </div>
                
                <div class="card">
                    <div class="feature-icon" style="background: var(--color-secondary); color: white; margin-bottom: 1rem;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h4>Interpersonal Effectiveness</h4>
                    <p>Build skills to ask for what you need, say no effectively, and maintain self-respect in relationships.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CBT Therapy Section -->
<section id="cbt-therapy" class="content-section" style="background: var(--color-background-alt);">
    <div class="container">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 3rem; align-items: center;">
                <div>
                    <div class="card">
                        <h4 style="color: var(--color-secondary); margin-bottom: 1rem;">CBT is Effective For:</h4>
                        <ul style="margin: 0; padding-left: 1.5rem; line-height: 1.7;">
                            <li>Depression</li>
                            <li>Anxiety disorders</li>
                            <li>Panic disorder</li>
                            <li>Social anxiety</li>
                            <li>Phobias</li>
                            <li>OCD</li>
                            <li>PTSD</li>
                            <li>Eating disorders</li>
                            <li>Sleep disorders</li>
                        </ul>
                    </div>
                </div>
                
                <div>
                    <h2>Cognitive Behavioral Therapy (CBT)</h2>
                    <p style="font-size: 1.125rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        CBT is a practical, goal-oriented therapy that focuses on identifying and changing negative 
                        thought patterns and behaviors that contribute to emotional distress. It's one of the most 
                        extensively researched and proven effective treatments for many mental health conditions.
                    </p>
                    
                    <h3 style="color: var(--color-primary); margin-bottom: 1rem;">How CBT Works:</h3>
                    <ul style="line-height: 1.7;">
                        <li>Identify patterns of negative thinking</li>
                        <li>Challenge and reframe unhelpful thoughts</li>
                        <li>Develop healthier behavioral responses</li>
                        <li>Practice new skills between sessions</li>
                        <li>Monitor progress and adjust strategies</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Psychiatric Assessments Section -->
<section id="assessments" class="content-section">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            <h2 class="text-center mb-4">Psychiatric Assessments</h2>
            
            <div class="card" style="margin-bottom: 2rem;">
                <p style="font-size: 1.125rem; line-height: 1.7; margin-bottom: 1.5rem;">
                    Comprehensive psychiatric evaluations to understand your mental health concerns and develop 
                    an appropriate treatment plan. These thorough assessments provide valuable insights into 
                    your condition and guide evidence-based treatment decisions.
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    <div>
                        <h4 style="color: var(--color-primary);">Initial Assessment</h4>
                        <ul style="line-height: 1.7;">
                            <li>Detailed mental health history</li>
                            <li>Current symptoms evaluation</li>
                            <li>Medical and family history review</li>
                            <li>Risk assessment</li>
                            <li>Treatment recommendations</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 style="color: var(--color-primary);">Specialized Assessments</h4>
                        <ul style="line-height: 1.7;">
                            <li>Personality disorder evaluations</li>
                            <li>Trauma and PTSD assessments</li>
                            <li>Mood disorder evaluations</li>
                            <li>Anxiety disorder assessments</li>
                            <li>Capacity assessments</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div style="background: var(--color-accent); padding: 2rem; border-radius: var(--radius-md);">
                <h4 style="color: var(--color-primary); margin-bottom: 1rem;">Assessment Process</h4>
                <p><strong>Duration:</strong> 60-90 minutes</p>
                <p><strong>Follow-up:</strong> Detailed written report provided</p>
                <p style="margin-bottom: 0;"><strong>Next Steps:</strong> Treatment plan discussion and referrals if needed</p>
            </div>
        </div>
    </div>
</section>

<!-- Workshops and Groups Section -->
<section id="workshops" class="content-section" style="background: var(--color-background-alt);">
    <div class="container">
        <div style="max-width: 1000px; margin: 0 auto;">
            <h2 class="text-center mb-4">Workshops & Group Programs</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="card">
                    <h3 style="color: var(--color-secondary);">DBT Skills Groups</h3>
                    <p>Structured group sessions focusing on the four core DBT skill modules. Learn alongside others facing similar challenges in a supportive environment.</p>
                    <ul style="margin-top: 1rem;">
                        <li>8-12 week programs</li>
                        <li>Small group setting (6-8 participants)</li>
                        <li>Weekly 2-hour sessions</li>
                        <li>Homework and practice exercises</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3 style="color: var(--color-secondary);">Mindfulness Workshops</h3>
                    <p>Learn practical mindfulness techniques that can be integrated into daily life to reduce stress and increase emotional awareness.</p>
                    <ul style="margin-top: 1rem;">
                        <li>Weekend intensive workshops</li>
                        <li>Introduction to mindfulness meditation</li>
                        <li>Mindful movement and breathing</li>
                        <li>Take-home practice materials</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h3 style="color: var(--color-secondary);">Coping Skills Seminars</h3>
                    <p>Educational seminars covering specific mental health topics and practical coping strategies for common challenges.</p>
                    <ul style="margin-top: 1rem;">
                        <li>Managing anxiety and panic</li>
                        <li>Depression and mood management</li>
                        <li>Healthy relationship skills</li>
                        <li>Stress management techniques</li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <p style="font-style: italic; color: var(--color-text-light);">
                    Group schedules vary throughout the year. Contact us for current availability and upcoming dates.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing and Insurance Section -->
<section class="content-section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2 class="text-center mb-4">Investment in Your Mental Health</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div class="card">
                    <h4 style="color: var(--color-primary);">Individual Sessions</h4>
                    <p>Professional fees are in line with standard psychiatric practice rates in Vancouver. Payment is expected at time of service.</p>
                </div>
                
                <div class="card">
                    <h4 style="color: var(--color-primary);">Insurance Coverage</h4>
                    <p>Many extended health plans cover psychiatric services. We can provide receipts for insurance submission.</p>
                </div>
                
                <div class="card">
                    <h4 style="color: var(--color-primary);">Group Programs</h4>
                    <p>Group workshops and DBT skills groups are offered at reduced rates compared to individual sessions.</p>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <p style="font-size: 1.125rem; color: var(--color-text-light);">
                    For specific fee information and insurance questions, please contact our office directly.
                </p>
                <a href="/contact-us.php" class="btn btn-primary btn-large" style="margin-top: 1rem;">Get Fee Information</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="content-section" style="background: var(--color-primary); color: white; text-align: center;">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto;">
            <h2 style="color: white; margin-bottom: 1rem;">Ready to Begin Your Healing Journey?</h2>
            <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">
                Take the first step toward better mental health. Contact us today to discuss which services 
                might be right for you.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="/contact-us.php" class="btn btn-secondary btn-large">Schedule Consultation</a>
                <a href="<?php echo formatPhoneLink(PHONE); ?>" class="btn btn-secondary btn-large">
                    Call <?php echo PHONE; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>