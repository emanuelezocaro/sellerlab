<?php
$title = 'Tool Inventory e Gestione Ordini 2026 | SellerLab';
$description = 'Linnworks, Veeqo: gestisci inventario e ordini su più canali.';
$canonical = 'https://sellerlab.it/tools/tools-inventory.php';
$og_title = 'Tool Inventory e Gestione Ordini 2026 | SellerLab';
$og_description = 'Linnworks, Veeqo: gestisci inventario e ordini su più canali.';
$og_url = 'https://sellerlab.it/tools/tools-inventory.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'tools';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Tool & Software', 'url' => 'tools.php'], ['label' => 'Inventario & Ordini']];
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/breadcrumb.php';
include '../includes/data-tools.php';
include '../includes/render-card.php';
$cat = $tools_categories['inventory'];
$items = array_filter($tools, fn($t) => $t['category'] === 'inventory');
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

<?php include '../includes/footer.php'; ?>
<?php include '../includes/end.php'; ?>
