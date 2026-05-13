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
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/data-tools.php';
include '../includes/render-card.php';
$cat = $tools_categories['repricing'];
$items = array_filter($tools, fn($t) => $t['category'] === 'repricing');
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
    <nav class="breadcrumb">
      <a href="../index.php">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="../tools.php">Tool & Software</a>
      <span class="breadcrumb-sep">/</span>
      <span class="breadcrumb-current">Repricing</span>
    </nav>
    <div class="grid-2">
      <?php foreach ($items as $item) render_card($item); ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/end.php'; ?>
