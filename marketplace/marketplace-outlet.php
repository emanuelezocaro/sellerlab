<?php
$title = 'Marketplace Outlet e Flash Sale 2026 | SellerLab';
$description = 'Veepee, Privalia e le vendite flash: come funzionano per i venditori.';
$canonical = 'https://sellerlab.it/marketplace/marketplace-outlet.php';
$og_title = 'Marketplace Outlet e Flash Sale 2026 | SellerLab';
$og_description = 'Veepee, Privalia e le vendite flash: come funzionano per i venditori.';
$og_url = 'https://sellerlab.it/marketplace/marketplace-outlet.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'marketplace';
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/data-marketplace.php';
include '../includes/render-card.php';
$cat = $marketplace_categories['outlet'];
$items = array_filter($marketplaces, fn($m) => $m['category'] === 'outlet');
?>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Marketplace</div>
    <h1><?= htmlspecialchars($cat['h2']) ?></h1>
    <p><?= htmlspecialchars($cat['desc']) ?></p>
  </div>
</div>

<section class="section">
  <div class="section-inner">
    <nav class="breadcrumb">
      <a href="../index.php">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="../marketplace.php">Marketplace</a>
      <span class="breadcrumb-sep">/</span>
      <span class="breadcrumb-current">Outlet & Flash Sale</span>
    </nav>
    <div class="grid-2">
      <?php foreach ($items as $item) render_card($item); ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/end.php'; ?>
