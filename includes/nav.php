<?php
$p = $current_page ?? '';
$b = $base_path ?? '';
?>
<nav id="main-nav">
  <div class="nav-inner">
    <a href="<?= $b ?>index.php" class="logo">Seller<span>Lab</span></a>
    <button class="nav-toggle" id="nav-toggle" aria-label="Apri menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <ul id="nav-menu">
      <li><a href="<?= $b ?>index.php"<?= $p === 'home' ? ' class="active"' : '' ?>>Home</a></li>
      <li class="has-dropdown">
        <a href="<?= $b ?>marketplace.php"<?= $p === 'marketplace' ? ' class="active"' : '' ?>>Marketplace <span class="dropdown-arrow">▾</span></a>
        <ul class="dropdown">
          <li><a href="<?= $b ?>marketplace/marketplace-generalisti.php">Generalisti</a></li>
          <li><a href="<?= $b ?>marketplace/marketplace-verticali.php">Verticali</a></li>
          <li><a href="<?= $b ?>marketplace/marketplace-fashion.php">Moda & Fashion</a></li>
          <li><a href="<?= $b ?>marketplace/marketplace-comparatori.php">Comparatori</a></li>
          <li><a href="<?= $b ?>marketplace/marketplace-social.php">Social Commerce</a></li>
          <li><a href="<?= $b ?>marketplace/marketplace-outlet.php">Outlet & Flash Sale</a></li>
          <li><a href="<?= $b ?>marketplace/marketplace-ricondizionato.php">Ricondizionato</a></li>
          <li><a href="<?= $b ?>marketplace/marketplace-internazionali.php">Internazionali</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <a href="<?= $b ?>tools.php"<?= $p === 'tools' ? ' class="active"' : '' ?>>Tool & Software <span class="dropdown-arrow">▾</span></a>
        <ul class="dropdown">
          <li><a href="<?= $b ?>tools/tools-ecommerce.php">Piattaforme E-commerce</a></li>
          <li><a href="<?= $b ?>tools/tools-feed.php">Feed & Multichannel</a></li>
          <li><a href="<?= $b ?>tools/tools-analytics.php">Analytics Amazon</a></li>
          <li><a href="<?= $b ?>tools/tools-repricing.php">Repricing</a></li>
          <li><a href="<?= $b ?>tools/tools-inventory.php">Inventario & Ordini</a></li>
          <li><a href="<?= $b ?>tools/tools-reviews.php">Recensioni</a></li>
          <li><a href="<?= $b ?>tools/tools-spedizioni.php">Spedizioni</a></li>
          <li><a href="<?= $b ?>tools/tools-email-marketing.php">Email & CRM</a></li>
          <li><a href="<?= $b ?>tools/tools-pagamenti.php">Pagamenti & BNPL</a></li>
        </ul>
      </li>
      <li><a href="<?= $b ?>confronto.php"<?= $p === 'confronto' ? ' class="active"' : '' ?>>Confronto</a></li>
      <li><a href="<?= $b ?>calcolatore.php"<?= $p === 'calcolatore' ? ' class="active"' : '' ?>>Calcolatore</a></li>
      <li><a href="<?= $b ?>consulenza.php" class="nav-cta">Consulenza →</a></li>
    </ul>
  </div>
</nav>
<?php if (!empty($breadcrumb)): ?>
<div class="breadcrumb-bar">
  <div class="breadcrumb-bar-inner">
    <?php foreach ($breadcrumb as $i => $crumb): ?>
      <?php if ($i > 0): ?><span class="breadcrumb-sep">/</span><?php endif; ?>
      <?php if (!empty($crumb['url'])): ?>
        <a href="<?= $b . htmlspecialchars($crumb['url']) ?>"><?= htmlspecialchars($crumb['label']) ?></a>
      <?php else: ?>
        <span class="breadcrumb-current"><?= htmlspecialchars($crumb['label']) ?></span>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>
<script>
(function(){
  var btn = document.getElementById('nav-toggle');
  var menu = document.getElementById('nav-menu');

  // hamburger toggle
  btn.addEventListener('click', function(){
    var open = menu.classList.toggle('open');
    btn.setAttribute('aria-expanded', open);
    btn.classList.toggle('open', open);
  });

  // dropdown toggle on mobile (click parent link)
  document.querySelectorAll('.has-dropdown > a').forEach(function(link) {
    link.addEventListener('click', function(e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        var li = link.parentElement;
        var wasOpen = li.classList.contains('open');
        document.querySelectorAll('.has-dropdown').forEach(function(d){ d.classList.remove('open'); });
        if (!wasOpen) li.classList.add('open');
      }
    });
  });

  // close on outside click
  document.addEventListener('click', function(e){
    if (!document.getElementById('main-nav').contains(e.target)) {
      menu.classList.remove('open');
      btn.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
      document.querySelectorAll('.has-dropdown').forEach(function(d){ d.classList.remove('open'); });
    }
  });
})();
</script>
