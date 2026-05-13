<?php
$title = 'Marketplace Generalisti Italia 2026 | SellerLab';
$description = 'Amazon, eBay, Subito e le grandi piattaforme generaliste per vendere online in Italia.';
$canonical = 'https://sellerlab.it/marketplace/marketplace-generalisti.php';
$og_title = 'Marketplace Generalisti Italia 2026 | SellerLab';
$og_description = 'Amazon, eBay, Subito e le grandi piattaforme generaliste per vendere online in Italia.';
$og_url = 'https://sellerlab.it/marketplace/marketplace-generalisti.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'marketplace';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Marketplace', 'url' => 'marketplace.php'], ['label' => 'Generalisti']];
$root = dirname(__DIR__);
include $root . '/includes/head.php';
include $root . '/includes/nav.php';
include $root . '/includes/breadcrumb.php';
include $root . '/includes/data-marketplace.php';
include $root . '/includes/render-card.php';
$cat = $marketplace_categories['generalisti'];
$items = array_filter($marketplaces, fn($m) => $m['category'] === 'generalisti');
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
