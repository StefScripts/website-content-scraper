<?php
$nav_items = [
 ['title' => 'Home', 'url' => '/'],
 ['title' => 'Services', 'url' => '/services'],
 ['title' => 'About', 'url' => '/about'],
 ['title' => 'Contact', 'url' => '/contact']
];
$current_page = 'Home';

$services = [
 'Individual Therapy',
 'Couples & Relationship Counselling',
 'Adolescent & Family Therapy',
 'Psychological Assessments',
 'Stress & Burnout-Management Workshops',
 'Tele-psychology / Virtual Sessions'
];

include 'components/header.php';
include 'components/header-navigation.php';
?>
<section class="hero text-center">
 <div class="container">
  <h1 class="hero__title">Find clarity, build resilience.</h1>
  <p class="hero__subtitle">Evidence-based therapy with {{PSYCHOLOGIST_NAME}}, Registered Psychologist in
   {{PRACTICE_CITY}}.</p>
  <a href="/contact" class="btn">Book a free consult</a>
 </div>
</section>

<section class="section container">
 <h2 class="text-center">How I Can Help</h2>
 <div class="services">
  <?php foreach (array_slice($services, 0, 3) as $service): ?>
   <article class="service-card">
    <h3><?= $service; ?></h3>
    <p>Brief supportive blurb about <?= strtolower($service); ?>.</p>
    <a href="/services" class="btn btn--outline">Learn more</a>
   </article>
  <?php endforeach; ?>
 </div>
</section>

<section class="section" style="background: var(--neutral-color);">
 <div class="container text-center">
  <h2>Client Stories</h2>
  <p>(Testimonial slider placeholder)</p>
 </div>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "{{BRAND_NAME}}",
  "image": "{{LOGO_URL}}",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "{{STREET_ADDRESS}}",
    "addressLocality": "{{PRACTICE_CITY}}",
    "addressRegion": "{{PROVINCE}}",
    "postalCode": "{{POSTAL_CODE}}",
    "addressCountry": "CA"
  },
  "telephone": "{{PHONE_NUMBER}}",
  "priceRange": "$$",
  "url": "{{SITE_URL}}"
}
</script>
<?php include 'components/footer.php'; ?>