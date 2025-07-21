<?php
/*--------------------------------------------------------------
  Accessible navigation component
--------------------------------------------------------------*/
?>
<nav class="nav container" role="navigation" aria-label="Primary">
 <?php foreach ($nav_items as $item): ?>
  <a href="<?= $item['url']; ?>" class="nav__link<?= $current_page === $item['title'] ? ' nav__link--active' : ''; ?>">
   <?= $item['title']; ?>
  </a>
 <?php endforeach; ?>
</nav>