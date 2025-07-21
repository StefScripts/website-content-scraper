    </main>
    <!-- End of main content wrapper -->
    
    <!-- Footer -->
    <footer class="site-footer">
        <!-- Footer widgets -->
        <div class="footer-widgets">
            <div class="container">
                <div class="footer-columns">
                    <!-- About column -->
                    <div class="footer-column">
                        <h3>About Dr. Prisman</h3>
                        <p>With over 20 years of experience in psychiatry, Dr. Desiree Prisman provides compassionate, evidence-based mental health care. Trained with DBT founder Marsha Linehan, she specializes in helping clients build lives worth living.</p>
                    </div>
                    
                    <!-- Quick Links column -->
                    <div class="footer-column">
                        <h3>Quick Links</h3>
                        <ul class="footer-links">
                            <?php foreach (getNavigation() as $item): ?>
                                <li><a href="<?php echo htmlspecialchars($item['url']); ?>"><?php echo htmlspecialchars($item['text']); ?></a></li>
                            <?php endforeach; ?>
                            <li><a href="/privacy-policy.php">Privacy Policy</a></li>
                        </ul>
                    </div>
                    
                    <!-- Services column -->
                    <div class="footer-column">
                        <h3>Services</h3>
                        <ul class="footer-links">
                            <li><a href="/services.php#individual-therapy">Individual Therapy</a></li>
                            <li><a href="/services.php#dbt-therapy">DBT (Dialectical Behavior Therapy)</a></li>
                            <li><a href="/services.php#cbt-therapy">CBT (Cognitive Behavioral Therapy)</a></li>
                            <li><a href="/services.php#assessments">Psychiatric Assessments</a></li>
                            <li><a href="/services.php#workshops">Workshops &amp; Groups</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact column -->
                    <div class="footer-column">
                        <h3>Contact Information</h3>
                        <div class="footer-contact">
                            <div class="contact-item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                                <address>
                                    <?php echo ADDRESS; ?><br>
                                    <?php echo CITY; ?>, <?php echo PROVINCE; ?> <?php echo POSTAL_CODE; ?>
                                </address>
                            </div>
                            <div class="contact-item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                                <a href="<?php echo formatPhoneLink(PHONE); ?>"><?php echo PHONE; ?></a>
                            </div>
                            <div class="contact-item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                                <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a>
                            </div>
                            <div class="contact-item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                                <span><?php echo BUSINESS_HOURS; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer CTA -->
        <div class="footer-cta">
            <div class="container">
                <div class="cta-content">
                    <h3>Ready to Start Your Journey to Better Mental Health?</h3>
                    <p>Book a consultation with Dr. Prisman today and take the first step towards healing.</p>
                    <a href="/contact-us.php" class="btn btn-secondary">Book Consultation</a>
                </div>
            </div>
        </div>
        
        <!-- Footer bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p class="copyright">&copy; <?php echo date('Y'); ?> Dr. Desiree Prisman. All rights reserved.</p>
                    <p class="footer-credentials">Licensed Psychiatrist | College of Physicians and Surgeons of BC</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Back to top button -->
    <button id="back-to-top" class="back-to-top" aria-label="Back to top">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="18 15 12 9 6 15"/>
        </svg>
    </button>
    
    <!-- Scripts -->
    <script src="/assets/js/main.js"></script>
</body>
</html>