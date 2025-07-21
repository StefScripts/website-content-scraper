<?php
$nav_items = [
 ['title' => 'Home', 'url' => '/'],
 ['title' => 'Services', 'url' => '/services'],
 ['title' => 'About', 'url' => '/about'],
 ['title' => 'Contact', 'url' => '/contact']
];
$current_page = 'Services';

$services = [
 [
  'title' => 'Individual Therapy',
  'excerpt' => 'Personalised sessions for anxiety, depression & trauma.',
  'slug' => 'individual-therapy'
 ],
 [
  'title' => 'Couples & Relationship Counselling',
  'excerpt' => 'Evidence-based approaches to strengthen connection.',
  'slug' => 'couples-counselling'
 ],
 [
  'title' => 'Adolescent & Family Therapy',
  'excerpt' => 'Supporting teens and families through transition.',
  'slug' => 'family-therapy'
 ],
 [
  'title' => 'Psychological Assessments',
  'excerpt' => 'Comprehensive ADHD & learning-disorder evaluations.',
  'slug' => 'assessments'
 ],
 [
  'title' => 'Stress & Burnout-Management Workshops',
  'excerpt' => 'Group workshops for healthier workplaces.',
  'slug' => 'stress-management'
 ],
 [
  'title' => 'Tele-psychology / Virtual Sessions',
  'excerpt' => 'Secure video sessions across {{PROVINCE}}.',
  'slug' => 'telepsychology'
 ]
];

include 'components/header.php';
include 'components/header-navigation.php';
?>
<section class="section container">
 <nav aria-label="breadcrumb" style="margin-bottom:1rem;">
  <a href="/">Home</a> › Services
 </nav>
 <h1>Services</h1>

 <div class="services">
  <?php foreach ($services as $service): ?>
   <article class="service-card" id="<?= $service['slug']; ?>">
    <h2><?= $service['title']; ?></h2>
    <p><?= $service['excerpt']; ?></p>
    <a href="/contact" class="btn btn--outline">Book now</a>
   </article>
  <?php endforeach; ?>
 </div>
</section>
<?php include 'components/footer.php'; ?>