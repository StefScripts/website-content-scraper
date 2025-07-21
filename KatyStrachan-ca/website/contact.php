// filename: contact.php
<?php
$nav_items = [
 ['title' => 'Home', 'url' => '/'],
 ['title' => 'Services', 'url' => '/services'],
 ['title' => 'About', 'url' => '/about'],
 ['title' => 'Contact', 'url' => '/contact']
];
$current_page = 'Contact';
include 'components/header.php';
include 'components/header-navigation.php';
?>
<section class="section container">
 <h1>Contact</h1>
 <p>You can reach me by phone, email, or the secure form below.</p>

 <div style="margin:2rem 0;">
  <iframe src="https://www.google.com/maps/embed?pb={{GOOGLE_MAP_EMBED_CODE}}" width="100%" height="300"
   style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 </div>

 <p><strong>Phone:</strong> <a href="tel:{{PHONE_NUMBER}}">{{PHONE_NUMBER}}</a><br>
  <strong>Email:</strong> <a href="mailto:{{EMAIL_ADDRESS}}">{{EMAIL_ADDRESS}}</a><br>
  <strong>Address:</strong> {{STREET_ADDRESS}}, {{PRACTICE_CITY}}, {{PROVINCE}}
 </p>

 <?php include 'components/forms.php'; ?>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "{{BRAND_NAME}}",
  "telephone": "{{PHONE_NUMBER}}",
  "email": "{{EMAIL_ADDRESS}}",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "{{STREET_ADDRESS}}",
    "addressLocality": "{{PRACTICE_CITY}}",
    "addressRegion": "{{PROVINCE}}",
    "postalCode": "{{POSTAL_CODE}}",
    "addressCountry": "CA"
  }
}
</script>
<?php include 'components/footer.php'; ?>