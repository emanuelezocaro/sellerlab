<?php
$title = 'Piattaforme E-commerce per Vendere Online 2026 | SellerLab';
$description = 'Shopify, WooCommerce, PrestaShop, Magento: confronto completo.';
$canonical = 'https://sellerlab.it/tools/tools-ecommerce.php';
$og_title = 'Piattaforme E-commerce per Vendere Online 2026 | SellerLab';
$og_description = 'Shopify, WooCommerce, PrestaShop, Magento: confronto completo.';
$og_url = 'https://sellerlab.it/tools/tools-ecommerce.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'tools';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Tool & Software', 'url' => 'tools.php'], ['label' => 'Piattaforme E-commerce']];
$root = dirname(__DIR__);
include $root . '/includes/head.php';
include $root . '/includes/nav.php';
include $root . '/includes/breadcrumb.php';
include $root . '/includes/data-tools.php';
include $root . '/includes/render-card.php';
$cat = $tools_categories['ecommerce'];
$items = array_filter($tools, fn($t) => $t['category'] === 'ecommerce');
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
