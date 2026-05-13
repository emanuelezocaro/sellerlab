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
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Marketplace', 'url' => 'marketplace.php'], ['label' => 'Outlet & Flash Sale']];
$root = dirname(__DIR__);
include $root . '/includes/head.php';
include $root . '/includes/nav.php';
include $root . '/includes/breadcrumb.php';
include $root . '/includes/data-marketplace.php';
include $root . '/includes/render-card.php';
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
<div class="grid-2">
      <?php foreach ($items as $item) render_card($item); ?>
    </div>
  </div>
</section>

<?php include $root . '/includes/footer.php'; ?>
<?php include $root . '/includes/end.php'; ?>
