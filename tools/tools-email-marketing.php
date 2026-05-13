<?php
$title = 'Tool Email Marketing per E-commerce 2026 | SellerLab';
$description = 'Klaviyo: email marketing e CRM per e-commerce e seller.';
$canonical = 'https://sellerlab.it/tools/tools-email-marketing.php';
$og_title = 'Tool Email Marketing per E-commerce 2026 | SellerLab';
$og_description = 'Klaviyo: email marketing e CRM per e-commerce e seller.';
$og_url = 'https://sellerlab.it/tools/tools-email-marketing.php';
$og_locale = 'it_IT';
$css_path = '../style.css';
$base_path = '../';
$current_page = 'tools';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Tool & Software', 'url' => 'tools.php'], ['label' => 'Email & CRM']];
include '../includes/head.php';
include '../includes/nav.php';
include '../includes/data-tools.php';
include '../includes/render-card.php';
$cat = $tools_categories['email-marketing'];
$items = array_filter($tools, fn($t) => $t['category'] === 'email-marketing');
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
      <span class="breadcrumb-current">Email & CRM</span>
    </nav>
    <div class="grid-2">
      <?php foreach ($items as $item) render_card($item); ?>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/end.php'; ?>
