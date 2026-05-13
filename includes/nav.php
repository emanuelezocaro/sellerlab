<?php $p = $current_page ?? ''; ?>
<nav>
  <div class="nav-inner">
    <a href="index.php" class="logo">Seller<span>Lab</span></a>
    <ul>
      <li><a href="index.php"<?= $p === 'home' ? ' class="active"' : '' ?>>Home</a></li>
      <li><a href="marketplace.php"<?= $p === 'marketplace' ? ' class="active"' : '' ?>>Marketplace</a></li>
      <li><a href="tools.php"<?= $p === 'tools' ? ' class="active"' : '' ?>>Tool & Software</a></li>
      <li><a href="confronto.php"<?= $p === 'confronto' ? ' class="active"' : '' ?>>Confronto</a></li>
      <li><a href="calcolatore.php"<?= $p === 'calcolatore' ? ' class="active"' : '' ?>>Calcolatore</a></li>
      <li><a href="consulenza.php" class="nav-cta">Consulenza →</a></li>
    </ul>
  </div>
</nav>
