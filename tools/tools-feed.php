<?php
$title = 'Tool Feed Management e Multichannel 2026 | SellerLab';
$description = 'Lengow, Channable, DataFeedWatch: gestisci il catalogo su tutti i marketplace.';
$canonical = 'https://sellerlab.it/tools/tools-feed.php';
$og_title = 'Tool Feed Management e Multichannel 2026 | SellerLab';
$og_description = 'Lengow, Channable, DataFeedWatch: gestisci il catalogo su tutti i marketplace.';
$og_url = 'https://sellerlab.it/tools/tools-feed.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'tools';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Tool & Software', 'url' => 'tools.php'], ['label' => 'Feed & Multichannel']];
$root = dirname(__DIR__);
include $root . '/includes/head.php';
include $root . '/includes/nav.php';
include $root . '/includes/breadcrumb.php';
include $root . '/includes/data-tools.php';
include $root . '/includes/render-card.php';
$cat = $tools_categories['feed'];
$items = array_filter($tools, fn($t) => $t['category'] === 'feed');
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
