<?php
$title = 'Marketplace Ricondizionato Italia 2026 | SellerLab';
$description = 'Back Market e il mercato del ricondizionato in Italia.';
$canonical = 'https://sellerlab.it/marketplace/marketplace-ricondizionato.php';
$og_title = 'Marketplace Ricondizionato Italia 2026 | SellerLab';
$og_description = 'Back Market e il mercato del ricondizionato in Italia.';
$og_url = 'https://sellerlab.it/marketplace/marketplace-ricondizionato.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'marketplace';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Marketplace', 'url' => 'marketplace.php'], ['label' => 'Ricondizionato']];
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/data-marketplace.php';
include '../includes/render-card.php';
$cat = $marketplace_categories['ricondizionato'];
$items = array_filter($marketplaces, fn($m) => $m['category'] === 'ricondizionato');
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
      <span class="breadcrumb-current">Ricondizionato</span>
    </nav>
    <div class="grid-2">
      <?php foreach ($items as $item) render_card($item); ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/end.php'; ?>
