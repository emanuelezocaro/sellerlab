<?php $p = $current_page ?? ''; ?>
<nav id="main-nav">
  <div class="nav-inner">
    <a href="index.php" class="logo">Seller<span>Lab</span></a>
    <button class="nav-toggle" id="nav-toggle" aria-label="Apri menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <ul id="nav-menu">
      <li><a href="index.php"<?= $p === 'home' ? ' class="active"' : '' ?>>Home</a></li>
      <li><a href="marketplace.php"<?= $p === 'marketplace' ? ' class="active"' : '' ?>>Marketplace</a></li>
      <li><a href="tools.php"<?= $p === 'tools' ? ' class="active"' : '' ?>>Tool & Software</a></li>
      <li><a href="confronto.php"<?= $p === 'confronto' ? ' class="active"' : '' ?>>Confronto</a></li>
      <li><a href="calcolatore.php"<?= $p === 'calcolatore' ? ' class="active"' : '' ?>>Calcolatore</a></li>
      <li><a href="consulenza.php" class="nav-cta">Consulenza →</a></li>
    </ul>
  </div>
</nav>
<script>
(function(){
  var btn = document.getElementById('nav-toggle');
  var menu = document.getElementById('nav-menu');
  btn.addEventListener('click', function(){
    var open = menu.classList.toggle('open');
    btn.setAttribute('aria-expanded', open);
    btn.classList.toggle('open', open);
  });
  document.addEventListener('click', function(e){
    if (!document.getElementById('main-nav').contains(e.target)) {
      menu.classList.remove('open');
      btn.classList.remove('open');
      btn.setAttribute('aria-expanded', 'false');
    }
  });
})();
</script>
