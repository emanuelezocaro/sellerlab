<?php
$title = 'Tool Pagamenti e BNPL per E-commerce 2026 | SellerLab';
$description = 'Scalapay, Satispay, PayPal, Klarna, Nexi: pagamenti per e-commerce.';
$canonical = 'https://sellerlab.it/tools/tools-pagamenti.php';
$og_title = 'Tool Pagamenti e BNPL per E-commerce 2026 | SellerLab';
$og_description = 'Scalapay, Satispay, PayPal, Klarna, Nexi: pagamenti per e-commerce.';
$og_url = 'https://sellerlab.it/tools/tools-pagamenti.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'tools';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Tool & Software', 'url' => 'tools.php'], ['label' => 'Pagamenti & BNPL']];
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/data-tools.php';
include '../includes/render-card.php';
$cat = $tools_categories['pagamenti'];
$items = array_filter($tools, fn($t) => $t['category'] === 'pagamenti');
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
    <?php include '../includes/breadcrumb.php'; ?>
<div class="grid-2">
      <?php foreach ($items as $item) render_card($item); ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/end.php'; ?>
