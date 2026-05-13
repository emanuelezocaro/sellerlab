<?php
$title = 'Marketplace Fashion e Moda Italia 2026 | SellerLab';
$description = 'Zalando, Farfetch, YOOX, Depop: i canali per vendere moda in Italia.';
$canonical = 'https://sellerlab.it/marketplace/marketplace-fashion.php';
$og_title = 'Marketplace Fashion e Moda Italia 2026 | SellerLab';
$og_description = 'Zalando, Farfetch, YOOX, Depop: i canali per vendere moda in Italia.';
$og_url = 'https://sellerlab.it/marketplace/marketplace-fashion.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'marketplace';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Marketplace', 'url' => 'marketplace.php'], ['label' => 'Moda & Fashion']];
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/data-marketplace.php';
include '../includes/render-card.php';
$cat = $marketplace_categories['fashion'];
$items = array_filter($marketplaces, fn($m) => $m['category'] === 'fashion');
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
    <?php include '../includes/breadcrumb.php'; ?>
<div class="grid-2">
      <?php foreach ($items as $item) render_card($item); ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/end.php'; ?>
