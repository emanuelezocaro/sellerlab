<?php
$title = 'Tool Analytics Amazon per Seller 2026 | SellerLab';
$description = 'Helium 10, Jungle Scout, Keepa, Sellerboard: analytics per Amazon seller.';
$canonical = 'https://sellerlab.it/tools/tools-analytics.php';
$og_title = 'Tool Analytics Amazon per Seller 2026 | SellerLab';
$og_description = 'Helium 10, Jungle Scout, Keepa, Sellerboard: analytics per Amazon seller.';
$og_url = 'https://sellerlab.it/tools/tools-analytics.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'tools';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Tool & Software', 'url' => 'tools.php'], ['label' => 'Analytics Amazon']];
$root = dirname(__DIR__);
include $root . '/includes/head.php';
include $root . '/includes/nav.php';
include $root . '/includes/breadcrumb.php';
include $root . '/includes/data-tools.php';
include $root . '/includes/render-card.php';
$cat = $tools_categories['analytics'];
$items = array_filter($tools, function($t) { return $t['category'] === 'analytics'; });
?>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Tool & Software</div>
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
