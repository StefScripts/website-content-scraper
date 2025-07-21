<?php
// Set page-specific meta tags
$meta = [
    'title' => 'Contact Dr. Prisman',
    'description' => 'Contact Dr. Desiree Prisman to schedule a consultation. Located at 601 West Broadway, Vancouver. Call 604-727-3952 or email prisman@shaw.ca.',
    'keywords' => 'contact dr prisman, book consultation vancouver, psychiatrist appointment vancouver, 601 west broadway vancouver'
];

// Initialize variables for form handling
$formSubmitted = false;
$formErrors = [];
$formData = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'preferred_contact' => 'email',
    'appointment_type' => '',
    'message' => ''
];

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $formData['name'] = sanitizeInput($_POST['name'] ?? '');
    $formData['email'] = sanitizeInput($_POST['email'] ?? '');
    $formData['phone'] = sanitizeInput($_POST['phone'] ?? '');
    $formData['preferred_contact'] = sanitizeInput($_POST['preferred_contact'] ?? 'email');
    $formData['appointment_type'] = sanitizeInput($_POST['appointment_type'] ?? '');
    $formData['message'] = sanitizeInput($_POST['message'] ?? '');
    
    // Validation
    if (empty($formData['name'])) {
        $formErrors['name'] = 'Name is required';
    }
    
    if (empty($formData['email'])) {
        $formErrors['email'] = 'Email is required';
    } elseif (!validateEmail($formData['email'])) {
        $formErrors['email'] = 'Please enter a valid email address';
    }
    
    if (empty($formData['message'])) {
        $formErrors['message'] = 'Message is required';
    }
    
    // If no errors, process the form (in a real implementation, you'd send email or save to database)
    if (empty($formErrors)) {
        $formSubmitted = true;
        // Reset form data after successful submission
        $formData = [
            'name' => '',
            'email' => '',
            'phone' => '',
            'preferred_contact' => 'email',
            'appointment_type' => '',
            'message' => ''
        ];
    }
}

// Include header
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Contact Dr. Prisman</h1>
        <p class="page-subtitle">Take the first step toward better mental health</p>
    </div>
</section>

<?php if ($formSubmitted): ?>
<!-- Success Message -->
<section class="content-section">
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto; background: var(--color-success); color: white; text-align: center;">
            <h2 style="color: white; margin-bottom: 1rem;">Thank You!</h2>
            <p style="font-size: 1.125rem;">
                Your message has been received. Dr. Prisman's office will contact you within 1-2 business days 
                to discuss your needs and schedule an appointment.
            </p>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Contact Information Section -->
