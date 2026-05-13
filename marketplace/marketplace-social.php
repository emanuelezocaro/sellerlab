<?php
$title = 'Social Commerce Italia 2026 | SellerLab';
$description = 'TikTok Shop, Instagram Shop: vendere sui social in Italia.';
$canonical = 'https://sellerlab.it/marketplace/marketplace-social.php';
$og_title = 'Social Commerce Italia 2026 | SellerLab';
$og_description = 'TikTok Shop, Instagram Shop: vendere sui social in Italia.';
$og_url = 'https://sellerlab.it/marketplace/marketplace-social.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'marketplace';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Marketplace', 'url' => 'marketplace.php'], ['label' => 'Social Commerce']];
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/data-marketplace.php';
include '../includes/render-card.php';
$cat = $marketplace_categories['social'];
$items = array_filter($marketplaces, fn($m) => $m['category'] === 'social');
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
      <span class="breadcrumb-current">Social Commerce</span>
    </nav>
    <div class="grid-2">
      <?php foreach ($items as $item) render_card($item); ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/end.php'; ?>
