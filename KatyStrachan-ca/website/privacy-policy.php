// filename: privacy-policy.php
<?php
$nav_items = [
 ['title' => 'Home', 'url' => '/'],
 ['title' => 'Services', 'url' => '/services'],
 ['title' => 'About', 'url' => '/about'],
 ['title' => 'Contact', 'url' => '/contact']
];
$current_page = 'Privacy';
include 'components/header.php';
include 'components/header-navigation.php';
?>
<section class="section container">
 <h1>Privacy Policy</h1>
 <p>Last updated: {{POLICY_DATE}}</p>

 <h2>1. Personal Information We Collect</h2>
 <p>We collect only the information necessary to provide psychological services, such as contact details and clinical
  notes.</p>

 <h2>2. How We Use Your Information</h2>
 <p>Your data is used solely for delivering and managing therapy services in compliance with the <em>Personal
   Information Protection Act (Alberta)</em> and the <em>Personal Information Protection and Electronic Documents Act
   (PIPEDA)</em>.</p>

 <h2>3. Storage & Security</h2>
 <p>Records are stored in encrypted practice-management software located in Canada. Access is restricted to
  {{PSYCHOLOGIST_NAME}} and authorised clinical staff.</p>

 <h2>4. Your Rights</h2>
 <p>You may request access, corrections, or deletion of your personal data, subject to legal and ethical limitations.
 </p>

 <h2>5. Cookies & Analytics</h2>
 <p>This website uses essential cookies only. We do not use third-party analytics that identify individual users.</p>

 <h2>6. Contact</h2>
 <p>For privacy questions, email <a href="mailto:{{EMAIL_ADDRESS}}">{{EMAIL_ADDRESS}}</a>.</p>
</section>
<?php include 'components/footer.php'; ?>