<section class="content-section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem; max-width: 1000px; margin: 0 auto;">
            <!-- Contact Details -->
            <div>
                <h2>Get in Touch</h2>
                <p style="font-size: 1.125rem; color: var(--color-text-light); margin-bottom: 2rem;">
                    Ready to begin your journey toward better mental health? We're here to help you take that important first step.
                </p>
                
                <div class="contact-info">
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem; align-items: flex-start;">
                        <div style="background: var(--color-accent); padding: 0.75rem; border-radius: var(--radius-md); flex-shrink: 0;">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem; color: var(--color-primary);">Phone</h4>
                            <p style="font-size: 1.25rem; font-weight: 600; margin: 0;">
                                <a href="<?php echo formatPhoneLink(PHONE); ?>" style="color: var(--color-text);"><?php echo PHONE; ?></a>
                            </p>
                            <p style="font-size: 0.875rem; color: var(--color-text-light); margin: 0;">Call for appointments</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem; align-items: flex-start;">
                        <div style="background: var(--color-accent); padding: 0.75rem; border-radius: var(--radius-md); flex-shrink: 0;">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem; color: var(--color-primary);">Email</h4>
                            <p style="font-size: 1.25rem; font-weight: 600; margin: 0;">
                                <a href="mailto:<?php echo EMAIL; ?>" style="color: var(--color-text);"><?php echo EMAIL; ?></a>
                            </p>
                            <p style="font-size: 0.875rem; color: var(--color-text-light); margin: 0;">General inquiries</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem; align-items: flex-start;">
                        <div style="background: var(--color-accent); padding: 0.75rem; border-radius: var(--radius-md); flex-shrink: 0;">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem; color: var(--color-primary);">Office Address</h4>
                            <address style="font-style: normal; line-height: 1.6;">
                                <?php echo ADDRESS; ?><br>
                                <?php echo CITY; ?>, <?php echo PROVINCE; ?> <?php echo POSTAL_CODE; ?>
                            </address>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="background: var(--color-accent); padding: 0.75rem; border-radius: var(--radius-md); flex-shrink: 0;">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem; color: var(--color-primary);">Office Hours</h4>
                            <p style="margin: 0;"><?php echo BUSINESS_HOURS; ?></p>
                            <p style="font-size: 0.875rem; color: var(--color-text-light); margin: 0;">By appointment only</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div>
                <div class="card">
                    <h3 style="margin-bottom: 1.5rem;">Send Us a Message</h3>
                    
                    <form method="POST" action="" novalidate>
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($formData['name']); ?>" required>
                            <?php if (isset($formErrors['name'])): ?>
                                <span class="form-error"><?php echo $formErrors['name']; ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($formData['email']); ?>" required>
                            <?php if (isset($formErrors['email'])): ?>
                                <span class="form-error"><?php echo $formErrors['email']; ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control" value="<?php echo htmlspecialchars($formData['phone']); ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="preferred_contact" class="form-label">Preferred Contact Method</label>
                            <select id="preferred_contact" name="preferred_contact" class="form-control">
                                <option value="email" <?php echo $formData['preferred_contact'] === 'email' ? 'selected' : ''; ?>>Email</option>
                                <option value="phone" <?php echo $formData['preferred_contact'] === 'phone' ? 'selected' : ''; ?>>Phone</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="appointment_type" class="form-label">Type of Appointment</label>
                            <select id="appointment_type" name="appointment_type" class="form-control">
                                <option value="">Please select...</option>
                                <option value="initial_consultation" <?php echo $formData['appointment_type'] === 'initial_consultation' ? 'selected' : ''; ?>>Initial Consultation</option>
                                <option value="individual_therapy" <?php echo $formData['appointment_type'] === 'individual_therapy' ? 'selected' : ''; ?>>Individual Therapy</option>
                                <option value="dbt_therapy" <?php echo $formData['appointment_type'] === 'dbt_therapy' ? 'selected' : ''; ?>>DBT Therapy</option>
                                <option value="psychiatric_assessment" <?php echo $formData['appointment_type'] === 'psychiatric_assessment' ? 'selected' : ''; ?>>Psychiatric Assessment</option>
                                <option value="group_program" <?php echo $formData['appointment_type'] === 'group_program' ? 'selected' : ''; ?>>Group Program</option>
                                <option value="other" <?php echo $formData['appointment_type'] === 'other' ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Please briefly describe what brings you here and any questions you may have..." required><?php echo htmlspecialchars($formData['message']); ?></textarea>
                            <?php if (isset($formErrors['message'])): ?>
                                <span class="form-error"><?php echo $formErrors['message']; ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Send Message</button>
                        
                        <p style="font-size: 0.875rem; color: var(--color-text-light); margin-top: 1rem; text-align: center;">
                            * Required fields. We'll respond within 1-2 business days.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Important Information Section -->
<section class="content-section" style="background: var(--color-background-alt);">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2 class="text-center mb-4">Before Your First Visit</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div class="card">
                    <h4 style="color: var(--color-secondary);">What to Expect</h4>
                    <ul style="margin: 0; padding-left: 1.5rem; line-height: 1.7;">
                        <li>Initial consultation (60-90 minutes)</li>
                        <li>Comprehensive assessment</li>
                        <li>Discussion of treatment options</li>
                        <li>Collaborative treatment planning</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h4 style="color: var(--color-secondary);">What to Bring</h4>
                    <ul style="margin: 0; padding-left: 1.5rem; line-height: 1.7;">
                        <li>Valid government-issued ID</li>
                        <li>Insurance information</li>
                        <li>List of current medications</li>
                        <li>Previous medical records (if available)</li>
                    </ul>
                </div>
                
                <div class="card">
                    <h4 style="color: var(--color-secondary);">Insurance & Payment</h4>
                    <ul style="margin: 0; padding-left: 1.5rem; line-height: 1.7;">
                        <li>Payment due at time of service</li>
                        <li>Receipts provided for insurance</li>
                        <li>Extended health coverage available</li>
                        <li>Payment plans can be discussed</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Information Section -->
<section class="content-section" style="background: var(--color-error); color: white;">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto; text-align: center;">
            <h2 style="color: white; margin-bottom: 1rem;">Crisis Support</h2>
            <p style="font-size: 1.125rem; margin-bottom: 2rem;">
                If you're experiencing a mental health emergency or having thoughts of suicide, please reach out for immediate help.
            </p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                <div>
                    <h4 style="color: white;">Emergency Services</h4>
                    <p style="font-size: 1.25rem; font-weight: 600;">Call 911</p>
                </div>
                
                <div>
                    <h4 style="color: white;">Crisis Line Vancouver</h4>
                    <p style="font-size: 1.25rem; font-weight: 600;">1-800-SUICIDE<br>(1-800-784-2433)</p>
                </div>
                
                <div>
                    <h4 style="color: white;">VGH Emergency</h4>
                    <p style="font-size: 1.25rem; font-weight: 600;">604-875-4111</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>