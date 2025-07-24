<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<header>
 Martin Davidson, Ph.D.
 <nav>
  <ul>
   <li><a href="/index.php" class="<?= $current === 'index.php' ? 'active' : '' ?>">Home</a></li>
   <li><a href="/about.php" class="<?= $current === 'about.php' ? 'active' : '' ?>">About</a></li>
   <li><a href="/approach.php" class="<?= $current === 'approach.php' ? 'active' : '' ?>">Approach &amp; Services</a>
   </li>
   <li><a href="/contact.php" class="<?= $current === 'contact.php' ? 'active' : '' ?>">Contact</a></li>
  </ul>
 </nav>
</header>