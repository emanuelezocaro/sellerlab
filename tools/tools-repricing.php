<?php
$title = 'Tool Repricing Amazon e Marketplace 2026 | SellerLab';
$description = 'Repricer.com, Prisync: repricing automatico per marketplace.';
$canonical = 'https://sellerlab.it/tools/tools-repricing.php';
$og_title = 'Tool Repricing Amazon e Marketplace 2026 | SellerLab';
$og_description = 'Repricer.com, Prisync: repricing automatico per marketplace.';
$og_url = 'https://sellerlab.it/tools/tools-repricing.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'tools';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Tool & Software', 'url' => 'tools.php'], ['label' => 'Repricing']];
$root = dirname(__DIR__);
include $root . '/includes/head.php';
include $root . '/includes/nav.php';
include $root . '/includes/breadcrumb.php';
include $root . '/includes/data-tools.php';
include $root . '/includes/render-card.php';
$cat = $tools_categories['repricing'];
$items = array_filter($tools, function($t) { return $t['category'] === 'repricing'; });
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
