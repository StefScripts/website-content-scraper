<?php
$nav_items = [
 ['title' => 'Home', 'url' => '/'],
 ['title' => 'Services', 'url' => '/services'],
 ['title' => 'About', 'url' => '/about'],
 ['title' => 'Contact', 'url' => '/contact']
];
$current_page = 'About';
include 'components/header.php';
include 'components/header-navigation.php';
?>
<section class="section container">
 <h1>About {{BRAND_NAME}}</h1>
 <p>Hi, I’m <strong>{{PSYCHOLOGIST_NAME}}</strong>, a Registered Psychologist passionate about helping you turn insight
  into action. With over {{YEARS_EXPERIENCE}} years of clinical experience, I blend cognitive-behavioural, mindfulness
  and attachment-based approaches to create real, lasting change.</p>

 <h2>Our Values</h2>
 <ul>
  <li><strong>Compassion:</strong> Every story deserves empathy.</li>
  <li><strong>Evidence-based:</strong> We use methods proven to work.</li>
  <li><strong>Collaboration:</strong> Therapy is a partnership.</li>
 </ul>

 <h2>Meet the Team</h2>
 <div class="services">
  <!-- Four team headshot placeholders -->
  <?php for ($i = 1; $i <= 4; $i++): ?>
   <article class="service-card">
    <img src="https://via.placeholder.com/300x300?text=Photo+<?= $i; ?>" alt="Team member <?= $i; ?>"
     style="border-radius:50%; width:120px; height:120px; object-fit:cover; margin-bottom:1rem;">
    <h3>{{TEAM_MEMBER_<?= $i; ?>_NAME}}</h3>
    <p>{{TEAM_MEMBER_<?= $i; ?>_ROLE}}</p>
   </article>
  <?php endfor; ?>
 </div>
</section>
<?php include 'components/footer.php'; ?>