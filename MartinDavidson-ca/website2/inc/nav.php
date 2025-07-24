<nav class="main-nav">
  <div class="nav-container">
    <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
      <span class="nav-toggle-bar"></span>
    </button>
    <ul class="nav-menu">
      <li class="nav-item">
        <a href="/index.php" class="nav-link <?= $current === 'index.php' ? 'active' : '' ?>">Home</a>
      </li>
      <li class="nav-item">
        <a href="/about.php" class="nav-link <?= $current === 'about.php' ? 'active' : '' ?>">About</a>
      </li>
      <li class="nav-item">
        <a href="/approach.php" class="nav-link <?= $current === 'approach.php' ? 'active' : '' ?>">Approach &amp; Services</a>
      </li>
      <li class="nav-item">
        <a href="/contact.php" class="nav-link <?= $current === 'contact.php' ? 'active' : '' ?>">Contact</a>
      </li>
    </ul>
  </div>
</nav>