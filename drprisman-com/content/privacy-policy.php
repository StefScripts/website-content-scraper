<?php
// Set page-specific meta tags
$meta = [
    'title' => 'Privacy Policy',
    'description' => 'Dr. Prisman\'s privacy policy outlines how we collect, use, and protect your personal health information in accordance with Canadian privacy laws.',
    'keywords' => 'privacy policy, personal health information, confidentiality, PIPEDA'
];

// Include header
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Privacy Policy</h1>
        <p class="page-subtitle">Your privacy and confidentiality are our top priorities</p>
    </div>
</section>

<!-- Privacy Policy Content -->
<section class="content-section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <p style="font-size: 1.125rem; color: var(--color-text-light); margin-bottom: 2rem;">
                <strong>Effective Date:</strong> <?php echo date('F j, Y'); ?>
            </p>
            
            <div class="card" style="margin-bottom: 2rem;">
                <h2>Our Commitment to Your Privacy</h2>
                <p>
                    Dr. Desiree Prisman is committed to protecting your privacy and maintaining the confidentiality 
                    of your personal health information. This Privacy Policy explains how we collect, use, disclose, 
                    and safeguard your information when you visit our website or receive our services.
                </p>
            </div>
            
            <div class="card" style="margin-bottom: 2rem;">
                <h3>Information We Collect</h3>
                
                <h4 style="color: var(--color-primary); margin-top: 1.5rem;">Personal Health Information</h4>
                <p>When you become a client, we collect and maintain personal health information including:</p>
                <ul>
                    <li>Contact information (name, address, phone, email)</li>
                    <li>Health card information</li>
                    <li>Medical history and current health status</li>
                    <li>Mental health assessment information</li>
                    <li>Treatment notes and progress records</li>
                    <li>Insurance and billing information</li>
                </ul>
                
                <h4 style="color: var(--color-primary); margin-top: 1.5rem;">Website Information</h4>
                <p>When you visit our website, we may collect:</p>
                <ul>
                    <li>Information you provide through contact forms</li>
                    <li>Basic website analytics (anonymized)</li>
                    <li>Cookies for website functionality</li>
                </ul>
            </div>
            
            <div class="card" style="margin-bottom: 2rem;">
                <h3>How We Use Your Information</h3>
                <p>We use your personal health information for:</p>
                <ul>
                    <li><strong>Treatment:</strong> Providing psychiatric care and therapy services</li>
                    <li><strong>Communication:</strong> Scheduling appointments and treatment coordination</li>
                    <li><strong>Billing:</strong> Processing payments and insurance claims</li>
                    <li><strong>Legal Requirements:</strong> Complying with professional and legal obligations</li>
                    <li><strong>Safety:</strong> Protecting your safety or the safety of others when required by law</li>
                </ul>
            </div>
            
            <div class="card" style="margin-bottom: 2rem;">
                <h3>Information Sharing and Disclosure</h3>
                <p>We maintain strict confidentiality and only share your information:</p>
                <ul>
                    <li><strong>With Your Consent:</strong> When you provide written authorization</li>
                    <li><strong>For Treatment:</strong> With other healthcare providers involved in your care</li>
                    <li><strong>Legal Requirements:</strong> When required by law or court order</li>
                    <li><strong>Safety Concerns:</strong> To prevent serious harm to you or others</li>
                    <li><strong>Professional Consultation:</strong> Anonymous consultation with colleagues for clinical purposes</li>
                </ul>
                
                <p style="margin-top: 1rem;">
                    <strong>We never share your information for marketing purposes or with unauthorized third parties.</strong>
                </p>
            </div>
            
            <div class="card" style="margin-bottom: 2rem;">
                <h3>Data Security</h3>
                <p>We implement appropriate security measures to protect your information:</p>
                <ul>
                    <li>Secure, encrypted storage of electronic records</li>
                    <li>Limited access to authorized personnel only</li>
                    <li>Regular security assessments and updates</li>
                    <li>Secure disposal of records when no longer needed</li>
                    <li>Professional training on privacy and confidentiality</li>
                </ul>
            </div>
            
            <div class="card" style="margin-bottom: 2rem;">
                <h3>Your Rights</h3>
                <p>Under Canadian privacy legislation, you have the right to:</p>
                <ul>
                    <li><strong>Access:</strong> Request access to your personal health information</li>
                    <li><strong>Correction:</strong> Request correction of inaccurate information</li>
                    <li><strong>Complaint:</strong> File a complaint about privacy practices</li>
                    <li><strong>Withdrawal:</strong> Withdraw consent for certain uses (where applicable)</li>
                </ul>
                
                <p style="margin-top: 1rem;">
                    To exercise these rights or if you have questions about your privacy, 
                    please contact our office at <a href="<?php echo formatPhoneLink(PHONE); ?>"><?php echo PHONE; ?></a> 
                    or <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a>.
                </p>
            </div>
            
            <div class="card" style="margin-bottom: 2rem;">
                <h3>Record Retention</h3>
                <p>
                    We retain your health records for a minimum of 10 years after your last appointment, 
                    or as required by professional regulations and applicable laws. Records may be retained 
                    longer if clinically appropriate or legally required.
                </p>
            </div>
            
            <div class="card" style="margin-bottom: 2rem;">
                <h3>Website Privacy</h3>
                
                <h4 style="color: var(--color-primary);">Contact Forms</h4>
                <p>
                    Information submitted through our contact forms is used solely to respond to your 
                    inquiry and is not shared with third parties.
                </p>
                
                <h4 style="color: var(--color-primary);">Analytics</h4>
                <p>
                    We may use anonymized website analytics to improve our services. No personal 
                    information is collected through these tools.
                </p>
                
                <h4 style="color: var(--color-primary);">Cookies</h4>
                <p>
                    Our website uses essential cookies for functionality. We do not use tracking 
                    cookies or share data with advertising networks.
                </p>
            </div>
            
            <div class="card" style="margin-bottom: 2rem;">
                <h3>Changes to This Policy</h3>
                <p>
                    We may update this Privacy Policy periodically. Any changes will be posted on 
                    this page with an updated effective date. We encourage you to review this policy 
                    regularly.
                </p>
            </div>
            
            <div class="card" style="background: var(--color-accent);">
                <h3>Contact Information</h3>
                <p>
                    If you have questions about this Privacy Policy or our privacy practices, 
                    please contact us:
                </p>
                <div style="margin-top: 1rem;">
                    <p><strong>Dr. Desiree Prisman</strong></p>
                    <p><?php echo FULL_ADDRESS; ?></p>
                    <p>Phone: <a href="<?php echo formatPhoneLink(PHONE); ?>"><?php echo PHONE; ?></a></p>
                    <p>Email: <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>